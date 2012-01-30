<?php
	class StockPersonelController{
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "POST"){
				$new_stock_personel = R::graph($request->POST['staff']);
				
				$_id = R::store($new_stock_personel);
				if($_id){
					if(isset($request->POST['user'])){
						$user = R::load("user", $request->POST['user']);
						if ($user->id){
							$new_stock_personel->ownUser[] = $user;
							R::store($new_stock_personel);
						}
					}
					redirectToPage('stock-personel-view', array(':id'=>$_id));
				}
			}
			
			$user_ids = array();
			foreach(R::find('user') as $user){
				$user_ids[$user->id] = $user->username;
			}
			$smarty->assign("users", $user_ids);
			
			$smarty->assign("request", $request);
			$smarty->display('staff/stock_personel/add.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			$id = $args[":id"];
			$stock_personel = R::load("stock_personel", $id);
			
			if ($request->method == "POST"){
				if($stock_personel->id){
					$edited_stock_personel = R::graph($request->POST['staff']);
					$edited_stock_personel->id = $id;
					
					$_id = R::store($edited_stock_personel);
					if ($_id){
						if(isset($request->POST['user'])){
							$user = R::load("user", $request->POST['user']);
							if ($user->id){
								$edited_stock_personel->ownUser[] = $user;
								R::store($new_stock_personel);
							}
						}
						redirectToPage('stock-personel-view', array(':id'=>$_id));
					}
				}
			}else if ($request->method == "GET"){
				if ($stock_personel->id){
					$smarty->assign("stock_personel", $stock_personel);
					$smarty->assign("users", R::find('user'));
				}else{
					PageError::show('404',NULL,'Stock Personel not found!', "Stock_personel with Id: $id not found!");
				}
			}
			
			$user_ids = array();
			foreach(R::find('user') as $user){
				$user_ids[$user->id] = $user->username;
			}
			$smarty->assign("users", $user_ids);
			
			$smarty->assign("request", $request);
			$smarty->display('staff/stock_personel/edit.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$stock_personel = R::load("stock_personel", $id);
				
				if($stock_personel->id){ 
					$smarty->assign("stock_personel", $stock_personel);
				}else{
					PageError::show('404',NULL,'Stock_personel not found!', "Stock Personel with Id: $id not found!");
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('staff/stock_personel/detailview.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$smarty->assign("stock_personels", R::find("stock_personel"));	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('staff/stock_personel/list.tpl');
		}
	}
?>