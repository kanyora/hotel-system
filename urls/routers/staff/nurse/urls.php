<?php
	$nurse_list = new Route('/Pharmacy/staff/nurses/');
	$nurse_list->setMapClass('Nurse')->setMapMethod('view_list');
	$router->addRoute( 'nurse-list', $nurse_list );
	
	$nurse_view = new Route('/Pharmacy/staff/nurses/:id/');
	$nurse_view->setMapClass('Nurse')->setMapMethod('view')
				   ->addDynamicElement(':id', '^\d+$');
	$router->addRoute('nurse-view',$nurse_view);
	
	$nurse_add = new Route('/Pharmacy/staff/nurses/add/');
	$nurse_add->setMapClass('Nurse')->setMapMethod('add');
	$router->addRoute('nurse-add',$nurse_add);
	
	$nurse_edit = new Route('/Pharmacy/staff/nurses/edit/:id/');
	$nurse_edit->setMapClass('Nurse')->setMapMethod('edit')
				   ->addDynamicElement( ':id', '^\d+$' );
	$router->addRoute('nurse-edit',$nurse_edit);
	
	$nurse_delete = new Route('/Pharmacy/staff/nurses/delete/:id/');
	$nurse_delete->setMapClass('Nurse')->setMapMethod('delete')
				   ->addDynamicElement(':id', '^\d+$');
	$router->addRoute('nurse-delete',$nurse_delete);
	
?>