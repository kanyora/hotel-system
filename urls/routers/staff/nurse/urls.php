<?php
	$nurses_orders = new Route("$BASE_URL/staff/nurses/:nurse_id/orders/");
	$nurses_orders->setMapClass("Nurse")->setMapMethod("nurse_orders")
				  ->addDynamicElement(":nurse_id", '^\d+$');
	$router->addRoute( "nurses-order-list", $nurses_orders );
	
	$nurse_order_list = new Route("$BASE_URL/staff/nurses/my/orders/");
	$nurse_order_list->setMapClass("Nurse")->setMapMethod("nurse_orders");
	$router->addRoute( "nurses-order-list", $nurse_order_list );
	
	$nurse_order = new Route("$BASE_URL/staff/nurses/order/new/");
	$nurse_order->setMapClass("Nurse")->setMapMethod("orders_new");
	$router->addRoute( "nurse-new-order", $nurse_order );
	
	$nurse_view_order = new Route("$BASE_URL/staff/nurses/order/view/:id/");
	$nurse_view_order->setMapClass("Nurse")->setMapMethod("orders_view")
					 ->addDynamicElement(":id", '^\d+$');
	$router->addRoute( "nurse-view-order", $nurse_view_order );
	
	$nurse_edit_order = new Route("$BASE_URL/staff/nurses/order/edit/:id/");
	$nurse_edit_order->setMapClass("Nurse")->setMapMethod("orders_edit")
					 ->addDynamicElement(":id", '^\d+$');
	$router->addRoute( "nurse-edit-order", $nurse_edit_order );
	
	$nurse_delete_order = new Route("$BASE_URL/staff/nurses/order/delete/:id/");
	$nurse_delete_order->setMapClass("Nurse")->setMapMethod("orders_delete")
					   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute( "nurse-delete-order", $nurse_delete_order );

	/*-----------------------ADMIN-CRUD-------------------------*/

	$nurse_list = new Route("$BASE_URL/admin/staff/nurses/");
	$nurse_list->setMapClass("Nurse")->setMapMethod("view_list");
	$router->addRoute( "nurse-list", $nurse_list );
	
	$nurse_view = new Route("$BASE_URL/admin/staff/nurses/:id/");
	$nurse_view->setMapClass("Nurse")->setMapMethod("view")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("nurse-view",$nurse_view);
	
	$nurse_add = new Route("$BASE_URL/admin/staff/nurses/add/");
	$nurse_add->setMapClass("Nurse")->setMapMethod("add");
	$router->addRoute("nurse-add",$nurse_add);
	
	$nurse_edit = new Route("$BASE_URL/admin/staff/nurses/edit/:id/");
	$nurse_edit->setMapClass("Nurse")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("nurse-edit",$nurse_edit);
	
	$nurse_delete = new Route("$BASE_URL/admin/staff/nurses/delete/:id/");
	$nurse_delete->setMapClass("Nurse")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("nurse-delete",$nurse_delete);
	
?>