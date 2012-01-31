<?php
	class NurseController{
		public function my_orders($args){
			$request = $args["request"];
			userBelongsToGroups($request->user, "'nurses'");
			$nurse = $request->user->nurse;
			
			if($nurse){
				$args[":nurse_id"] = $nurse;
				$this->nurse_orders($args);
			}else{
				PageError::show('404',NULL,'Nurse not found!', "Nurse with Id: $id not found!");
			}
		}
		
		public function nurse_orders($args){
			$request = $args["request"];
			userBelongsToGroups($request->user, "'nurses'");
			
			global $smarty;
			
			$nurse = $request->user->nurse;
			if($nurse){
				$smarty->assign("orders", $nurse->ownOrder);
			}else{
				PageError::show('404',NULL,'Nurse not found!', "Nurse with Id: $id not found!");
			}
			
			$smarty->assign("request", $request);
			$smarty->display('staff/nurse/orders/my_list.tpl');
		}
		
		public function orders_new($args){
			$request = $args["request"];
			userBelongsToGroups($request->user, "'nurses', 'admin'");
			
			global $router, $smarty;
			if($request->method="POST"){
				$new_order = R::graph($request->POST['order']);
				$_id = R::store($new_order);
				if($_id){
					$nurse = $request->user->nurse;
					if($nurse){
						$nurse->ownOrder[] = $new_order;
						R::store($nurse);
					}
					redirectToPage('order-view', array(':id'=>$_id));
				}
			}
		}
		
		public function order_edit($args){
			$request = $args["request"];
			global $smarty;
			userBelongsToGroups($request->user, "'nurses', 'admin'");
			
			$id = $args[":id"];
			$order = R::load("order", $id);
			
			if(!$order){
				PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				if($nurse->id){
					$edited_nurse = R::graph($request->POST['order']);
					$edited_nurse->id = $id;
					
					$_id = R::store($edited_nurse);
					if ($_id){
						$new_order = R::graph($request->POST['order']);
						$_id = R::store($new_order);
						if($_id){
							$nurse = $request->user->nurse;
							if($nurse){
								$new_order->ownNurse[] = $nurse;
								R::store($new_order);
							}
							redirectToPage('order-view', array(':id'=>$_id));
						}
					}
				}
			}else if ($request->method == "GET"){
				if ($order->id){
					$smarty->assign("order", $order);
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('staff/nurse/orders/edit.tpl');
		}
		
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				$new_nurse = R::graph($request->POST['staff']);
				
				$_id = R::store($new_nurse);
				if($_id){
					if(isset($request->POST['user'])){
						$user = R::load("user", $request->POST['user']);
						if ($user->id){
							$new_nurse->ownUser[] = $user;
							R::store($new_nurse);
						}
					}
					redirectToPage('nurse-view', array(':id'=>$_id));
				}
			}
			
			$user_ids = array();
			foreach(R::find('user') as $user){
				$user_ids[$user->id] = $user->username;
			}
			$smarty->assign("users", $user_ids);
			
			$smarty->assign("request", $request);
			$smarty->display('staff/nurse/add.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$nurse = R::load("nurse", $id);
			
			if(!$nurse){
				PageError::show('404',NULL,'Nurse not found!', "Nurse with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				if($nurse->id){
					$edited_nurse = R::graph($request->POST['staff']);
					$edited_nurse->id = $id;
					
					$_id = R::store($edited_nurse);
					if ($_id){
						if(isset($request->POST['user'])){
							$user = R::load("user", $request->POST['user']);
							if ($user->id){
								$edited_nurse->ownUser[] = $user;
								R::store($edited_nurse);
							}
						}
						redirectToPage('nurse-view', array(':id'=>$_id));
					}
				}
			}else if ($request->method == "GET"){
				if ($nurse->id){
					$smarty->assign("nurse", $nurse);
					$smarty->assign("users", R::find('user'));
				}else{
					PageError::show('404',NULL,'Nurse not found!', "Nurse with Id: $id not found!");
				}
			}
			
			$user_ids = array();
			foreach(R::find('user') as $user){
				$user_ids[$user->id] = $user->username;
			}
			$smarty->assign("users", $user_ids);
			
			$smarty->assign("request", $request);
			$smarty->display('staff/nurse/edit.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$nurse = R::load("nurse", $id);
				
				if($nurse->id){ 
					$smarty->assign("nurse", $nurse);
				}else{
					PageError::show('404',NULL,'Nurse not found!', "Nurse with Id: $id not found!");
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('staff/nurse/detailview.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$smarty->assign("nurses", R::find("nurse"));	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('staff/nurse/list.tpl');
		}
	}
?>