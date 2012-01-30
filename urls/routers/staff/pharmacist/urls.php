<?php
	$pharmacist_index = new Route('/Pharmacy/staff/pharmacists/');
	$pharmacist_index->setMapClass('Pharmacist')->setMapMethod('index');
	$router->addRoute( 'pharmacist-index', $pharmacist_index );
	
	$pharmacist_list = new Route('/Pharmacy/staff/pharmacists/list/');
	$pharmacist_list->setMapClass('Pharmacist')->setMapMethod('view_list');
	$router->addRoute( 'pharmacist-list', $pharmacist_list );
	
	$pharmacist_view = new Route('/Pharmacy/staff/pharmacists/:id/');
	$pharmacist_view->setMapClass('Pharmacist')->setMapMethod('view')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('pharmacist-view',$pharmacist_view);
	
	$pharmacist_add = new Route('/Pharmacy/staff/pharmacists/add/');
	$pharmacist_add->setMapClass('Pharmacist')->setMapMethod('add');
	$router->addRoute('pharmacist-add',$pharmacist_add);
	
	$pharmacist_edit = new Route('/Pharmacy/staff/pharmacists/edit/:id/');
	$pharmacist_edit->setMapClass('Pharmacist')->setMapMethod('edit')
				   ->addDynamicElement( ':id', '^\d{5}$' );
	$router->addRoute('pharmacist-edit',$pharmacist_edit);
	
	$pharmacist_delete = new Route('/Pharmacy/staff/pharmacists/delete/:id/');
	$pharmacist_delete->setMapClass('Pharmacist')->setMapMethod('delete')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('pharmacist-delete',$pharmacist_delete);
	
?>