<?php
	/*
		UserCake Version: 1.4
		http://usercake.com
		
		Developed by: Adam Davis
	*/

	if(is_dir("install/"))
	{
		header("Location: install/");
		die();
	}
	
	require_once("settings.php");
	
	require_once("/../lang/en.php");
	
	require_once("/../data/controllers/AuthController.php");
	require_once("/../data/daos/AuthDao.php");

	session_start();
	
	//Global User Object Var
	//loggedInUser can be used globally if constructed
	if(isset($_SESSION["authUser"]) && is_object($_SESSION["authUser"]))
	{
		$loggedInUser = $_SESSION["authUser"];
	}
?>