<?php
	class OrderController{
		public function create_order_reference($args){
			$str = 'abcdefghijklmnopqrstuvwxyz0123456789';
		    while (true){
		    	$count = 10;
		        while($count != 0){
		        	$reference .= $str[rand(0, count()-1)];
					$count--;
		        }
	            if(is_null(R::findOne("order", 'reference = ?', array($reference)))){
	            	return $reference;
	            }
			}
		}
		
		public function leave_comment($args){
			$request = $args["request"];
			global $router, $smarty;
			
		    if ($request->method == 'POST'){
		        $feedback = R::graph($request->POST['feedback']);
				$feedback->time = time();
				R::store($feedback);
				redirectToPage('default', array(':type' => $type_, ':id' => $order->id));
			}
			return $smarty->display('order/leave_comment.tpl');
		}
		
		public function cart($args){
			$request = $args["request"];
			global $router, $smarty;
			
			if ($request->method == 'GET'){
			    $item_list = array_values(isset($request->SESSION['cart']) ? $request->SESSION['cart'] : array());
			    $smarty->assign("cart", $item_list);
				
				$sum = 0;
				foreach ($item_list as $item) {
					$sum += array_sum($item['subtotal']);
				}
				$smarty->assign("total", $sum);
			}
			return $smarty->display('order/view_cart.tpl');
		}
		
		public function cart_alter($args){
			if (isset($args[":id"])){
				$id = $args[":id"];
				$product = R::load("product", $id);
				if(!$product->id){
					PageError::show('404',NULL,'Product not found!', "Product with Id: $id not found!");
					die();
				}
			}
			
			if (isset($args[":alter"])){
				$alter = $args[":alter"];
				
			    if ($request->method == 'POST'){
			    	$product_ = R::graph($request->POST['product']);
	            	$cart = isset($request->SESSION['cart']) ? $request->SESSION['cart'] : array();
					
					if ($alter == "add"){
			            $cart[$id] = array(
			            	'id' => product.id,
	                        'name' => product.name, 
	                        'quantity' => $product_->quantity,
	                        'price' => product.price,
	                        'subtotal'=> product.price * quantity,
	                        'notes'=> $product_->notes
	                    );
			        }else{
					    if ($cart){
					    	unset($cart[$id]);
						}
			        }
								
		            $request->SESSION['cart'] = $cart;
		            redirectToPage('order-view-cart');
				}
			}
			return $smarty->display('order/add_product.tpl');
		}
		
		public function submit($args){
		    $order = R::dispense('order');
		    
		    $order->reference = $this->create_order_reference();
		    $order->user = $request->user;
		    $order->location_id = $request->SESSION['location'];
		    
			R::store($order);
		    
		    # Attach order items
		    $cart = $request->SESSION['cart'];
		    $cart_items = array_values(cart);
			$item_summary="";
			
		    foreach ($cart_items as $item){
		    	$order_item = R::dispense('orderitem');
		        $order_item->import(array(
					   "quantity" => $item['quantity'],
	                   "order" => order,
	                   "price_per_item" => $item['price'],
	                   "product" => $item['id'],
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
		    return HttpResponseRedirect(reverse('home'));
		}
		
		public function confirm($args){
			$id = $args[":id"];
			$order = R::load("order", $order_reference);
			if (!$order->id){
				PageError::show('404',NULL,'Order not found!', "Order with Id: $id not found!");
				die();
			}
			$confirm = $args[":confirm"];
			
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
			return $smarty->display('order/accept_or_decline.tpl');
		}			
		
		public function checkout($args){
			$request = $args["request"];
			global $router, $smarty;
			
		    if (request.method == 'POST'){
	            $product = R::graph($request->POST['product']);
	            
	            # Make sure we have items in cart
	            if (!isset($request->SESSION['cart'])){
	                PageError::show('404',NULL,'No items to checkout!', "No items found on the cart to checkout");
				}
	            
                $request->SESSION['location'] = $product->location;
                return HttpResponseRedirect(reverse('submit_order'));
		    }
			return $smarty->display('order/check_out.tpl');
		}
		
		public function respond($args){
			$request = $args["request"];
			global $smarty;
			
			$order_reference = $args["order_reference"];
			$smarty->assign("order_reference", $order_reference);
			return $smarty->display('order/confirm_order.tpl');
		}
		
		public function leave_comment($args){
			$request = $args["request"];
			global $router, $smarty;
			
		    if ($request->method == 'POST'){
		        $feedback = R::graph($request->POST['feedback']);
				$feedback->time = time();
				R::store($feedback);
				redirectToPage('default', array(':type' => $type_, ':id' => $order->id));
			}
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
						redirectToPage('order-view', array(':type' => $type_, ':id' => $order->id));
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
					redirectToPage('order-list');
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
				
				$order->is_active = false;
				R::store($order);
				redirectToPage('order-list', array(':type' => $type_));
			}else if ($request->method == "GET"){
				$smarty->assign("request", $request);
				$smarty->display('order/confirm_delete.tpl');
			}
		}
	}
?>