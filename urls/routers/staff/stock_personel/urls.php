<?php
	$stock_personel_index = new Route('/Pharmacy/staff/stock_personel/');
	$stock_personel_index->setMapClass('StockPersonel')->setMapMethod('index');
	$router->addRoute( 'stock_personel-index', $stock_personel_index );
	
	$stock_personel_list = new Route('/Pharmacy/staff/stock_personel/list/');
	$stock_personel_list->setMapClass('StockPersonel')->setMapMethod('view_list');
	$router->addRoute( 'stock_personel-list', $stock_personel_list );
	
	$stock_personel_view = new Route('/Pharmacy/staff/stock_personel/:id/');
	$stock_personel_view->setMapClass('StockPersonel')->setMapMethod('view')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('stock_personel-add',$stock_personel_view);
	
	$stock_personel_add = new Route('/Pharmacy/staff/stock_personel/add/');
	$stock_personel_add->setMapClass('StockPersonel')->setMapMethod('add');
	$router->addRoute('stock_personel-add',$stock_personel_add);
	
	$stock_personel_edit = new Route('/Pharmacy/staff/stock_personel/edit/:id/');
	$stock_personel_edit->setMapClass('StockPersonel')->setMapMethod('edit')
				   ->addDynamicElement( ':id', '^\d{5}$' );
	$router->addRoute('stock_personel-add',$stock_personel_edit);
	
	$stock_personel_delete = new Route('/Pharmacy/staff/stock_personel/delete/:id/');
	$stock_personel_delete->setMapClass('StockPersonel')->setMapMethod('delete')
				   ->addDynamicElement(':id', '^\d{5}$');
	$router->addRoute('stock_personel-add',$stock_personel_delete);
	
?>