<?php
	$doctor_list = new Route("$BASE_URL/staff/doctors/");
	$doctor_list->setMapClass("Doctor")->setMapMethod("view_list");
	$router->addRoute( "doctor-list", $doctor_list );
	
	$doctor_view = new Route("$BASE_URL/staff/doctors/:id/");
	$doctor_view->setMapClass("Doctor")->setMapMethod("view")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("doctor-view",$doctor_view);
	
	$doctor_add = new Route("$BASE_URL/staff/doctors/add/");
	$doctor_add->setMapClass("Doctor")->setMapMethod("add");
	$router->addRoute("doctor-add",$doctor_add);
	
	$doctor_edit = new Route("$BASE_URL/staff/doctors/edit/:id/");
	$doctor_edit->setMapClass("Doctor")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("doctor-edit",$doctor_edit);
	
	$doctor_delete = new Route("$BASE_URL/staff/doctors/delete/:id/");
	$doctor_delete->setMapClass("Doctor")->setMapMethod("delete")
				   ->addDynamicElement(":id", "^\d{5}$");
	$router->addRoute("doctor-delete",$doctor_delete);
?>