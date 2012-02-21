<?php
	class PaymentController{
		/*-----------------------------ADMIN CRUD-------------------------*/
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				$new_payment = R::graph($request->POST['payment']);
				$new_payment->date_purchased = date_create_from_format(
					'd/m/Y', $new_payment->date_purchased
				);
				
				$_id = R::store($new_payment);
				if ($_id){
					redirectToPage('payment-list');
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('payment/add.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$payment = R::load("payment", $id);
				if (!$payment->id){
					PageError::show('404',NULL,'Payment not found!', "Payment with Id: $id not found!");
				}
				$smarty->assign("payment", $payment);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('payment/detailview.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$payment = R::load("payment", $id);
			if (!$payment->id){
				PageError::show('404',NULL,'Payment not found!', "Payment with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				$edited_payment = R::graph($request->POST['payment']);
				$edited_payment->id = $id;
				
				$edited_payment->date_purchased = date_create_from_format(
					'd/m/Y', $new_payment->date_purchased
				);
				
				$_id = R::store($edited_payment);
				if ($_id){
					redirectToPage('payment-list');
				}
			}else if ($request->method == "GET"){
				$smarty->assign("payment", $payment);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('payment/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$payments = R::find("payment");
				$smarty->assign("payments", $payments);	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('payment/list.tpl');
		}
	}
?>