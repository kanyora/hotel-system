<?php
	$service_list = new Route("$BASE_URL/services/");
	$service_list->setMapClass("Service")->setMapMethod("view_list");
	$router->addRoute("service-list", $service_list);
	
	$service_view = new Route("$BASE_URL/services/:id/");
	$service_view->setMapClass("Service")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("service-view",$service_view);
	
	$service_add = new Route("$BASE_URL/services/add/");
	$service_add->setMapClass("Service")->setMapMethod("add");
	$router->addRoute("service-add",$service_add);
	
	$service_edit = new Route("$BASE_URL/services/edit/:id/");
	$service_edit->setMapClass("Service")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("service-edit",$service_edit);
	
	$service_delete = new Route("$BASE_URL/services/delete/:id/");
	$service_delete->setMapClass("Service")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("service-delete",$service_delete);
?>