<?php
	$payment_list = new Route("$BASE_URL/payments/");
	$payment_list->setMapClass("Payment")->setMapMethod("view_list");
	$router->addRoute( "payment-list", $payment_list );

	$payment_view = new Route("$BASE_URL/payments/:id/");
	$payment_view->setMapClass("Payment")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("payment-view",$payment_view);

	$payment_add = new Route("$BASE_URL/payments/add/");
	$payment_add->setMapClass("Payment")->setMapMethod("add");
	$router->addRoute("payment-add",$payment_add);

	$payment_edit = new Route("$BASE_URL/payments/edit/:id/");
	$payment_edit->setMapClass("Payment")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("payment-edit",$payment_edit);

	$payment_delete = new Route("$BASE_URL/payments/cancel/:id/");
	$payment_delete->setMapClass("Payment")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("payment-delete",$payment_delete);
?>