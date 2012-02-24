<?php
	$order_list = new Route("$BASE_URL/orders/");
	$order_list->setMapClass("Order")->setMapMethod("view_list");
	$router->addRoute( "order-list", $order_list );

	$order_list = new Route("$BASE_URL/orders/:status/");
	$order_list->setMapClass("Order")->setMapMethod("view_list")
				 ->addDynamicElement( ":status", '^(undelivered|delivered|new)$' );
	$router->addRoute( "order-status-list", $order_list );
	
	$order_view = new Route("$BASE_URL/orders/:id/");
	$order_view->setMapClass("Order")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("order-view",$order_view);
	
	$order_delete = new Route("$BASE_URL/admin/orders/:id/delete/");
	$order_delete->setMapClass("Order")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("order-delete",$order_delete);
	
	$order_action = new Route("$BASE_URL/admin/orders/:id/:action/");
	$order_action->setMapClass("Order")->setMapMethod("action")
				   ->addDynamicElement( ":id", '^\d+$' )
				   ->addDynamicElement( ":action", '^[-\w]+$' );
	$router->addRoute("order-action",$order_action);
?>