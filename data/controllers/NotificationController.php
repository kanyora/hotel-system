<?php
	class NotificationController{ 
		/*--------------------------ADMIN CRUD-------------------------*/
		public function view($args){
			$request = $args["request"];
			global $smarty;
			checkLoggedIn($request->user);
			
			if ($request->method == "GET"){
				$id = $args[":id"];
				$notification = R::load("notification", $id);
				if (!$notification->id){
					PageError::show('404',NULL,'Notification not found!', "Notification with Id: $id not found!");
				}
				$smarty->assign("notification", $notification);
			}
			
			$smarty->assign("request", $request);
			$smarty->display('notification/detailview.tpl');
		}
		
		public function view_list($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			global $smarty;
			
			if ($request->method == "GET"){
				$notifications = R::find("notification");
				$smarty->assign("notifications", $notifications);	
			}
			
			$smarty->assign("request", $request);
			$smarty->display('notification/list.tpl');
		}
	}
?>