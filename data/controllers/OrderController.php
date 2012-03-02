<?php
	class OrderController{
		public function cart($args){
			$request = $args["request"];
			global $router, $smarty;
			
			if ($request->method == 'GET'){
			    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += intval($item['subtotal']);
				}
				$smarty->assign("total", $sum);
			}
			$smarty->assign("request", $request);
			return $smarty->display('order/view_cart.tpl');
		}
		
		public function order_attend($args){
			$request = $args["request"];
			global $router, $smarty;
			
			if (isset($args[":id"])){
				$id = $args[":id"];
				$order = R::load("order", $id);
				if (!$order->id){
					PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
					die();
				}
			}
			$order->delivered = 1;
			R::store($order);
			redirectToPage('order-list');
		}
		
		public function cart_alter($args){
			$request = $args["request"];
			global $router, $smarty;
			
			if (isset($args[":id"])){
				$id = $args[":id"];
				$dish = R::load("dish", $id);
				if(!$dish->id){
					PageError::show('404',NULL,'Product not found!', "Product with Id: $id not found!");
					die();
				}
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
			
			if (isset($args[":alter"])){
				$alter = $args[":alter"];
				
			    if ($request->method == 'POST'){
			    	$dish_ = R::graph($request->POST['order']);
	            	$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
					
					if ($alter == "add"){
			            $cart[$id] = array(
			            	'id' => $dish->id,
	                        'name' => $dish->name,
	                        'quantity' => $dish_->quantity,
	                        'price' => $dish->price,
	                        'photo' => $dish->photo,
	                        'subtotal'=> $dish->price * $dish_->quantity,
	                        'notes'=> $dish_->notes
	                    );
						$_SESSION['cart'] = $cart;
						return redirectToPage('order-cart');
			        }
				}else{
					if ($alter == "remove"){
					    if ($cart){
					    	unset($cart[$id]);
						}
						$_SESSION['cart'] = $cart;
		            	return redirectToPage('order-cart');
					}
		        }
			}
			$smarty->assign("request", $request);
			return $smarty->display('order/add_product.tpl');
		}
		
		public function submit($args){
			$request = $args["request"];
			global $router, $smarty;
			
		    $order = R::dispense('order');
		    
		    $order->reference = create_order_reference();
		    $order->user = $request->user;
		    $order->location = isset($_SESSION['location'])?$_SESSION['location']:'';
		    
			R::store($order);
		    
		    # Attach order items
		    $cart = !is_null($_SESSION['cart'])? $_SESSION['cart'] : array();
		    $cart_items = array_values($cart);
			$item_summary="";
			
		    foreach ($cart_items as $item){
		    	$order_item = R::dispense('orderitem');
		        $order_item->import(array(
					   "quantity" => $item['quantity'],
	                   "order" => $order,
	                   "price_per_item" => $item['price'],
	                   "dish_id" => $item['id'],
	                   "notes" => $item['notes'])
				);
				R::store($order_item);
				$item_summary .= "$order_item->quantity $order_item->name ($order_item->notes)";
			}
			
		    # Set a confirmation message for user
		    //messages.success(request, "Thanks! Your order number is $order->reference");
		    
		    # Clear cart
		    destorySession("cart");
		    
		    # Redirect to menu
		    return redirectToPage(('default'));
		}
		
		public function confirm($args){
			$id = $args[":id"];
			$order = R::load("order", $order_reference);
			if (!$order->id){
				PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
				die();
			}
			$confirm = $args[":confirm"];
			
			if ($request->method == 'GET'){
			    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += intval($item['subtotal']);
				}
				$smarty->assign("total", $sum);
			}
			
		    if ($order->status == "confirmed"){
				# Set a already confirmed message for user
				$messages = "Order # $order->reference". ($confirm == 'decline'?'was already confirmed and cannot be':'is') ." cancelled";
		    }else if ($order->status == 'cancelled'){
				# Set a already cancelles message for user
				$messages = "Order # $order->reference". ($confirm == 'decline'?'was':'is') ." already cancelled";
		    }else{
		        $order->status = 'confirmed';
				R::store($order);
				$messages = "Order $order_reference %s confirmed ";
			}
				
			# Set a confirmation message for user
			$smarty->assign('messages', $messages);
			$smarty->assign('order_reference', $order_reference);
			$smarty->assign("request", $request);
			return $smarty->display('order/accept_or_decline.tpl');
		}			
		
		public function checkout($args){
			$request = $args["request"];
			global $router, $smarty;
			
			if(!$request->user->isUserLoggedIn()){
				redirectToPage('auth-register');
			}
			
		    if ($request->method == 'POST'){
	            $dish = R::graph($request->POST['order']);
	            
	            # Make sure we have items in cart
	            if (!isset($_SESSION['cart'])){
	                PageError::show('404',NULL,'No items to checkout!', "No items found on the cart to checkout");
				}
	            
                $_SESSION['location'] = $dish->location;
                return redirectToPage(('order-submit'));
		    }else if ($request->method == 'GET'){
			    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += intval($item['subtotal']);
				}
				$smarty->assign("total", $sum);
			}
		    $smarty->assign("request", $request);
			return $smarty->display('order/check_out.tpl');
		}
		
		public function respond($args){
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
			
			$order_reference = $args["order_reference"];
			$smarty->assign("order_reference", $order_reference);
			$smarty->assign("request", $request);
			return $smarty->display('order/confirm_order.tpl');
		}
		
		public function leave_comment($args){
			$request = $args["request"];
			global $router, $smarty;
			
		    if ($request->method == 'POST'){
		        $feedback = R::graph($request->POST['feedback']);
				$feedback->time = time();
				R::store($feedback);
				return redirectToPage('default');
			}else if ($request->method == 'GET'){
			    $item_list = array_values(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += intval($item['subtotal']);
				}
				$smarty->assign("total", $sum);
			}
			
			$smarty->assign("request", $request);
			return $smarty->display('order/leave_comment.tpl');
		}
				
		public function action($args){
			$request = $args["request"];
			global $router, $smarty;
			
			if (isset($args[":id"])){
				$id = $args[":id"];
				$order = R::load("order", $id);
				if (!$order->id){
					PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
					die();
				}
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
			
			if (isset($args[":action"])){
				$action = $args[":action"];
				if (in_array($action, array('approve', 'reject', 'revoke', 'issue', 'renew'))){
					if (in_array($action, array('approve', 'reject', 'revoke', 'issue'))){
						userIsAdmin($request->user);
					}
					if ($request->method == "POST"){
						if ($action == 'renew'){
							$payment = R::graph($request->POST['payment']);
							$payment->time_of_transaction = time();

							if (R::store($payment)){
								$order->ownPayment[] = $payment;
							}
						}else{
							if ($action == 'issue')$order->is_active = true;
							if ($action == 'revoke')$order->is_active = false;
							
							$order->status = "$action".'d';
						}
						R::store($order);
						return redirectToPage('order-view', array(':type' => $type_, ':id' => $order->id));
					}else if ($request->method == "GET"){
						if ($action == 'renew'){
							if ($order->paying_now_is_reasonable() || 
								(isset($request->REQUEST['force_pay']) && $request->REQUEST['force_pay'] == 1)){
								
								$smarty->assign("order", $order);
								$smarty->assign("request", $request);
								$template_name = 'order/renew.tpl';
							}else{
								$template_name = 'order/force_pay.tpl';
							}
							return $smarty->display($template_name);
						}
					}
				} 
			}else{
				PageError::show('404',NULL,'Unknown action', "Order action not known.");
				die();
			}
			PageError::show('404',NULL,'Forbidden', "Action Forbidden");
		}

		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			$template_name = 'order/detailview.tpl';
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$order = R::load("order", $id);
				if (!$order->id){
					PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
					die();
				}
				$smarty->assign("order", $order);
			}
			
			$smarty->assign("request", $request);
			$smarty->display($template_name);
		}
		
		public function edit($args){
			$request = $args["request"];
			global $smarty;
			userIsAdmin($request->user);
			
			$id = $args[":id"];
			$order = R::load("order", $id);
			if (!$order->id){
				PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
				die();
			}
			
			if ($request->method == "POST"){
				$edited_order = R::graph($request->POST['order']);
				$edited_order->id = $id;
				
				if (R::store($edited_order)){
					return redirectToPage('order-list');
				}
			}else if ($request->method == "GET"){

				$smarty->assign("order", $order);
			}
			
			$smarty->assign("request", $request);
			$smarty->display($template_name);
		}
		
		public function view_application_list($args){
			$args[":status"] = '';
			return $this->view_list($args);
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			$status = '';
			
			if (isset($args[':status'])){
				$status = $args[':status'];
			}
			
			if ($request->method == "GET"){
				if ($status){
					$orders = R::find("order", 'status = ?', array($status));
				}else{
					$orders = R::find("order");
				}
				$smarty->assign("orders", $orders);
			}
			
			$smarty->assign("request", $request);
			$smarty->display("order/list.tpl");
		}
		
		public function delete($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			
			global $smarty;
			
			if ($request->method == "POST"){
				$id = $args[":id"];
				$order = R::load("order", $id);
				
				if (!$order->id){
					PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
					die();
				}
				
				R::trash($order);
				return redirectToPage('order-list', array(':type' => $type_));
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('order/confirm_delete.tpl');
			}
		}
	}
?>