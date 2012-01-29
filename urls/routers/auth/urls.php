<?php
	$auth_route = new Route('/KRA/auth/');
	$auth_route->setMapClass('Auth')->setMapMethod('index');
	$router->addRoute( 'auth', $auth_route );
?>