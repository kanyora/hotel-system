<?php
	$service_part_list = new Route("$BASE_URL/service-parts/");
	$service_part_list->setMapClass("ServicePart")->setMapMethod("view_list");
	$router->addRoute("service-part-list", $service_part_list);
	
	$service_part_view = new Route("$BASE_URL/service-parts/:id/");
	$service_part_view->setMapClass("ServicePart")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("service-part-view",$service_part_view);
	
	$service_part_add = new Route("$BASE_URL/service-parts/add/");
	$service_part_add->setMapClass("ServicePart")->setMapMethod("add");
	$router->addRoute("service-part-add",$service_part_add);
	
	$service_part_edit = new Route("$BASE_URL/service-parts/edit/:id/");
	$service_part_edit->setMapClass("ServicePart")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("service-part-edit",$service_part_edit);
	
	$service_part_delete = new Route("$BASE_URL/service-parts/delete/:id/");
	$service_part_delete->setMapClass("ServicePart")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("service-part-delete",$service_part_delete);
?>