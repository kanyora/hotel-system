<?php
	$doctor_index = new Route('/Pharmacy/staff/doctors/');
	$doctor_index->setMapClass('Doctor')->setMapMethod('index');
	$router->addRoute( 'doctor-index', $doctor_index );

	$doctor_list = new Route('/Pharmacy/staff/doctors/list/');
	$doctor_list->setMapClass('Doctor')->setMapMethod('view_list');
	$router->addRoute( 'doctor-list', $doctor_list );
	
	$doctor_view = new Route('/Pharmacy/staff/doctors/:id/');
	$doctor_view->setMapClass('Doctor')->setMapMethod('view')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('doctor-view',$doctor_view);
	
	$doctor_add = new Route('/Pharmacy/staff/doctors/add/');
	$doctor_add->setMapClass('Doctor')->setMapMethod('add');
	$router->addRoute('doctor-add',$doctor_add);
	
	$doctor_edit = new Route('/Pharmacy/staff/doctors/edit/:id/');
	$doctor_edit->setMapClass('Doctor')->setMapMethod('edit')
				   ->addDynamicElement( ':id', '^\d{5}$' );
	$router->addRoute('doctor-edit',$doctor_edit);
	
	$doctor_delete = new Route('/Pharmacy/staff/doctors/delete/:id/');
	$doctor_delete->setMapClass('Doctor')->setMapMethod('delete')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('doctor-delete',$doctor_delete);
?>