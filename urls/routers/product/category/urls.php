<?php
	$category_index = new Route("$BASE_URL/products/categories/");
	$category_index->setMapClass("ProductCategory")->setMapMethod("index");
	$router->addRoute( "category-index", $category_index );
	
	$category_list = new Route("$BASE_URL/products/categories/list/");
	$category_list->setMapClass("ProductCategory")->setMapMethod("view_list");
	$router->addRoute( "category-list", $category_list );
	
	$category_view = new Route("$BASE_URL/products/categories/:id/");
	$category_view->setMapClass("ProductCategory")->setMapMethod("view")
				   ->addDynamicElement(":id", '^\d{5}$');
	$router->addRoute("category-add",$category_view);
	
	$category_add = new Route("$BASE_URL/products/categories/add/");
	$category_add->setMapClass("ProductCategory")->setMapMethod("add");
	$router->addRoute("category-add",$category_add);
	
	$category_edit = new Route("$BASE_URL/products/categories/edit/:id/");
	$category_edit->setMapClass("ProductCategory")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d{5}$' );
	$router->addRoute("category-add",$category_edit);
	
	$category_delete = new Route("$BASE_URL/products/categories/delete/:id/");
	$category_delete->setMapClass("ProductCategory")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d{5}$');
	$router->addRoute("category-add",$category_delete);
	
?>