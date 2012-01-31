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
	require_once("/../util/PageError.php");
	require_once("/../lang/en.php");
	
	//Call all the libraries required
	require_once('/../lib/redbean_orm/rb.php');
	require_once('/../lib/php_router/php-router.php');
	require_once('/../lib/smarty_templates/Smarty.class.php');
	
	//Setup all the Daos
	require_once("/../data/daos/daos.php");
	
	//Setup all the Models
	require_once("/../data/models/models.php");

	//Setup the Router[ish] instances
	$router = new Router;
	//Get an instance of Dispatcher
	$dispatcher = new Dispatcher;
	$dispatcher->setSuffix('Controller');
	$dispatcher->setClassPath('data/controllers/');
	
	//Set up The Root URLS file
	require_once("/../urls/routers/urls.php");
	
	//Start Getting smarty up!!!
	$smarty = new Smarty;
			
	$smarty->configLoad('conf/smarty.conf');
	$smarty->debugging = $DEBUG;
	$smarty->force_compile = !$DEBUG;
	$smarty->caching = !$DEBUG;
	$smarty->cache_lifetime = 120;
	
	
	//start session
	session_start();
	
	//Set up Redbean Properly
	//using settings from settings.php
	R::setup(
		$DATABASES["default"]["ENGINE"].
		":host=".$DATABASES["default"]["HOST"].
		";dbname=".$DATABASES["default"]["NAME"], 
		$DATABASES["default"]["USER"], 
		$DATABASES["default"]["PASSWORD"]
	);
?>