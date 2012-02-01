<?php
	class VehicleController{
		/*-----------------------------ADMIN CRUD-------------------------*/
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				$new_vehicle = R::graph($request->POST['vehicle']);
				$new_vehicle->date_purchased = date_create_from_format(
					'd/m/Y', $new_vehicle->date_purchased
				);
				
				$_id = R::store($new_vehicle);
				if ($_id){
					redirectToPage('vehicle-list');
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('vehicle/add.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$vehicle = R::load("vehicle", $id);
				if (!$vehicle->id){
					PageError::show('404',NULL,'Vehicle not found!', "Vehicle with Id: $id not found!");
				}
				$smarty->assign("vehicle", $vehicle);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('vehicle/detailview.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$vehicle = R::load("vehicle", $id);
			if (!$vehicle->id){
				PageError::show('404',NULL,'Vehicle not found!', "Vehicle with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				$edited_vehicle = R::graph($request->POST['vehicle']);
				$edited_vehicle->id = $id;
				
				$new_vehicle->date_purchased = date_create_from_format(
					'd/m/Y', $new_vehicle->date_purchased
				);
				
				$_id = R::store($edited_vehicle);
				if ($_id){
					redirectToPage('vehicle-list');
				}
			}else if ($request->method == "GET"){
				$smarty->assign("vehicle", $vehicle);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('vehicle/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$vehicles = R::find("vehicle");
				$smarty->assign("vehicles", $vehicles);	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('vehicle/list.tpl');
		}
		
		public function delete($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			
			global $smarty;
			
			if ($request->method == "POST"){
				$id = $args[":id"];
				$vehicle = R::load("vehicle", $id);
				
				if (!$vehicle->id){
					PageError::show('404',NULL,'Vehicle not found!', "Vehicle with Id: $id not found!");
				}
				
				$vehicle->is_active = false;
				R::store($vehicle);
				redirectToPage('vehicle-list');
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('vehicle/confirm_delete.tpl');
			}
		}
	}
?>