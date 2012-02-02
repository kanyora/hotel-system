<?php
	$service_request_list = new Route("$BASE_URL/service-requests/");
	$service_request_list->setMapClass("ServiceRequest")->setMapMethod("view_list");
	$router->addRoute("service-request-list", $service_request_list);
	
	$service_request_view = new Route("$BASE_URL/service-requests/:id/");
	$service_request_view->setMapClass("ServiceRequest")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("service-request-view",$service_request_view);
	
	$service_request_add = new Route("$BASE_URL/service-requests/add/");
	$service_request_add->setMapClass("ServiceRequest")->setMapMethod("add");
	$router->addRoute("service-request-add",$service_request_add);
	
	$service_request_edit = new Route("$BASE_URL/service-requests/edit/:id/");
	$service_request_edit->setMapClass("ServiceRequest")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("service-request-edit",$service_request_edit);
	
	$service_request_delete = new Route("$BASE_URL/service-requests/delete/:id/");
	$service_request_delete->setMapClass("ServiceRequest")->setMapMethod("delete")
				   			->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("service-request-delete",$service_request_delete);
	
	//---------------------------------VEHICLE BASED------------------------------------

	$vehicle_service_request_list = new Route("$BASE_URL/vehicles/:vehicle_id/service-requests/");
	$vehicle_service_request_list->setMapClass("ServiceRequest")->setMapMethod("view_list")
						 ->addDynamicElement( ":vehicle_id", '^\d+$' );
	$router->addRoute("vehicle-service-request-list", $vehicle_service_request_list);
	
	$vehicle_service_request_view = new Route("$BASE_URL/vehicles/:vehicle_id/service-requests/:id/");
	$vehicle_service_request_view->setMapClass("ServiceRequest")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' )
				   ->addDynamicElement( ":vehicle_id", '^\d+$' );
	$router->addRoute("vehicle-service-request-view",$vehicle_service_request_view);
	
	$vehicle_service_request_add = new Route("$BASE_URL/vehicles/:vehicle_id/service-requests/add/");
	$vehicle_service_request_add->setMapClass("ServiceRequest")->setMapMethod("add")
						->addDynamicElement( ":vehicle_id", '^\d+$' );
	$router->addRoute("vehicle-service-request-add",$vehicle_service_request_add);
	
	$vehicle_service_request_edit = new Route("$BASE_URL/vehicles/:vehicle_id/service-requests/edit/:id/");
	$vehicle_service_request_edit->setMapClass("ServiceRequest")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' )
				   ->addDynamicElement( ":vehicle_id", '^\d+$' );
	$router->addRoute("vehicle-service-request-edit",$vehicle_service_request_edit);
