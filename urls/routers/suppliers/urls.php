<?php
	$supplier_list = new Route("$BASE_URL/suppliers/");
	$supplier_list->setMapClass("Supplier")->setMapMethod("view_list");
	$router->addRoute( "supplier-list", $supplier_list );
	
	$supplier_view = new Route("$BASE_URL/suppliers/:id/");
	$supplier_view->setMapClass("Supplier")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("supplier-view",$supplier_view);
	
	$supplier_add = new Route("$BASE_URL/suppliers/add/");
	$supplier_add->setMapClass("Supplier")->setMapMethod("add");
	$router->addRoute("supplier-add",$supplier_add);
	
	$supplier_edit = new Route("$BASE_URL/suppliers/edit/:id/");
	$supplier_edit->setMapClass("Supplier")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("supplier-edit",$supplier_edit);
	
	$supplier_delete = new Route("$BASE_URL/suppliers/delete/:id/");
	$supplier_delete->setMapClass("Supplier")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("supplier-delete",$supplier_delete);
?>