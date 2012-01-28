<?php
	/*
		UserCake Version: 1.4
		http://usercake.com
		
		Developed by: Adam Davis
	*/
	require_once("/../conf/config.php");
	
	$request = new Request(
		$_COOKIE,
		$_FILES,
		$_GET,
		$_POST,
		$_REQUEST,
		$_SESSION,
		$_SERVER
	);
	$dao = new AuthDAO();
	//Prevent the user visiting the lost password page if he/she is already logged in
	if($dao->isUserLoggedIn($request->user)) { header("Location: account.php"); die(); }
?>
<?php
	/* 
		Below process a new activation link for a user, as they first activation email may have never arrived.
	*/
	
	
$errors = array();
$success_message = "";

//Forms posted
//----------------------------------------------------------------------------------------------
if(!empty($_POST) && $emailActivation)
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
		else if(!AuthController::isValidEmail($email) || !emailExists($email))
		{
			$errors[] = AuthController::lang("ACCOUNT_INVALID_EMAIL");
		}
		
		if(trim($username) == "")
		{
			$errors[] =  lang("ACCOUNT_SPECIFY_USERNAME");
		}
		else if(!$dao->usernameExists($username))
		{
			$errors[] = AuthController::lang("ACCOUNT_INVALID_USERNAME");
		}
		
		
		if(count($errors) == 0)
		{
			//Check that the username / email are associated to the same account
			if(!emailUsernameLinked($email,$username))
			{
				$errors[] = AuthController::lang("ACCOUNT_USER_OR_EMAIL_INVALID");
			}
			else
			{
				$userdetails = fetchUserDetails($username);
			
				//See if the user's account is activation
				if($userdetails->is_active)
				{
					$errors[] = AuthController::lang("ACCOUNT_ALREADY_ACTIVE");
				}
				else
				{
					$hours_diff = round((time()-$userdetails->last_activation_request) / (3600*$resend_activation_threshold),0);

					if($resend_activation_threshold!=0 && $hours_diff <= $resend_activation_threshold)
					{
						$errors[] = AuthController::lang("ACCOUNT_LINK_ALREADY_SENT",array($resend_activation_threshold));
					}
					else
					{
						//For security create a new activation url;
						$new_activation_token = generateActivationToken();
						
						if(!updateLastActivationRequest($new_activation_token,$username,$email))
						{
							$errors[] = AuthController::lang("SQL_ERROR");
						}
						else
						{
							$mail = new userCakeMail();
							
							$activation_url = $websiteUrl."activate-account.php?token=".$new_activation_token;
						
							//Setup our custom hooks
							$hooks = array(
								"searchStrs" => array("#ACTIVATION-URL","#USERNAME#"),
								"subjectStrs" => array($activation_url,$userdetails->username)
							);
							
							if(!$mail->newTemplateMsg("resend-activation.txt",$hooks))
							{
								$errors[] = AuthController::lang("MAIL_TEMPLATE_BUILD_ERROR");
							}
							else
							{
								if(!$mail->sendMail($userdetails->email,"Activate your UserCake Account"))
								{
									$errors[] = AuthController::lang("MAIL_ERROR");
								}
								else
								{
									//Success, user details have been updated in the db now mail this information out.
									$success_message = AuthController::lang("ACCOUNT_NEW_ACTIVATION_SENT");
								}
							}
						}
					}
				}
			}
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resend Activation Email</title>
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
 
 	 <h1>Resend Activation Email</h1>
 
    <?php
    if(!empty($_POST) || !empty($_GET["confirm"]) || !empty($_GET["deny"]) && $emailActivation)
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
	
	<?php 
    
    if(!$emailActivation)
    { 
        echo lang("FEATURE_DISABLED");
    }
	else
	{
    ?>
        <form name="resendActivation" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        
        
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

	 <?php } ?> 
     </div>   
     
     		<div class="clear"></div>   
		</div>
	</div>   
</div>
</body>
</html>


