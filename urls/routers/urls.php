<?php
	require_once("auth/urls.php");
	require_once("vehicles/urls.php");
	require_once("applications/urls.php");
	
	//setup the default url
	$default_route = new Route("$BASE_URL/");
	$default_route->setMapClass("Default")->setMapMethod("index");
	$router->addRoute( "default", $default_route );
?>