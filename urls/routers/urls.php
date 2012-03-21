<?php
	require_once("auth/urls.php");
	require_once("dish/urls.php");
	require_once("clients/urls.php");
	require_once("categories/urls.php");
	require_once("orders/urls.php");
	require_once("search_urls.php");
	
	//setup the default url
	$default_route = new Route("$BASE_URL/");
	$default_route->setMapClass("Default")->setMapMethod("index");
	$router->addRoute( "default", $default_route );
	
	$user_dashboard = new Route("$BASE_URL/menu/");
	$user_dashboard->setMapClass("Default")->setMapMethod("menu");
	$router->addRoute( "user-dashboard", $user_dashboard );
	
	$user_dashboard = new Route("$BASE_URL/services/");
	$user_dashboard->setMapClass("Default")->setMapMethod("service");
	$router->addRoute( "service", $user_dashboard );
	
	$user_dashboard = new Route("$BASE_URL/contact-us/");
	$user_dashboard->setMapClass("Default")->setMapMethod("contact");
	$router->addRoute( "contact", $user_dashboard );
	
	$admin_dashboard = new Route("$BASE_URL/admin/");
	$admin_dashboard->setMapClass("Default")->setMapMethod("admin_dashboard");
	$router->addRoute( "admin-dashboard", $admin_dashboard );
?>
