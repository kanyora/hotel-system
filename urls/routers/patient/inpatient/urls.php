<?php
	$inpatient_index = new Route('/Pharmacy/patients/inpatients/');
	$inpatient_index->setMapClass('Inpatient')->setMapMethod('index');
	$router->addRoute( 'inpatient-index', $inpatient_index );
	
	$inpatient_list = new Route('/Pharmacy/patients/inpatients/list/');
	$inpatient_list->setMapClass('Inpatient')->setMapMethod('view_list');
	$router->addRoute( 'inpatient-list', $inpatient_list );
	
	$inpatient_view = new Route('/Pharmacy/patients/inpatients/:id/');
	$inpatient_view->setMapClass('Inpatient')->setMapMethod('view')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('inpatient-add',$inpatient_view);
	
	$inpatient_add = new Route('/Pharmacy/patients/inpatients/add/');
	$inpatient_add->setMapClass('Inpatient')->setMapMethod('add');
	$router->addRoute('inpatient-add',$inpatient_add);
	
	$inpatient_edit = new Route('/Pharmacy/patients/inpatients/edit/:id/');
	$inpatient_edit->setMapClass('Inpatient')->setMapMethod('edit')
				   ->addDynamicElement( ':id', '^\d{5}$' );
	$router->addRoute('inpatient-add',$inpatient_edit);
	
	$inpatient_delete = new Route('/Pharmacy/patients/inpatients/delete/:id/');
	$inpatient_delete->setMapClass('Inpatient')->setMapMethod('delete')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('inpatient-add',$inpatient_delete);
	
?>