<?php
	$category_list = new Route("$BASE_URL/categories/");
	$category_list->setMapClass("Category")->setMapMethod("view_list");
	$router->addRoute( "category-list", $category_list );

	$category_view = new Route("$BASE_URL/categories/:id/");
	$category_view->setMapClass("Category")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("category-view",$category_view);

	$category_add = new Route("$BASE_URL/admin/categories/add/");
	$category_add->setMapClass("Category")->setMapMethod("add");
	$router->addRoute("category-add",$category_add);

	$category_edit = new Route("$BASE_URL/admin/categories/:id/edit/");
	$category_edit->setMapClass("Category")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("category-edit",$category_edit);

	$category_delete = new Route("$BASE_URL/admin/categories/:id/delete/");
	$category_delete->setMapClass("Category")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("category-delete",$category_delete);
?>