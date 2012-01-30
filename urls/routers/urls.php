<?php
	require_once('auth/urls.php');
	require_once('patient/urls.php');
	require_once('product/urls.php');
	require_once('staff/urls.php');
	require_once('ward/urls.php');
	require_once('prescription/urls.php');
	
	//setup the default url
	$default_route = new Route('/Pharmacy/');
	$default_route->setMapClass('Default')->setMapMethod('index');
	$router->addRoute( 'default', $default_route );
?>