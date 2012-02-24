<?php
	class OrderController{
		public function action($args){
			$request = $args["request"];
			global $router, $smarty;
			
			if (isset($args[":id"])){
				$id = $args[":id"];
				$order = R::load("order", $id);
				if (!$order->id){
					PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
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
							$payment->message = ucwords(str_replace('-', ' ', $type_))." #$order->id Renewed on ".date('d/m/Y @ H:i a', $payment->time_of_transaction);
							$payment->is_notified = false;
							
							$datetime = new DateTime();
							$datetime->modify("+ $payment->renewal_duration years");
							$payment->expiry_date = $datetime->getTimeStamp();
							
							if (R::store($payment)){
								$order->ownPayment[] = $payment;
							}
						}else{
							if ($action == 'issue')$order->is_active = true;
							if ($action == 'revoke')$order->is_active = false;
							
							$order->status = "$action".'d';
						}
						R::store($order);
						redirectToPage('order-view', array(':type' => $type_, ':id' => $order->id));
					}else if ($request->method == "GET"){
						if ($action == 'renew'){
							if ($order->paying_now_is_reasonable() || 
								(isset($request->REQUEST['force_pay']) && $request->REQUEST['force_pay'] == 1)){
								
								$smarty->assign("order", $order);
								$smarty->assign("request", $request);
								$template_name = 'order/renew.tpl';
							}else{
								$template_name = 'order/force_pay.tpl';
							}
							return $smarty->display($template_name);
						}
					}
				} 
			}else{
				PageError::show('404',NULL,'Unknown action', "Order action not known.");
				die();
			}
			PageError::show('404',NULL,'Forbidden', "Action Forbidden");
		}

		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			$template_name = 'order/detailview.tpl';
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$order = R::load("order", $id);
				if (!$order->id){
					PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
					die();
				}

				$smarty->assign("order", $order);
			}
			
			$smarty->assign("request", $request);
			$smarty->display($template_name);
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$order = R::load("order", $id);
			if (!$order->id){
				PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
				die();
			}
			
			if ($request->method == "POST"){
				$edited_order = R::graph($request->POST['order']);
				$edited_order->id = $id;
				
				if (R::store($edited_order)){
					redirectToPage('order-list');
				}
			}else if ($request->method == "GET"){

				$smarty->assign("order", $order);
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
			
			if (isset($args[':status'])){
				$status = $args[':status'];
			}
			
			if ($request->method == "GET"){
				if ($status){
					$orders = R::find("order", 'status = ?', array($status));
				}else{
					$orders = R::find("order");
				}
				$smarty->assign("orders", $orders);
			}
			
			$smarty->assign("request", $request);
			$smarty->display("order/list.tpl");
		}
		
		public function delete($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			
			global $smarty;
			
			if ($request->method == "POST"){
				$id = $args[":id"];
				$order = R::load("order", $id);
				
				if (!$order->id){
					PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
					die();
				}
				
				$order->is_active = false;
				R::store($order);
				redirectToPage('order-list', array(':type' => $type_));
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('order/confirm_delete.tpl');
			}
		}
	}
?>