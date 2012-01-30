<?php
	require_once('category/urls.php');

	$product_index = new Route('/Pharmacy/products/');
	$product_index->setMapClass('Product')->setMapMethod('index');
	$router->addRoute('product-index', $product_index);
?>