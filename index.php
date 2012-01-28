<?php
	require_once ('conf/config.php');
	
	$request = new Request(
		$_COOKIE,
		$_FILES,
		$_GET,
		$_POST,
		$_REQUEST,
		$_SESSION,
		$_SERVER
	);
	$dao = new AuthDAO();
	//Prevent the user visiting the logged in page if he/she is already logged in
	if($dao->isUserLoggedIn($request->user)) { header("Location: auth/account.php"); die(); }
?>
<b>Logged in</b>