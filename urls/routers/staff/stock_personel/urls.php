<?php
	$stock_personel_list = new Route("$BASE_URL/admin/staff/stock-personel/");
	$stock_personel_list->setMapClass("StockPersonel")->setMapMethod("view_list");
	$router->addRoute( "stock-personel-list", $stock_personel_list );
	
	$stock_personel_view = new Route("$BASE_URL/admin/staff/stock-personel/:id/");
	$stock_personel_view->setMapClass("StockPersonel")->setMapMethod("view")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("stock-personel-view",$stock_personel_view);
	
	$stock_personel_add = new Route("$BASE_URL/admin/staff/stock-personel/add/");
	$stock_personel_add->setMapClass("StockPersonel")->setMapMethod("add");
	$router->addRoute("stock-personel-add",$stock_personel_add);
	
	$stock_personel_edit = new Route("$BASE_URL/admin/staff/stock-personel/edit/:id/");
	$stock_personel_edit->setMapClass("StockPersonel")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("stock-personel-edit",$stock_personel_edit);
	
	$stock_personel_delete = new Route("$BASE_URL/admin/staff/stock-personel/delete/:id/");
	$stock_personel_delete->setMapClass("StockPersonel")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("stock-personel-delete",$stock_personel_delete);
	
?>