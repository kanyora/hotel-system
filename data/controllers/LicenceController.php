<?php
	class LicenceController{
		public function apply($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if (isset($args[":type"])){
				$type_ = $args[":type"];
				$type = str_replace('-', '_', $type_);
				$db_type = str_replace('-', '', $type_);
				$smarty->assign("type", $type);
				$smarty->assign("db_type", $db_type);
				$smarty->assign("licence", R::dispense($db_type));
				$template_name = 'licence/'.$type.'_add.tpl';
			}
			
			if ($request->method == "POST"){
				$new_licence = R::graph($request->POST['licence']);
				if (R::store($new_licence)){
					$request->user->ownLicence[] = $new_licence;
					R::store($request->user);
					redirectToPage('licence-list', array(':type' => $type_ ));
				}
			}
			
			$smarty->assign("titles", array(
				'' => 'Title:', 'Mr' => 'Mr', 'Mrs' => 'Mrs', 'Miss' => 'Miss', 'Doctor' => 'Doctor', 'Professor' => 'Professor',
			));
			$smarty->assign("request", $request);
			$smarty->display($template_name);
		}
		
		public function notification_close($args) {
			$request = $args["request"];
			global $router, $smarty;
			
			if (isset($args[":type"])){
				$type_ = $args[":type"];
				$type = str_replace('-', '_', $type_);
				$db_type = str_replace('-', '', $type_);
			}
			
			if (isset($args[":id"])){
				$id = $args[":id"];
				$licence = R::load($db_type, $id);
				if (!$licence->id){
					PageError::show('404',NULL,'Licence not found!', "Licence with Id: $id not found!");
					die();
				}else{
					if ($request->method == "GET"){
						$licence->latest_payment()->is_notified = true;
						R::store($licence);
						redirectToPage('licence-view', array(':type' => $type_, ':id' => $licence->id));
					}
				}
			}
		}
		
		public function action($args){
			$request = $args["request"];
			global $router, $smarty;
			
			if (isset($args[":type"])){
				$type_ = $args[":type"];
				$type = str_replace('-', '_', $type_);
				$db_type = str_replace('-', '', $type_);
				$smarty->assign("type", $type);
				$template_name = 'licence/'.$type.'_add.tpl';
			}
			
			if (isset($args[":id"])){
				$id = $args[":id"];
				$licence = R::load($db_type, $id);
				if (!$licence->id){
					PageError::show('404',NULL,'Licence not found!', "Licence with Id: $id not found!");
					die();
				}
			}
			
			if (isset($args[":action"])){
				$action = $args[":action"];
				if (in_array($action, array('approve', 'reject', 'revoke', 'issue', 'renew'))){
					if (in_array($action, array('approve', 'reject', 'revoke', 'issue'))){
						userIsAdmin($request->user);
					}
					if ($request->method == "POST"){
						if ($action == 'renew'){
							$payment = R::graph($request->POST['payment']);
							$payment->time_of_transaction = time();
							$payment->message = ucwords(str_replace('-', ' ', $type_))." #$licence->id Renewed on ".date('d/m/Y @ H:i a', $payment->time_of_transaction);
							$payment->is_notified = false;
							
							$datetime = new DateTime();
							$datetime->modify("+ $payment->renewal_duration years");
							$payment->expiry_date = $datetime->getTimeStamp();
							
							if (R::store($payment)){
								$licence->ownPayment[] = $payment;
							}
						}else{
							if ($action == 'issue')$licence->is_active = true;
							if ($action == 'revoke')$licence->is_active = false;
							
							$licence->status = "$action".'d';
						}
						R::store($licence);
						redirectToPage('licence-view', array(':type' => $type_, ':id' => $licence->id));
					}else if ($request->method == "GET"){
						if ($action == 'renew'){
							if ($licence->paying_now_is_reasonable() || 
								(isset($request->REQUEST['force_pay']) && $request->REQUEST['force_pay'] == 1)){
								
								$smarty->assign("licence", $licence);
								$smarty->assign("request", $request);
								$template_name = 'licence/renew.tpl';
							}else{
								$template_name = 'licence/force_pay.tpl';
							}
							return $smarty->display($template_name);
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
			
			if (isset($args[":type"])){
				$type_ = $args[":type"];
				$type = str_replace('-', '_', $type_);
				$db_type = str_replace('-', '', $type_);
				$template_name = 'licence/'.$type.'_detailview.tpl';
				
				if ($request->method == "GET"){
					$id = $args[":id"];
					$licence = R::load($db_type, $id);
					if (!$licence->id){
						PageError::show('404',NULL,'Licence not found!', "Licence with Id: $id not found!");
						die();
					}
					$licence->is_expired();
	
					$smarty->assign("licence", $licence);
					$smarty->assign("type", $type);
					$smarty->assign("type_slug", $type_);
				}
			}
			$smarty->assign("request", $request);
			$smarty->display($template_name);
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			if (isset($args[":type"])){
				$type_ = $args[":type"];
				$type = str_replace('-', '_', $type_);
				$db_type = str_replace('-', '', $type_);
				$template_name = 'licence/'.$type.'_add.tpl';
				$smarty->assign("type", $type);
			}

			$id = $args[":id"];
			$licence = R::load($db_type, $id);
			if (!$licence->id){
				PageError::show('404',NULL,'Licence not found!', "Licence with Id: $id not found!");
				die();
			}
			
			if ($request->method == "POST"){
				$edited_licence = R::graph($request->POST['licence']);
				$edited_licence->id = $id;
				
				if (R::store($edited_licence)){
					redirectToPage('licence-list', array(':type' => $type_ ));
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
			$smarty->display($template_name);
		}
		
		public function view_application_list($args){
			$args[":status"] = '';
			return $this->view_list($args);
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			$status = '';
			
			if (isset($args[":type"])){
				$type_ = $args[":type"];
				$type = str_replace('-', '_', $type_);
				$db_type = str_replace('-', '', $type_);
				$template_name = 'licence/'.$type.'_list.tpl';
			}
			
			if (isset($args[':status'])){
				$status = $args[':status'];
			}
			
			if ($request->method == "GET"){
				if ($status){
					$licences = R::find($db_type, 'status = ?', array($status));
				}else{
					$licences = R::find($db_type);
				}
				$smarty->assign("licences", $licences);
			}
			
			$smarty->assign("request", $request);
			$smarty->display($template_name);
		}
		
		public function delete($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			
			global $smarty;
			
			if (isset($args[":type"])){
				$type_ = $args[":type"];
				$type = str_replace('-', '_', $type_);
				$db_type = str_replace('-', '', $type_);
			}
			
			if ($request->method == "POST"){
				$id = $args[":id"];
				$licence = R::load($db_type, $id);
				
				if (!$licence->id){
					PageError::show('404',NULL,'Licence not found!', "Licence with Id: $id not found!");
					die();
				}
				
				$licence->is_active = false;
				R::store($licence);
				redirectToPage('licence-list', array(':type' => $type_));
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('licence/confirm_delete.tpl');
			}
		}
	}
?>