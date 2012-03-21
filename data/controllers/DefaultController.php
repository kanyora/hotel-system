<?php
	class DefaultController{
		public function index($args){
			$request = $args["request"];
			if($request->user->belongsToGroups('admin')){
				redirectToPage('order-list');
			}else{
				global $smarty;
				if ($request->method == 'GET'){
				    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
				    $smarty->assign("cart", $item_list);
					
					$sum = 0;
					foreach ($item_list as $item) {
						$sum += intval($item['subtotal']);
					}
					$smarty->assign("total", $sum);
				}
				$smarty->assign("dishes", R::find('dish'));
				$smarty->assign("request", $request);
				$smarty->display('index.tpl');
			}
		}
		
		public function user_dashboard($args){
			$request = $args["request"];
			global $smarty;
			
			if($request->user->belongsToGroup(array('admin'))){
				redirectToPage('admin-dashboard');
			}
			
			if ($request->method == 'GET'){
			    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += intval($item['subtotal']);
				}
				$smarty->assign("total", $sum);
			}
			
			$smarty->assign("dishes", R::find('dish'));
			$smarty->assign("categories", R::find('category'));
			$smarty->assign("request", $request);
			$smarty->display('dashboard.tpl');
		}
		
		public function admin_dashboard($args){
			$request = $args["request"];
			global $smarty;
			
			$smarty->assign("request", $request);
			$smarty->display('admin_dashboard.tpl');
		}

		public function menu($args){
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
			}
						
			$smarty->assign("dishes", R::find('dish'));
			$smarty->assign("categories", R::find('category'));
			$smarty->assign("request", $request);
			$smarty->display('menu.tpl');
		}
		
		public function service($args){
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
			}
						
			$smarty->assign("dishes", R::find('dish'));
			$smarty->assign("categories", R::find('category'));
			$smarty->assign("request", $request);
			$smarty->display('services.tpl');
		}
		
		public function contact($args){
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
			}
						
			$smarty->assign("dishes", R::find('dish'));
			$smarty->assign("categories", R::find('category'));
			$smarty->assign("request", $request);
			$smarty->display('contact.tpl');
		}
		
		public function search($args){
			$request = $args["request"];
			global $smarty;
			if($request->method == "GET" && isset($request->GET['q'])){
				$smarty->assign("dishes", R::find("dish", "name like '%".$request->GET['q']."%'"));

			    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += intval($item['subtotal']);
				}
				$smarty->assign("total", $sum);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('search_results.tpl');
		}
	}
?>
