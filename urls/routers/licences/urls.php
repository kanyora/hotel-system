<?php
	$licence_list = new Route("$BASE_URL/licences/");
	$licence_list->setMapClass("Licence")->setMapMethod("view_list");
	$router->addRoute( "licence-list", $licence_list );
	
	$licence_apply = new Route("$BASE_URL/licences/apply/");
	$licence_apply->setMapClass("Licence")->setMapMethod("apply");
	$router->addRoute("licence-apply",$licence_apply);
	
	$licence_view = new Route("$BASE_URL/licences/:id/");
	$licence_view->setMapClass("Licence")->setMapMethod("view")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("licence-view",$licence_view);
	
	$licence_action = new Route("$BASE_URL/licences/:id/:action/");
	$licence_action->setMapClass("Licence")->setMapMethod("action")
				   ->addDynamicElement( ":id", '^\d+$' )
				   ->addDynamicElement( ":action", '^[-\w]+$' );
	$router->addRoute("licence-action",$licence_action);
		
	$licence_edit = new Route("$BASE_URL/licences/edit/:id/");
	$licence_edit->setMapClass("Licence")->setMapMethod("edit")
				   ->addDynamicElement( ":id", '^\d+$' );
	$router->addRoute("licence-edit",$licence_edit);
	
	$licence_delete = new Route("$BASE_URL/licences/delete/:id/");
	$licence_delete->setMapClass("Licence")->setMapMethod("delete")
				   ->addDynamicElement(":id", '^\d+$');
	$router->addRoute("licence-delete",$licence_delete);
?>