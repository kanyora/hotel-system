<?php
	class DoctorController{
		
		/*-----------------------------ADMIN CRUD-------------------------*/
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				$new_doctor = R::graph($request->POST['staff']);
				
				$_id = R::store($new_doctor);
				if($_id){
					if(isset($request->POST['user'])){
						$user = R::load("user", $request->POST['user']);
						if ($user->id){
							$user->ownDoctor[] = $new_doctor;
							R::store($user);
						}
					}
					redirectToPage('doctor-list');
				}
			}
			
			$smarty->assign("users", R::find('user'));
			
			$smarty->assign("request", $request);
			$smarty->display('staff/doctor/add.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$doctor = R::load("doctor", $id);
			
			if ($request->method == "POST"){
				if($doctor->id){
					$edited_doctor = R::graph($request->POST['staff']);
					$edited_doctor->id = $id;
					
					$_id = R::store($edited_doctor);
					if ($_id){
						if(isset($request->POST['user'])){
							$user = R::load("user", $request->POST['user']);
							if ($user->id){
								$user->ownDoctor[] = $edited_doctor;
								R::store($user);
							}
						}
						redirectToPage('doctor-list');
					}
				}
			}else if ($request->method == "GET"){
				if ($doctor->id){
					$smarty->assign("doctor", $doctor);
					$smarty->assign("users", R::find('user'));
					$smarty->assign("parent_user", $doctor->user);
					
				}else{
					PageError::show('404',NULL,'Doctor not found!', "Doctor with Id: $id not found!");
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('staff/doctor/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$smarty->assign("doctors", R::find("doctor"));	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('staff/doctor/list.tpl');
		}
	}
?>