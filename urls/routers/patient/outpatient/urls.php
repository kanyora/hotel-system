<?php
	$outpatient_index = new Route('/Pharmacy/patients/outpatients/');
	$outpatient_index->setMapClass('Outpatient')->setMapMethod('index');
	$router->addRoute( 'outpatient-index', $outpatient_index );
	
	$outpatient_list = new Route('/Pharmacy/patients/outpatients/list/');
	$outpatient_list->setMapClass('Outpatient')->setMapMethod('view_list');
	$router->addRoute( 'outpatient-list', $outpatient_list );
	
	$outpatient_view = new Route('/Pharmacy/patients/outpatients/:id/');
	$outpatient_view->setMapClass('Outpatient')->setMapMethod('view')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('outpatient-add',$outpatient_view);
	
	$outpatient_add = new Route('/Pharmacy/patients/outpatients/add/');
	$outpatient_add->setMapClass('Outpatient')->setMapMethod('add');
	$router->addRoute('outpatient-add',$outpatient_add);
	
	$outpatient_edit = new Route('/Pharmacy/patients/outpatients/edit/:id/');
	$outpatient_edit->setMapClass('Outpatient')->setMapMethod('edit')
				   ->addDynamicElement( ':id', '^\d{5}$' );
	$router->addRoute('outpatient-add',$outpatient_edit);
	
	$outpatient_delete = new Route('/Pharmacy/patients/outpatients/delete/:id/');
	$outpatient_delete->setMapClass('Outpatient')->setMapMethod('delete')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('outpatient-add',$outpatient_delete);
	
?>