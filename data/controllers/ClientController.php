<?php
	class ClientController{
		/*-----------------------------ADMIN CRUD-------------------------*/
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				$new_client = R::graph($request->POST['client']);
				
				$_id = R::store($new_client);
				if ($_id){
					redirectToPage('client-list');
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('client/add.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$client = R::load("client", $id);
				if (!$client->id){
					PageError::show('404',NULL,'Client not found!', "Client with Id: $id not found!");
				}
				$smarty->assign("client", $client);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('client/detailview.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$client = R::load("client", $id);
			if (!$client->id){
				PageError::show('404',NULL,'Client not found!', "Client with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				$edited_client = R::graph($request->POST['client']);
				$edited_client->id = $id;
				
				$_id = R::store($edited_client);
				if ($_id){
					redirectToPage('client-list');
				}
			}else if ($request->method == "GET"){
				$smarty->assign("client", $client);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('client/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$clients = R::find("client");
				$smarty->assign("clients", $clients);	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('client/list.tpl');
		}
		
		public function delete($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			
			global $smarty;
			
			if ($request->method == "POST"){
				$id = $args[":id"];
				$client = R::load("client", $id);
				
				if (!$client->id){
					PageError::show('404',NULL,'Client not found!', "Client with Id: $id not found!");
				}
				
				$client->is_active = false;
				R::store($client);
				redirectToPage('client-list');
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('client/confirm_delete.tpl');
			}
		}
	}
?>