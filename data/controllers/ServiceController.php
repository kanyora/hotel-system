<?php
	class ServiceController{
		/*-----------------------------ADMIN CRUD-------------------------*/
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				$new_service = R::graph($request->POST['service']);
				
				$_id = R::store($new_service);
				if ($_id){
					redirectToPage('service-list');
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('service/add.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$service = R::load("service", $id);
				if (!$service->id){
					PageError::show('404',NULL,'Service not found!', "Service with Id: $id not found!");
				}
				$smarty->assign("service", $service);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('service/detailview.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$service = R::load("service", $id);
			if (!$service->id){
				PageError::show('404',NULL,'Service not found!', "Service with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				$edited_service = R::graph($request->POST['service']);
				$edited_service->id = $id;
				
				$_id = R::store($edited_service);
				if ($_id){
					redirectToPage('service-list');
				}
			}else if ($request->method == "GET"){
				$smarty->assign("service", $service);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('service/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$services = R::find("service");
				$smarty->assign("services", $services);	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('service/list.tpl');
		}
		
		public function delete($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			
			global $smarty;
			
			if ($request->method == "POST"){
				$id = $args[":id"];
				$service = R::load("service", $id);
				
				if (!$service->id){
					PageError::show('404',NULL,'Service not found!', "Service with Id: $id not found!");
				}
				
				$service->is_active = false;
				R::store($service);
				redirectToPage('service-list');
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('service/confirm_delete.tpl');
			}
		}
	}
?>