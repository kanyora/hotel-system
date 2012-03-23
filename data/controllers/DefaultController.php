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
		
		public function reports($args){
			$request = $args["request"];
			global $smarty;
			if($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('report.tpl');
			}
		}
		
		public function invoice($args){
			$request = $args["request"];
			global $smarty;
			if($request->method == "GET"){
				$reference = $args[":reference"];
				$order = R::findOne('order', 'reference=?', array($reference));
				$smarty->assign("order", $order);
				
				$total = 0;
				foreach ($order->ownOrderitem as $orderitem) {
					$total += $orderitem->dish->price * $orderitem->quantity;
				}
				
				$smarty->assign("total", $total);
				createPDF($smarty->fetch('invoice.tpl'), "Invoice");
			}
		}
		
		public function invoice_reports($args){
			$request = $args["request"];
			global $smarty;
			if($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('invoice_search.tpl');
			}else{
				$smarty->assign("status", $request->POST['status'] == "0" ? "Attended" : "Unattended");
				$smarty->assign("orders", R::find('order', 'delivered=?', array($request->POST['status'])));
				createPDF($smarty->fetch('invoice_report.tpl'), "Invoice-Results".date('d-m-Y'));
			}
		}
		
		public function delivery_reports($args){
			$request = $args["request"];
			global $smarty;
			if($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('search_results.tpl');	
			}else{
				createPDF($smarty->fetch('receipt.tpl'), $object->name);
			}
		}
	}
?>
