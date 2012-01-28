<?php
	/*
		UserCake Version: 1.4
		http://usercake.com
		
		Developed by: Adam Davis
	*/
	require_once("/../config.php");
	
	$dao = new AuthDAO();
	//Prevent the user visiting the lost password page if he/she is already logged in
	if($dao->isUserLoggedIn()) { header("Location: account.php"); die(); }
?>
<?php
	/* 
		Below is a very simple example of how to process a lost password request
		We'll deal with a request in two stages, confirmation or deny then proccess
		
		This file handles 3 tasks.
		
		1. Construct new request.
		2. Confirm request. - Generate new password, update the db then email the user
		3. Deny request. - Close the request
	*/
	
$errors = array();
$success_message = "";
	
//User has confirmed they want their password changed
//----------------------------------------------------------------------------------------------
if(!empty($_GET["confirm"]))
{
	$token = trim($_GET["confirm"]);

	if($token == "" || !validateActivationToken($token,TRUE))
	{
		$errors[] = AuthController::lang("FORGOTPASS_INVALID_TOKEN");
	}
	else
	{
		$rand_pass = getUniqueCode(15);
		$secure_pass = generateHash($rand_pass);
		
		$userdetails = fetchUserDetails(NULL,$token);
		
		$mail = new userCakeMail();		
						
		//Setup our custom hooks
		$hooks = array(
				"searchStrs" => array("#GENERATED-PASS#","#USERNAME#"),
				"subjectStrs" => array($rand_pass,$userdetails["Username"])
		);
					
		if(!$mail->newTemplateMsg("your-lost-password.txt",$hooks))
		{
			$errors[] = AuthController::lang("MAIL_TEMPLATE_BUILD_ERROR");
		}
		else
		{	
			if(!$mail->sendMail($userdetails["Email"],"Your new password"))
			{
					$errors[] = AuthController::lang("MAIL_ERROR");
			}
			else
			{
					if(!updatePasswordFromToken($secure_pass,$token))
					{
						$errors[] = AuthController::lang("SQL_ERROR");
					}
					else
					{	
						//Might be wise if this had a time delay to prevent a flood of requests.
						flagLostPasswordRequest($userdetails["Username_Clean"],0);
						
						$success_message  = AuthController::lang("FORGOTPASS_NEW_PASS_EMAIL");
					}
			}
		}
			
	}
}

//----------------------------------------------------------------------------------------------

//User has denied this request
//----------------------------------------------------------------------------------------------
if(!empty($_GET["deny"]))
{
	$token = trim($_GET["deny"]);
	
	if($token == "" || !validateActivationToken($token,TRUE))
	{
		$errors[] = AuthController::lang("FORGOTPASS_INVALID_TOKEN");
	}
	else
	{
	
		$userdetails = fetchUserDetails(NULL,$token);
		
		flagLostPasswordRequest($userdetails['Username_Clean'],0);
		
		$success_message = AuthController::lang("FORGOTPASS_REQUEST_CANNED");
	}
}




//----------------------------------------------------------------------------------------------


//Forms posted
//----------------------------------------------------------------------------------------------
if(!empty($_POST))
{
	$email = $_POST["email"];
	$username = $_POST["username"];
	
	//Perform some validation
	//Feel free to edit / change as required
	
	if(trim($email) == "")
	{
		$errors[] = AuthController::lang("ACCOUNT_SPECIFY_EMAIL");
	}
	//Check to ensure email is in the correct format / in the db
	else if(!AuthController::isValidEmail($email) || !$dao->emailExists($email))
	{
		$errors[] = AuthController::lang("ACCOUNT_INVALID_EMAIL");
	}
	
	if(trim($username) == "")
	{
		$errors[] = AuthController::lang("ACCOUNT_SPECIFY_USERNAME");
	}
	else if(!$dao->usernameExists($username))
	{
		$errors[] = AuthController::lang("ACCOUNT_INVALID_USERNAME");
	}
	
	
	if(count($errors) == 0)
	{
	
		//Check that the username / email are associated to the same account
		if(!$dao->emailUsernameLinked($email,$username))
		{
			$errors[] =  AuthController::lang("ACCOUNT_USER_OR_EMAIL_INVALID");
		}
		else
		{
			//Check if the user has any outstanding lost password requests
			$userdetails = $dao->fetchUserDetails($username);
			
			if($userdetails["LostPasswordRequest"] == 1)
			{
				$errors[] = AuthController::lang("FORGOTPASS_REQUEST_EXISTS");
			}
			else
			{
				//Email the user asking to confirm this change password request
				//We can use the template builder here
				
				//We use the activation token again for the url key it gets regenerated everytime it's used.
				
				$confirm_url = AuthController::lang("CONFIRM")."\n".$websiteUrl."forgot-password.php?confirm=".$userdetails["ActivationToken"];
				$deny_url = ("DENY")."\n".$websiteUrl."forgot-password.php?deny=".$userdetails["ActivationToken"];
				
				//Setup our custom hooks
				$hooks = array(
					"searchStrs" => array("#CONFIRM-URL#","#DENY-URL#","#USERNAME#"),
					"subjectStrs" => array($confirm_url,$deny_url,$userdetails["Username"])
				);
				
				if(!$dao->newTemplateMsg("lost-password-request.txt",$hooks))
				{
					$errors[] = AuthController::lang("MAIL_TEMPLATE_BUILD_ERROR");
				}
				else
				{
					if(!$dao->sendMail($userdetails["Email"],"Lost password request"))
					{
						$errors[] = AuthController::lang("MAIL_ERROR");
					}
					else
					{
						//Update the DB to show this account has an outstanding request
						$dao->flagLostPasswordRequest($username,1);
						$success_message = AuthController::lang("FORGOTPASS_REQUEST_SUCCESS");
					}
				}
			}
		}
	}
}	
//----------------------------------------------------------------------------------------------	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forgot Password</title>
<link href="/KRA/static/css/cakestyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="content">
	
        <div id="left-nav">
        <?php include("layout_inc/left-nav.php"); ?>
            <div class="clear"></div>
        </div>
        
        <div id="main">
        
        <h1>Forgot Password</h1>
        
		<?php
        if(!empty($_POST) || !empty($_GET))
        {
            if(count($errors) > 0)
            {
		?>
        	<div id="errors">
            	<?php AuthController::errorBlock($errors); ?>
            </div> 
        <?php
            }
			else
			{
		?>
            <div id="success">
            
                <p><?php echo $success_message; ?></p>
            
            </div>
        <?php
			}
        }
        ?> 
        
        <div id="regbox">
            <form name="newLostPass" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            
            <p>
                <label>Username:</label>
                <input type="text" name="username" />
            </p>
            
            
            <p>    
                <label>Email:</label>
                <input type="text" name="email" />
            </p>
            
            
            <p>
                <label>&nbsp;</label>
                <input type="submit" value="Login" class="submit" />
            </p>
            
            </form>
        </div>

            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
</html>


