<?php
	class DefaultController{
		public function index($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			
			redirectToPage('user-dashboard');
		}
		public function user_dashboard($args){
			$request = $args["request"];
			checkLoggedIn($request->user);
			
			global $smarty;
			
			if($request->user->belongsToGroup(array('admin'))){
				redirectToPage('admin-dashboard');
			}
			
			$smarty->assign("licences", $request->user->ownLicence);
			$smarty->assign("applications", $request->user->ownLicence);
			$smarty->assign("request", $request);
			$smarty->display('dashboard.tpl');
		}
		
		public function admin_dashboard($args){
			$request = $args["request"];
			userIsAdmin($request->user);
			
			$smarty->assign("request", $request);
			$smarty->display('admin_dashboard.tpl');
			$smarty->display('admin_dashboard.tpl');
		}
	}
?>