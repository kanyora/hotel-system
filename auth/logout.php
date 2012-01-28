<?php
	/*
		UserCake Version: 1.4
		http://usercake.com
		
		Developed by: Adam Davis
	*/
	include("/../conf/config.php");
	
	$dao = new AuthDAO();
	//Log the user out
	if($dao->isUserLoggedIn()) {
		$dao->userLogOut();
	}

	if(!empty($websiteUrl)) 
	{
		$add_http = "";
		
		if(strpos($websiteUrl,"http://") === false)
		{
			$add_http = "http://";
		}
	
		header("Location: ".$add_http.$websiteUrl);
		die();
	}
	else
	{
		header("Location: index.php");
		die();
	}	
?>
