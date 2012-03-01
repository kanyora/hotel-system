<?php
	$client_list = new Route("$BASE_URL/admin/clients/");
	$client_list->setMapClass("Client")->setMapMethod("view_list");
	$router->addRoute( "client-list", $client_list );
	
	$client_view = new Route("$BASE_URL/admin/clients/:id/");
	$client_view->setMapClass("Client")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("client-view",$client_view);
	
	$client_add = new Route("$BASE_URL/admin/clients/add/");
	$client_add->setMapClass("Client")->setMapMethod("add");
	$router->addRoute("client-add",$client_add);
	
	$client_edit = new Route("$BASE_URL/admin/clients/edit/:id/");
	$client_edit->setMapClass("Client")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("client-edit",$client_edit);
	
	$client_delete = new Route("$BASE_URL/admin/clients/delete/:id/");
	$client_delete->setMapClass("Client")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("client-delete",$client_delete);
	
	$client_auth_register = new Route("$BASE_URL/admin/clients/:action/");
	$client_auth_register->setMapClass("Auth")->setMapMethod("client_actions")
						  ->addDynamicElement( ":action", '^\w+$' );
	$router->addRoute( "client-register", $client_auth_register );
?>