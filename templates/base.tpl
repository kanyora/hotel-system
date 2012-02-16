<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{block "title"}{/block}</title>
		
		<link rel="stylesheet" href="{#BASE_URL#}/static/css/reset.css">
	    <link rel="stylesheet" href="{#BASE_URL#}/static/css/visualize.css">
	    <link rel="stylesheet" href="{#BASE_URL#}/static/css/datatables.css">
	    <link rel="stylesheet" href="{#BASE_URL#}/static/css/buttons.css">
	    <link rel="stylesheet" href="{#BASE_URL#}/static/css/checkboxes.css">
	    <link rel="stylesheet" href="{#BASE_URL#}/static/css/inputtags.css">
	    <link rel="stylesheet" href="{#BASE_URL#}/static/css/main.css">
	    <!--[if lt IE 9]>
		    <link rel="stylesheet" href="{#BASE_URL#}/static/css/ie.css" />
		    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
  		<link rel="stylesheet" href="{#BASE_URL#}/static/js/skins/default/skin.css">
  		<script id="__isTpiViewExists"></script>
		
		{block "extracss"}{/block}
		{block "extrajs"}{/block}
	</head>
	<body>
		{block "body"}{/block}
		<!-- JavaScript -->
		<script src="{#BASE_URL#}/static/js/excanvas.js"></script>
		<script src="{#BASE_URL#}/static/js/jquery.js"></script>
		<script src="{#BASE_URL#}/static/js/jquery.livesearch.js"></script>
		<script src="{#BASE_URL#}/static/js/jquery.visualize.js"></script>
		<script src="{#BASE_URL#}/static/js/jquery.datatables.js"></script>
		<script src="{#BASE_URL#}/static/js/jquery.placeholder.js"></script>
		<script src="{#BASE_URL#}/static/js/jquery.selectskin.js"></script>
		<script src="{#BASE_URL#}/static/js/jquery.checkboxes.js"></script>
		<script src="{#BASE_URL#}/static/js/jquery.wymeditor.js"></script>
		<script src="{#BASE_URL#}/static/js/jquery.validate.js"></script>
		<script src="{#BASE_URL#}/static/js/jquery.inputtags.js"></script>
		<script src="{#BASE_URL#}/static/js/notifications.js"></script>
		<script src="{#BASE_URL#}/static/js/application.js"></script>
		<div id="livesearch" style="display: none; "></div>
	</body>
</html>