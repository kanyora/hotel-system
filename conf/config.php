<?php
	/*
		UserCake Version: 1.4
		http://usercake.com
		Developed by: Adam Davis
	*/
	
	//Call up all the helper and settings scripts
	require_once("settings.php");
	require_once("/../http/class.request.php");
	require_once("/../util/funcs.general.php");
	require_once("/../lang/en.php");
	
	//Call all the libraries required
	require_once('/../lib/redbean_orm/rb.php');
	require_once('/../lib/php_router/php-router.php');
	require_once('/../lib/smarty_templates/Smarty.class.php');
	
	//Setup all the Daos
	require_once("/../data/daos/AuthDao.php");
	
	//Setup all the Models
	require_once("/../data/models/auth/User.php");
	require_once("/../data/models/auth/Group.php");
	
	//Start Getting smarty up!!!
	$smarty = new Smarty;
			
	//$smarty->force_compile = true;
	$smarty->debugging = true;
	$smarty->caching = false;
	$smarty->cache_lifetime = 120;
	
	//Setup the Router[ish] instances
	$router = new Router;
	//Get an instance of Dispatcher
	$dispatcher = new Dispatcher;
	$dispatcher->setSuffix('Controller');
	$dispatcher->setClassPath('data/controllers/');

	//Set up The Root URLS file
	require_once("/../urls/routers/urls.php");
	
	//start session
	session_start();
	
	//Set up Redbean Properly
	//using settings from settings.php
	R::setup("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pass);
?>