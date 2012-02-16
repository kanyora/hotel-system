<?php
	class LicenceController{
		/*-----------------------------ADMIN CRUD-------------------------*/
		public function apply($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				$new_licence = R::graph($request->POST['licence']);
				if (R::store($new_licence)){
					$request->user->ownLicence[] = $new_licence;
					R::store($request->user);
					redirectToPage('licence-list');
				}
			}
			
			$smarty->assign("titles", array(
				'' => 'Title:',
				'Mr' => 'Mr',
				'Mrs' => 'Mrs',
				'Miss' => 'Miss',
				'Doctor' => 'Doctor',
				'Professor' => 'Professor',
			));
			$smarty->assign("request", $request);
			$smarty->display('licence/add.tpl');
		}
		
		public function action($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if (isset($args[":id"])){
				$id = $args[":id"];
				$licence = R::load("licence", $id);
				if (!$licence->id){
					PageError::show('404',NULL,'Licence not found!', "Licence with Id: $id not found!");
					die();
				}
			}
			
			if (isset($args[":action"])){
				$action = $args[":action"];
				if (in_array($action, array('approve', 'reject', 'deactivate', 'cancelled', 'renew'))){
					if ($request->method == "POST"){
						if ($action == "deactivate"){
							$licence->is_active = false;
						}else if ($action == 'activate'){
							$licence->is_active = true;
						}else if ($action == 'reject'){
							$licence->status = 'rejected';
						}else if ($action == 'approve'){
							$licence->status = 'approved';
						}else if ($action == 'renew'){
							$payment = R::graph($request->POST['payment']);
							$payment->time_of_transaction = time();
							
							$datetime = new DateTime();
							
							$datetime->modify("+ $payment->renewal_duration years");
							$payment->expiry_date = $datetime->getTimeStamp();
								
							if (R::store($payment)){
								$licence->ownPayment[] = $payment;
							}
						}
						R::store($licence);
						redirectToPage('licence-view', array(':id' => $licence->id));
					}else if ($request->method == "GET"){
						if ($action = 'renew'){
							$smarty->assign("licence", $licence);
							$smarty->assign("request", $request);
							return $smarty->display('licence/renew.tpl');
						}
					}
				} 
			}else{
				PageError::show('404',NULL,'Unknown action', "Licence action not known.");
				die();
			}
			PageError::show('404',NULL,'Forbidden', "Action Forbidden");
		}

		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$licence = R::load("licence", $id);
				if (!$licence->id){
					PageError::show('404',NULL,'Licence not found!', "Licence with Id: $id not found!");
				}
				$licence->is_expired();

				$smarty->assign("licence", $licence);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('licence/detailview.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$licence = R::load("licence", $id);
			if (!$licence->id){
				PageError::show('404',NULL,'Licence not found!', "Licence with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				$edited_licence = R::graph($request->POST['licence']);
				$edited_licence->id = $id;
				
				if (R::store($edited_licence)){
					redirectToPage('licence-list');
				}
			}else if ($request->method == "GET"){
				$smarty->assign("licence", $licence);
				$smarty->assign("titles", array(
					'' => 'Title:',
					'Mr.' => 'Mr',
					'Mrs.' => 'Mrs',
					'Miss' => 'Miss',
					'Doctor' => 'Doctor',
					'Professor' => 'Professor',
				));
			}
			
			$smarty->assign("request", $request);
			$smarty->display('licence/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$licences = R::find("licence");
				$smarty->assign("licences", $licences);	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('licence/list.tpl');
		}
		
		public function delete($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			
			global $smarty;
			
			if ($request->method == "POST"){
				$id = $args[":id"];
				$licence = R::load("licence", $id);
				
				if (!$licence->id){
					PageError::show('404',NULL,'Licence not found!', "Licence with Id: $id not found!");
				}
				
				$licence->is_active = false;
				R::store($licence);
				redirectToPage('licence-list');
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('licence/confirm_delete.tpl');
			}
		}
	}
?>