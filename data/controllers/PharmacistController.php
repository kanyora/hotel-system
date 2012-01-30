<?php
	class PharmacistController{
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "POST"){
				$new_pharmacist = R::graph($request->POST['staff']);
				
				$_id = R::store($new_pharmacist);
				if($_id){
					if(isset($request->POST['user'])){
						$user = R::load("user", $request->POST['user']);
						if ($user->id){
							$new_pharmacist->ownUser[] = $user;
							R::store($new_pharmacist);
						}
					}
					redirectToPage('pharmacist-view', array(':id'=>$_id));
				}
			}
			
			$user_ids = array();
			foreach(R::find('user') as $user){
				$user_ids[$user->id] = $user->username;
			}
			$smarty->assign("users", $user_ids);
			
			$smarty->assign("request", $request);
			$smarty->display('staff/pharmacist/add.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			$id = $args[":id"];
			$pharmacist = R::load("pharmacist", $id);
			
			if ($request->method == "POST"){
				if($pharmacist->id){
					$edited_pharmacist = R::graph($request->POST['staff']);
					$edited_pharmacist->id = $id;
					
					$_id = R::store($edited_pharmacist);
					if ($_id){
						if(isset($request->POST['user'])){
							$user = R::load("user", $request->POST['user']);
							if ($user->id){
								$edited_pharmacist->ownUser[] = $user;
								R::store($edited_pharmacist);
							}
						}
						redirectToPage('pharmacist-view', array(':id'=>$_id));
					}
				}
			}else if ($request->method == "GET"){
				if ($pharmacist->id){
					$smarty->assign("pharmacist", $pharmacist);
					$smarty->assign("users", R::find('user'));
				}else{
					PageError::show('404',NULL,'Pharmacist not found!', "Pharmacist with Id: $id not found!");
				}
			}
			
			$user_ids = array();
			foreach(R::find('user') as $user){
				$user_ids[$user->id] = $user->username;
			}
			$smarty->assign("users", $user_ids);
			
			$smarty->assign("request", $request);
			$smarty->display('staff/pharmacist/edit.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$pharmacist = R::load("pharmacist", $id);
				
				if($pharmacist->id){ 
					$smarty->assign("pharmacist", $pharmacist);
				}else{
					PageError::show('404',NULL,'Pharmacist not found!', "Pharmacist with Id: $id not found!");
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('staff/pharmacist/detailview.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$smarty->assign("pharmacists", R::find("pharmacist"));	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('staff/pharmacist/list.tpl');
		}
	}
?>