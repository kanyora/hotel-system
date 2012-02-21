<?php
	$notification_list = new Route("$BASE_URL/notifications/");
	$notification_list->setMapClass("Notification")->setMapMethod("view_list");
	$router->addRoute( "notification-list", $notification_list );
	
	$notification_view = new Route("$BASE_URL/notifications/:id/");
	$notification_view->setMapClass("Notification")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("notification-view",$notification_view);
?>