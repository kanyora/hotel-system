<?php
	class CategoryController{
		/*-----------------------------ADMIN CRUD-------------------------*/
		public function add($args){
			$request = $args["request"];
			global $router, $smarty;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				$new_category = R::graph($request->POST['category']);
				$_id = R::store($new_category);
				if ($_id){
					redirectToPage('category-list');
				}
			}
			$smarty->assign("category", R::dispense('category'));
			$smarty->assign("request", $request);
			$smarty->display('category/edit.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$category = R::load("category", $id);
				if (!$category->id){
					PageError::show('404',NULL,'Category not found!', "Category with Id: $id not found!");
				}
				$smarty->assign("category", $category);
			}
			
			$smarty->assign("categories", R::find('category'));
			$smarty->assign("request", $request);
			$smarty->display('category/detailview.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$category = R::load("category", $id);
			if (!$category->id){
				PageError::show('404',NULL,'Category not found!', "Category with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				$edited_category = R::graph($request->POST['category']);
				$edited_category->id = $id;
				
				$_id = R::store($edited_category);
				if ($_id){
					redirectToPage('category-list');
				}
			}else if ($request->method == "GET"){
				$smarty->assign("category", $category);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('category/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$categories = R::find("category");
				$smarty->assign("categories", $categories);	

			    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += intval($item['subtotal']);
				}
				$smarty->assign("total", $sum);
			}
			
			$smarty->assign("request", $request);
			
			if($request->user->belongsToGroups('admin')){
				$smarty->display('category/list.tpl');
			}else{
				$smarty->display('categories.tpl');
			}
		}
		
		public function delete($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			global $smarty;
			
			if ($request->method == "POST"){
				$id = $args[":id"];
				$category = R::load("category", $id);
				
				if (!$category->id){
					PageError::show('404',NULL,'Licence not found!', "Licence with Id: $id not found!");
					die();
				}
				
				R::trash($category);
				redirectToPage('category-list');
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->assign("object_type", "category");
				$smarty->display('confirm_delete.tpl');
			}
		}
	}
?>