<?php
	require_once ('conf/config.php');

	$url = urldecode($_SERVER['REQUEST_URI']);
	try {
		$found_route = $router->findRoute($url);
		$dispatcher->dispatch($found_route);
	} catch ( RouteNotFoundException $e ) {
		//PageError::show('404', $url);
		echo "RouteNotFoundException: ".$e;
	} catch ( badClassNameException $e ) {
		//PageError::show('400', $url);
		echo "badClassNameException: ".$e;
	} catch ( classFileNotFoundException $e ) {
		//PageError::show('500', $url);
		echo "classFileNotFoundException: ".$e;
	} catch ( classNameNotFoundException $e ) {
		//PageError::show('500', $url);
		echo "classNameNotFoundException: ".$e;
	} catch ( classMethodNotFoundException $e ) {
		//PageError::show('500', $url);
		echo "classMethodNotFoundException: ".$e;
	} catch ( classNotSpecifiedException $e ) {
		//PageError::show('500', $url);
		echo "classNotSpecifiedException: ".$e;
	} catch ( methodNotSpecifiedException $e ) {
		//PageError::show('500', $url);
		echo "methodNotSpecifiedException: ".$e;
	}
?>