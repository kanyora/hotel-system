<?php
	$order_list = new Route("$BASE_URL/orders/");
	$order_list->setMapClass("Order")->setMapMethod("view_list");
	$router->addRoute("order-list", $order_list);
	
	$order_cart_alter = new Route("$BASE_URL/orders/dish/:id/:alter/");
	$order_cart_alter->setMapClass("Order")->setMapMethod("cart_alter")
					 ->addDynamicElement(":alter", '^(add|remove)$')
					 ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("order-cart-alter;", $order_cart_alter);
	
	$order_cart = new Route("$BASE_URL/orders/cart/");
	$order_cart->setMapClass("Order")->setMapMethod("cart");
	$router->addRoute("order-cart", $order_cart);
	
	$order_submit = new Route("$BASE_URL/orders/submit/");
	$order_submit->setMapClass("Order")->setMapMethod("submit");
	$router->addRoute("order-submit", $order_submit );
	
	$order_check_out = new Route("$BASE_URL/orders/check-out/");
	$order_check_out->setMapClass("Order")->setMapMethod("checkout");
	$router->addRoute("order-check-out", $order_check_out );
	
	$order_reference = new Route("$BASE_URL/orders/respond/:order_reference/");
	$order_reference->setMapClass("Order")->setMapMethod("respond")
				 	->addDynamicElement(":order_reference", '^\d+$');
	$router->addRoute("order-reference", $order_reference);
	
	$order_confirm = new Route("$BASE_URL/orders/respond/:order_reference/:confirm");
	$order_confirm->setMapClass("Order")->setMapMethod("confirm")
				 ->addDynamicElement(":order_reference", '^\d+$')
				 ->addDynamicElement(":confirm", '^\d+$');
	$router->addRoute("order-confirm", $order_confirm);

	$order_list = new Route("$BASE_URL/orders/:status/");
	$order_list->setMapClass("Order")->setMapMethod("view_list")
				 ->addDynamicElement(":status", '^(undelivered|delivered|new)$' );
	$router->addRoute("order-status-list", $order_list);
	
	$order_view = new Route("$BASE_URL/orders/:id/");
	$order_view->setMapClass("Order")->setMapMethod("view")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("order-view",$order_view);
	
	$order_delete = new Route("$BASE_URL/admin/orders/:id/delete/");
	$order_delete->setMapClass("Order")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("order-delete",$order_delete);
	
	$order_action = new Route("$BASE_URL/admin/orders/:id/:action/");
	$order_action->setMapClass("Order")->setMapMethod("action")
				   ->addDynamicElement(":id", '^\d+$' )
				   ->addDynamicElement(":action", '^[-\w]+$' );
	$router->addRoute("order-action",$order_action);
?>