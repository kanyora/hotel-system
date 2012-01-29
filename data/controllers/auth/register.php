<?php
	/*
		UserCake Version: 1.4
		http://usercake.com
		
		Developed by: Adam Davis
	*/
	require_once("/../conf/config.php");
	$request = new HttpRequest(
		$_COOKIE,
		$_FILES,
		$_GET,
		$_POST,
		$_REQUEST,
		$_SESSION,
		$_SERVER
	);
	$dao = new AuthDAO();
	
	//Prevent the user visiting the logged in page if he/she is already logged in
	if($request->user->isUserLoggedIn()) { header("Location: account.php"); die(); }
?>

<?php
	/* 
		Below is a very simple example of how to process a new user.
		 Some simple validation (ideally more is needed).
		
		The first goal is to check for empty / null data, to reduce workload here
		we let the user class perform it's own internal checks, just in case they are missed.
	*/

//Forms posted
if(!empty($_POST))
{
		$errors = array();
		$email = trim($_POST["email"]);
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);
		$confirm_pass = trim($_POST["passwordc"]);
	
		//Perform some validation
		//Feel free to edit / change as required
		
		if(AuthController::minMaxRange(4,25,$username))
		{
			$errors[] = lang("ACCOUNT_USER_CHAR_LIMIT",array(4,25));
		}
		if(AuthController::minMaxRange(2,50,$password) && AuthController::minMaxRange(2,50,$confirm_pass))
		{
			$errors[] = lang("ACCOUNT_PASS_CHAR_LIMIT",array(8,50));
		}
		else if($password != $confirm_pass)
		{
			$errors[] = lang("ACCOUNT_PASS_MISMATCH");
		}
		if(!AuthController::isValidEmail($email))
		{
			$errors[] = lang("ACCOUNT_INVALID_EMAIL");
		}
		//End data validation
		if(count($errors) == 0)
		{
			$_errors = AuthController::createUser($username,$password,$email);
			if ($_errors){
				if(isset($_errors["username_taken"])) $errors[] = lang("ACCOUNT_USERNAME_IN_USE",array($username));
				if(isset($_errors["email_taken"])) 	  $errors[] = lang("ACCOUNT_EMAIL_IN_USE",array($email));		
				if(isset($_errors["mail_failure"])) $errors[] = lang("MAIL_ERROR");
			}
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
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
			
            <h1>Registration</h1>

			<?php
            if(!empty($_POST))
            {
				if(count($errors) > 0)
				{
            ?>
            <div id="errors">
            <?php errorBlock($errors); ?>
            </div>     
            <?php
           		 } else {
          
            	$message = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE1");
        
            	if($emailActivation)
				{
               		 $message = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE2");
				}
        ?> 
        <div id="success">
        
           <p><?php echo $message ?></p>
           
        </div>
        <?php } }?>

            <div id="regbox">
                <form name="newUser" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                
                <p>
                    <label>Username:</label>
                    <input type="text" name="username" />
                </p>
                
                <p>
                    <label>Password:</label>
                    <input type="password" name="password" />
                </p>
                
                <p>
                    <label>Confirm:</label>
                    <input type="password" name="passwordc" />
                </p>
                
                <p>
                    <label>Email:</label>
                    <input type="text" name="email" />
                </p>
                
                <p>
                    <label>&nbsp;</label>
                    <input type="submit" value="Register"/>
                </p>
                
                </form>
            </div>

			<div class="clear"></div>
	 	</div>
	</div>
</div>
</body>
</html>


