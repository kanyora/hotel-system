<?php
	class ServicePartController{
		/*-----------------------------ADMIN CRUD-------------------------*/
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				$new_service_part = R::graph($request->POST['service_part']);
				$_id = R::store($new_service_part);
				if ($_id){
					redirectToPage('service-part-list');
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('service_part/add.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$service_part = R::load("servicepart", $id);
				if (!$service_part->id){
					PageError::show('404',NULL,'Service Part not found!', "Service Part with Id: $id not found!");
				}
				$smarty->assign("service_part", $service_part);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('service_part/detailview.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$service_part = R::load("servicepart", $id);
			if (!$service_part->id){
				PageError::show('404',NULL,'Service Part not found!', "Service Part with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				$edited_service_part = R::graph($request->POST['service_part']);
				$edited_service_part->id = $id;
				
				$_id = R::store($edited_service_part);
				if ($_id){
					redirectToPage('service-part-list');
				}
			}else if ($request->method == "GET"){
				$smarty->assign("service_part", $service_part);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('service_part/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$service_parts = R::find("servicepart");
				$smarty->assign("service_parts", $service_parts);	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('service_part/list.tpl');
		}
		
		public function delete($args){	
			$request = $args["request"];
			userIsAdmin($request->user);
			
			global $smarty;
			
			if ($request->method == "POST"){
				$id = $args[":id"];
				$service_part = R::load("servicepart", $id);
				
				if (!$service_part->id){
					PageError::show('404',NULL,'Service Part not found!', "Service Part with Id: $id not found!");
				}
				
				$service_part->is_active = false;
				R::store($service_part);
				redirectToPage('service-part-list');
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('service_part/confirm_delete.tpl');
			}
		}
	}
?>