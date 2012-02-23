<?php
	$dish_list = new Route("$BASE_URL/dishes/");
	$dish_list->setMapClass("Dish")->setMapMethod("view_list");
	$router->addRoute( "dish-list", $dish_list );
	
	$dish_view = new Route("$BASE_URL/dishes/:id/");
	$dish_view->setMapClass("Dish")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("dish-view",$dish_view);
	
	$dish_add = new Route("$BASE_URL/admin/dishes/add/");
	$dish_add->setMapClass("Dish")->setMapMethod("add");
	$router->addRoute("dish-add",$dish_add);
	
	$dish_edit = new Route("$BASE_URL/admin/dishes/:id/edit/");
	$dish_edit->setMapClass("Dish")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("dish-edit",$dish_edit);
	
	$dish_delete = new Route("$BASE_URL/admin/dishes/:id/delete/");
	$dish_delete->setMapClass("Dish")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("dish-delete",$dish_delete);
?>