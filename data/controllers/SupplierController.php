<?php
	class SupplierController{
		/*-----------------------------ADMIN CRUD-------------------------*/
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				$new_supplier = R::graph($request->POST['supplier']);
				
				$_id = R::store($new_supplier);
				if ($_id){
					redirectToPage('supplier-list');
				}
			}
			
			$smarty->assign("request", $request);
			$smarty->display('supplier/add.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$supplier = R::load("supplier", $id);
				if (!$supplier->id){
					PageError::show('404',NULL,'Supplier not found!', "Supplier with Id: $id not found!");
				}
				$smarty->assign("supplier", $supplier);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('supplier/detailview.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$supplier = R::load("supplier", $id);
			if (!$supplier->id){
				PageError::show('404',NULL,'Supplier not found!', "Supplier with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				$edited_supplier = R::graph($request->POST['supplier']);
				$edited_supplier->id = $id;
				
				$_id = R::store($edited_supplier);
				if ($_id){
					redirectToPage('supplier-list');
				}
			}else if ($request->method == "GET"){
				$smarty->assign("supplier", $supplier);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('supplier/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$suppliers = R::find("supplier");
				$smarty->assign("suppliers", $suppliers);	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('supplier/list.tpl');
		}
		
		public function delete($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			
			global $smarty;
			
			if ($request->method == "POST"){
				$id = $args[":id"];
				$supplier = R::load("supplier", $id);
				
				if (!$supplier->id){
					PageError::show('404',NULL,'Supplier not found!', "Supplier with Id: $id not found!");
				}
				
				$supplier->is_active = false;
				R::store($supplier);
				redirectToPage('supplier-list');
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('supplier/confirm_delete.tpl');
			}
		}
	}
?>