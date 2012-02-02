<?php
	class ServiceRequestController{
		/*-----------------------------ADMIN CRUD-------------------------*/
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if (isset($args[":vehicle_id"])){
				$vehicle_id = $args[":vehicle_id"];
				$vehicle = R::load("vehicle", $vehicle_id);
				if (!$vehicle->id){
					PageError::show('404',NULL,'Vehicle not found!', "Vehicle with Id: $vehicle_id not found!");
				}
				$smarty->assign("vehicle", $vehicle);
			}
			
			if ($request->method == "POST"){
				$new_service_request = R::graph($request->POST['service_request']);
				$new_service_request->service = R::load('service', $new_service_request->service); 
				$new_service_request->servicepart = R::load('servicepart', $new_service_request->servicepart);
				
				if (isset($vehicle)){
					$new_service_request->vehicle = $vehicle;
				}
				
				$_id = R::store($new_service_request);
				if ($_id){
					redirectToPage('vehicle-service-request-list', array(':vehicle_id' => $vehicle->id));
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->assign("services", R::find('service'));
			$smarty->assign("service_parts", R::find('servicepart'));
			$smarty->display('service_request/add.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$service_request = R::load("serviceRequest", $id);
				if (!$service_request->id){
					PageError::show('404',NULL,'ServiceRequest not found!', "ServiceRequest with Id: $id not found!");
				}
				$smarty->assign("service_request", $service_request);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('service_request/detailview.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			if (isset($args[":vehicle_id"])){
				$vehicle_id = $args[":vehicle_id"];
				$vehicle = R::load("vehicle", $vehicle_id);
				if (!$vehicle->id){
					PageError::show('404',NULL,'Vehicle not found!', "Vehicle with Id: $vehicle_id not found!");
				}
				$smarty->assign("vehicle", $vehicle);
			}
			
			$id = $args[":id"];
			$service_request = R::load("serviceRequest", $id);
			if (!$service_request->id){
				PageError::show('404',NULL,'ServiceRequest not found!', "ServiceRequest with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				$edited_service_request = R::graph($request->POST['service_request']);
				$edited_service_request->id = $id;
				
				if (isset($vehicle)){
					$edited_service_request->vehicle = $vehicle;
				} 
				
				$service = R::load('service', $edited_service_request->service);
				if ($service->id){
					$edited_service_request->service = $service;
				} 
				
				$servicepart = R::load('servicepart', $edited_service_request->servicepart);
				if($servicepart->id){
					$edited_service_request->servicepart = $servicepart;
				}
				
				$_id = R::store($edited_service_request);
				if ($_id){
					redirectToPage('vehicle-service-request-list', array(':vehicle_id' => $vehicle->id));
				}
			}else if ($request->method == "GET"){
				$smarty->assign("service_request", $service_request);
			}
			
			$smarty->assign("request", $request);
			$smarty->assign("services", R::find('service'));
			$smarty->assign("service_parts", R::find('servicepart'));
			$smarty->display('service_request/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				if (isset($args[":vehicle_id"])){
					$vehicle_id = $args[":vehicle_id"];
					$vehicle = R::load("vehicle", $vehicle_id);
					if (!$vehicle->id){
						PageError::show('404',NULL,'Vehicle not found!', "Vehicle with Id: $vehicle_id not found!");
					}
					$service_requests = $vehicle->ownServiceRequest;
					$smarty->assign("vehicle", $vehicle);
				}else{
					$service_requests = R::find("serviceRequest");
				}
				$smarty->assign("service_requests", $service_requests);	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('service_request/list.tpl');
		}
		
		public function delete($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			
			global $smarty;
			
			if ($request->method == "POST"){
				$vehicle_id = $args[":vehicle_id"];
				$vehicle = R::load("vehicle", $vehicle_id);
				if (!$vehicle->id){
					PageError::show('404',NULL,'Vehicle not found!', "Vehicle with Id: $vehicle_id not found!");
				}
				
				$id = $args[":id"];
				$service_request = R::load("serviceRequest", $id);
				
				if (!$service_request->id){
					PageError::show('404',NULL,'Service Request not found!', "Service Request with Id: $id not found!");
				}
				
				$service_request->is_active = false;
				R::store($service_request);
				redirectToPage('vehicle-service-request-list', array(':vehicle_id' => $vehicle->id));
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('service_request/confirm_delete.tpl');
			}
		}
	}
?>