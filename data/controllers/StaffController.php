<?php
	class StaffController{
		public function dashboard($args){
			$request = $args["request"];
			global $router, $smarty;
			checkLoggedIn($request->user);
			
			$smarty->assign("request", $request);
			$smarty->display('staff/stock_personel/dashboard.tpl');
		}
	}
?>