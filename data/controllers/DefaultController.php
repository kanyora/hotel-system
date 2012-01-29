<?php
	class DefaultController{
		public function index($args){
			$request = $args['request'];
			echo "<b>Hapa!! -- $request->user </b><br/>";
		}
	}
?>