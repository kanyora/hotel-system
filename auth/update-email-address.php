<?php
	/*
		UserCake Version: 1.4
		http://usercake.com
		
		Developed by: Adam Davis
	*/
	include("/../conf/config.php");
	
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
	//Prevent the user visiting the logged in page if he/she is not logged in
	if(!$dao->isUserLoggedIn($request->user)) { header("Location: login.php"); die(); }
?>
<?php
	/* 
		Below is a very simple example of how to process a login request.
		Some simple validation (ideally more is needed).
	*/

//Forms posted
if(!empty($_POST))
{
		$errors = array();
		$email = $_POST["email"];

		//Perform some validation
		//Feel free to edit / change as required
		
		if(trim($email) == "")
		{
			$errors[] = AuthController::lang("ACCOUNT_SPECIFY_EMAIL");
		}
		else if(!AuthController::isValidEmail($email))
		{
			$errors[] = AuthController::lang("ACCOUNT_INVALID_EMAIL");
		}
		else if($email == $request->user->Email)
		{
				$errors[] = AuthController::lang("NOTHING_TO_UPDATE");
		}
		else if($dao->emailExists($email))
		{
			$errors[] = AuthController::lang("ACCOUNT_EMAIL_TAKEN");	
		}
		
		//End data validation
		if(count($errors) == 0)
		{
			$dao->updateEmail($request->user, $email);
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Contact Details</title>
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

            <h1>Update your email address</h1>
    
            <?php
                if(!empty($_POST))
                {
                    if(count($errors) > 0)
                    {
                ?>
                <div id="errors">
                <?php AuthController::errorBlock($errors); ?>
                </div>     
                <?php
                     } else { ?> 
            <div id="success">
            
               <p><?php echo AuthController::lang("ACCOUNT_DETAILS_UPDATED"); ?></p>
               
            </div>
            <?php } 
				}
			?>

    
            <div id="regbox">
                <form name="changePass" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            
                <p>
                    <label>Email:</label>
                    <input type="text" name="email" value="<?php echo $request->user->Email; ?>" />
                </p>
        
                <p>
                    <label>&nbsp;</label>
                    <input type="submit" value="Update Email" class="submit" />
                </p>
                
                </form>
            </div>
            <div class="clear"></div>
        </div>
	</div>
</div>
</body>
</html>

