<?php
	require_once('auth/urls.php');
	
	//setup the default url
	$default_route = new Route('/Pharmacy/');
	$default_route->setMapClass('Default')->setMapMethod('index');
	$router->addRoute( 'default', $default_route );
?>