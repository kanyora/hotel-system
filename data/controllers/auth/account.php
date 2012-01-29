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
	//Prevent the user visiting the logged in page if he/she is not logged in
	if(!$request->user->isUserLoggedIn()) { header("Location: login.php"); die(); }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome <?php echo $request->user->display_username; ?></title>
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
        	<h1>Your Account</h1>
        
        	<p>Welcome to your account page <strong><?php echo $request->user->display_username; ?></strong></p>

            <p>I am a <strong>
            <?php 
            	$group = $dao->group($request->user); 
            	if(isset($group->Name)){
            		echo $group->Name;
				} 
			?></strong></p>
          
            
            <p>You joined on <?php echo date("l \\t\h\e jS Y",$request->user->signupTimeStamp()); ?> </p>
  		</div>
  
	</div>
</div>
</body>
</html>

