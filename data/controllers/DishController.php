<?php
	class DishController{
		/*-----------------------------ADMIN CRUD-------------------------*/
		public function add($args){
			$request = $args["request"];
			global $router, $smarty, $fileUploader;
			userIsAdmin($request->user);
			
			if ($request->method == "POST"){
				global $new_dish;
				$new_dish = R::graph($request->POST['dish']);
				$new_dish->date_added = time();
				$new_dish->photo = $new_dish->name.'-'.date('d-m-Y').".jpg";
				
				if ($request->FILES){
					$fileUploader->save(function($file) {
						global $UPLOAD_DIRECTORY, $new_dish;
						$file->setName("$new_dish->name-".date('d-m-Y'));
						$file->setName($new_dish->photo);
						$upload_dir = $UPLOAD_DIRECTORY."/dishes/images/";
						if(!file_exists($upload_dir)){
							mkdir($upload_dir, null, true);
						}
						return $upload_dir;
					});
				}
				
				if($new_dish->category){
					$category = R::load("category", $new_dish->category);
					$new_dish->category = $category;
				}
				
				$_id = R::store($new_dish);
				if ($_id){
					redirectToPage('dish-list');
				}
			}
			
			$smarty->assign("dish", R::dispense('dish'));
			$smarty->assign("categories", R::find('category'));
			$smarty->assign("request", $request);
			
			$smarty->display('dish/edit.tpl');
		}
		
		public function admin_view($args){
			$request = $args["request"];
			global $smarty;
			
			if ($request->method == 'GET'){
			    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += intval($item['subtotal']);
				}
				$smarty->assign("total", $sum);

				$id = $args[":id"];
				$dish = R::load("dish", $id);
				if (!$dish->id){
					PageError::show('404',NULL,'Dish not found!', "Dish with Id: $id not found!");
				}
				$smarty->assign("dish", $dish);
			}
			
			$smarty->assign("request", $request);
			$smarty->assign("categories", R::find('category'));
			$smarty->display('dish/detailview.tpl');
		}
		
		public function view($args){
			$request = $args["request"];
			global $smarty;
			
			if ($request->method == 'GET'){
			    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += intval($item['subtotal']);
				}
				$smarty->assign("total", $sum);

				$id = $args[":id"];
				$dish = R::load("dish", $id);
				if (!$dish->id){
					PageError::show('404',NULL,'Dish not found!', "Dish with Id: $id not found!");
				}
				$smarty->assign("dish", $dish);
			}
			
			$smarty->assign("request", $request);
			$smarty->assign("categories", R::find('category'));
			$smarty->display('dish/detailview.tpl');
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty, $fileUploader;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$dish = R::load("dish", $id);
			if (!$dish->id){
				PageError::show('404',NULL,'Dish not found!', "Dish with Id: $id not found!");
			}
			
			if ($request->method == "POST"){
				global $edited_dish;
				$edited_dish = R::graph($request->POST['dish']);
				$edited_dish->id = $id;
				$edited_dish->last_edit_time = time();
				$edited_dish->photo = $edited_dish->name.'-'.date('d-m-Y').".jpg";
				
				$fileUploader->save(function($file) {
					global $UPLOAD_DIRECTORY, $edited_dish;
					$file->setName($edited_dish->photo);
					$upload_dir = $UPLOAD_DIRECTORY."/dishes/images/";
					if(!file_exists($upload_dir)){
						mkdir($upload_dir, null, true);
					}
					return $upload_dir;
				});
				
				if($edited_dish->category){
					$category = R::load("category", $edited_dish->category);
					$edited_dish->category = $category;
				}
				
				$_id = R::store($edited_dish);
				if ($_id){
					redirectToPage('dish-list');
				}
			}else if ($request->method == "GET"){
				$smarty->assign("dish", $dish);
			}
			
			$smarty->assign("categories", R::find('category'));
			$smarty->assign("request", $request);
			$smarty->display('dish/edit.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			global $smarty;
			
			if(isset($args[":category_id"])){
				$category_id = $args[":category_id"];
				$category = R::load("category", $category_id);
			}
			
			if ($request->method == 'GET'){
			    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += intval($item['subtotal']);
				}
				$smarty->assign("total", $sum);

				if (isset($category)){
					$dishes = $category->ownDish;
				}else{
					$dishes = R::find("dish");
				}
				$smarty->assign("dishes", $dishes);
			}
			
			$smarty->assign("request", $request);
			$smarty->assign("categories", R::find('category'));
			if(!$request->user->belongsToGroups('admin')){
				$smarty->display('menu.tpl');
			}else{
				$smarty->display('dish/list.tpl');
			}
		}
		
		public function admin_view_list($args){
			$request = $args["request"];
			global $smarty;
			
			if(isset($args[":category_id"])){
				$category_id = $args[":category_id"];
				$category = R::load("category", $category_id);
			}
			
			if ($request->method == 'GET'){
			    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += intval($item['subtotal']);
				}
				$smarty->assign("total", $sum);

				if (isset($category)){
					$dishes = $category->ownDish;
				}else{
					$dishes = R::find("dish");
				}
				$smarty->assign("dishes", $dishes);
			}
			
			$smarty->assign("request", $request);
			$smarty->assign("categories", R::find('category'));
			if(!$request->user->belongsToGroups('admin')){
				$smarty->display('menu.tpl');
			}else{
				$smarty->display('dish/list.tpl');
			}
		}
		
		public function delete($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			
			global $smarty;
			
			if ($request->method == "POST"){
				$id = $args[":id"];
				$dish = R::load("dish", $id);
				
				if (!$dish->id){
					PageError::show('404',NULL,'Dish not found!', "Dish with Id: $id not found!");
				}
				
				$dish->is_active = false;
				R::store($dish);
				redirectToPage('dish-list');
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->assign("object_type", "dish");
				$smarty->display('confirm_delete.tpl');
			}
		}
	}
?>