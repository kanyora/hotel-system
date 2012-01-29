<?php
	$auth_index = new Route('/KRA/auth/');
	$auth_index->setMapClass('Auth')->setMapMethod('index');
	$router->addRoute( 'auth-index', $auth_index );
	
	$auth_login = new Route('/KRA/auth/login/');
	$auth_login->setMapClass('Auth')->setMapMethod('login');
	$router->addRoute( 'auth-login', $auth_login );
	
	$auth_logout = new Route('/KRA/auth/logout/');
	$auth_logout->setMapClass('Auth')->setMapMethod('logout');
	$router->addRoute( 'auth-logout', $auth_logout );
	
	$auth_forgot_password = new Route('/KRA/auth/forgot-password/');
	$auth_forgot_password->setMapClass('Auth')->setMapMethod('forgot_password');
	$router->addRoute( 'auth-forgot-password', $auth_forgot_password );
	
	$change_password = new Route('/KRA/auth/change-password/');
	$change_password->setMapClass('Auth')->setMapMethod('change_password');
	$router->addRoute( 'auth-change-password', $change_password );
	
	$auth_register = new Route('/KRA/auth/register/');
	$auth_register->setMapClass('Auth')->setMapMethod('register');
	$router->addRoute( 'auth-register', $auth_register );
	
	$auth_activate_account = new Route('/KRA/auth/activate-account/');
	$auth_activate_account->setMapClass('Auth')->setMapMethod('activate_account');
	$router->addRoute( 'auth-activate-account', $auth_activate_account );
	
	$auth_resend_activation = new Route('/KRA/auth/resend-activation/');
	$auth_resend_activation->setMapClass('Auth')->setMapMethod('resend_activation');
	$router->addRoute( 'auth-resend-activation', $auth_resend_activation );
	
	$auth_update_email_address = new Route('/KRA/auth/update-email-address/');
	$auth_update_email_address->setMapClass('Auth')->setMapMethod('update_email_address');
	$router->addRoute( 'auth-update-email-address', $auth_update_email_address );

	$auth_account = new Route('/KRA/auth/account/');
	$auth_account->setMapClass('Auth')->setMapMethod('account');
	$router->addRoute( 'auth-account', $auth_account );
?>