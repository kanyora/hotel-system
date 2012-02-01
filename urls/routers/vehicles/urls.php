<?php
	$vehicle_list = new Route("$BASE_URL/vehicles/");
	$vehicle_list->setMapClass("Vehicle")->setMapMethod("view_list");
	$router->addRoute( "vehicle-list", $vehicle_list );
	
	$vehicle_view = new Route("$BASE_URL/vehicles/:id/");
	$vehicle_view->setMapClass("Vehicle")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("vehicle-view",$vehicle_view);
	
	$vehicle_add = new Route("$BASE_URL/vehicles/add/");
	$vehicle_add->setMapClass("Vehicle")->setMapMethod("add");
	$router->addRoute("vehicle-add",$vehicle_add);
	
	$vehicle_edit = new Route("$BASE_URL/vehicles/edit/:id/");
	$vehicle_edit->setMapClass("Vehicle")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("vehicle-edit",$vehicle_edit);
	
	$vehicle_delete = new Route("$BASE_URL/vehicles/delete/:id/");
	$vehicle_delete->setMapClass("Vehicle")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("vehicle-delete",$vehicle_delete);
?>