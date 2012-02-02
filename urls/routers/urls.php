<?php
	require_once("auth/urls.php");
	require_once("vehicles/urls.php");
	require_once("suppliers/urls.php");
	require_once("services/urls.php");
	require_once("service_parts/urls.php");
	require_once("service_requests/urls.php");
	
	//setup the default url
	$default_route = new Route("$BASE_URL/");
	$default_route->setMapClass("Default")->setMapMethod("index");
	$router->addRoute( "default", $default_route );
?>