<?php
	$nurse_index = new Route('/Pharmacy/staff/nurse/');
	$nurse_index->setMapClass('Nurse')->setMapMethod('index');
	$router->addRoute( 'nurse-index', $nurse_index );
	
	$nurse_list = new Route('/Pharmacy/staff/nurse/list/');
	$nurse_list->setMapClass('Nurse')->setMapMethod('view_list');
	$router->addRoute( 'nurse-list', $nurse_list );
	
	$nurse_view = new Route('/Pharmacy/staff/nurse/:id/');
	$nurse_view->setMapClass('Nurse')->setMapMethod('view')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('nurse-view',$nurse_view);
	
	$nurse_add = new Route('/Pharmacy/staff/nurse/add/');
	$nurse_add->setMapClass('Nurse')->setMapMethod('add');
	$router->addRoute('nurse-add',$nurse_add);
	
	$nurse_edit = new Route('/Pharmacy/staff/nurse/edit/:id/');
	$nurse_edit->setMapClass('Nurse')->setMapMethod('edit')
				   ->addDynamicElement( ':id', '^\d{5}$' );
	$router->addRoute('nurse-edit',$nurse_edit);
	
	$nurse_delete = new Route('/Pharmacy/staff/nurse/delete/:id/');
	$nurse_delete->setMapClass('Nurse')->setMapMethod('delete')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('nurse-delete',$nurse_delete);
	
?>