<?php
	class NurseController{
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			checkLoggedIn($request->user);
			
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
			checkLoggedIn($request->user);
			
			$id = $args[":id"];
			$nurse = R::load("nurse", $id);
			
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