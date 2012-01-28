<?php
	/*
		UserCake Version: 1.4
		http://usercake.com
		Developed by: Adam Davis
	*/
	
	//Call up all the helper and settings scripts
	require_once("settings.php");
	require_once("/../lang/en.php");
	
	//Set up Redbean Properly
	//using settings from settings.php
	R::setup("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pass);

	//Setup all the Controllers
	require_once("/../data/controllers/AuthController.php");
	
	//Setup all the Daos
	require_once("/../data/daos/AuthDao.php");
	
	//start session
	session_start();
	
	//Global User Object Var
	//loggedInUser can be used globally if constructed
	if(isset($_SESSION["authUser"]) && is_object($_SESSION["authUser"]))
	{
		$loggedInUser = $_SESSION["authUser"];
	}
?>