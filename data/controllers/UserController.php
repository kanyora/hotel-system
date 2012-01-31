<?php
	class UserController{
		public function add($args){
			$request = $args["request"];
			
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				$new_user = R::graph($request->POST['user']);
				$_id = R::store($new_user);
				redirectToPage('user-list');
			}
			
			$smarty->assign("request", $request);
			$smarty->display('auth/users/add.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$user = R::load("user", $id);
			
			if ($request->method == "POST"){
				if($user->id){
					$edited_user = R::graph($request->POST['user']);
					$edited_user->id = $id;
					
					$_id = R::store($edited_user);
					redirectToPage('user-list');
				}
			}else if ($request->method == "GET"){
				if ($user->id){
					$smarty->assign("user", $user);
				}else{
					PageError::show('404',NULL,'User not found!', "User with Id: $id not found!");
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('auth/users/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$smarty->assign("users", R::find("user"));	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('auth/users/list.tpl');
		}
	}
?>