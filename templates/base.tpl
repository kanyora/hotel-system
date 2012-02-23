<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">
<!--<![endif]-->
<head>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{block "title"}{/block}</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		
		<link href="http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Ubuntu" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" href="{#BASE_URL#}/static/css/main.css">
		<!-- end CSS-->
		<!-- CSS Media Queries for Standard Devices -->
		<!--[if !IE]><!-->
		<link rel="stylesheet" href="{#BASE_URL#}/static/css/smartphone.css" media="only screen and (min-width : 320px) and (max-width : 767px)">
		<link rel="stylesheet" href="{#BASE_URL#}/static/css/ipad.css" media="only screen and (min-width : 768px) and (max-width : 1024px)">
		<!--<![endif]-->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- All JavaScript at the bottom, except for Modernizr / Respond. Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
		<script src="{#BASE_URL#}/static/js/modernizr-2.0.6.min.js"></script>
		<link type="text/css" rel="stylesheet" href="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/style.css">
		<script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/page_context.js"></script>
		
		{block "extracss"}{/block}
		{block "extrajs"}{/block}
	</head>
	<body screen_capture_injected="true">
		{block "body"}
			<div id="body-container">
				{block "body-container"}
					<div id="container" style="">
						<header>
							<a id="logo"></a>
							<div id="main-navigation">
								<ul>
									<li>
										<a href="#dashboard" class="active" id="dashboard-m"><span class="dashboard-32" title="Dashboard area">Home</span></a>
									</li>
									<li>
										<a href="#elements" id="elements-m"><span class="files-32" title="Elements area">Menu</span></a>
									</li>
									<li>
										<a href="#forms" id="forms-m"><span class="forms-32" title="Forms area">Services</span></a>
									</li>
									<li>
										<a href="#file" id="file-m"><span class="file-32" title="File manager area">Feedback</span></a>
									</li>
									<li>
										<a href="#charts" id="charts-m"><span class="charts-32" title="Charts area">Brochures</span></a>
									</li>
								</ul>
							</div>
							<div id="profile">
								<div id="user-data">
									Welcome: John Doe
									<br>
									name@domain.com
								</div>
								<div class="clearfix"></div>
								<div id="user-notifications">
									<ul>
										<li>
											<a class="notifications-16 tt-top-center"><span class="notification">2</span></a>
										</li>
										<li>
											<a class="messages-16 tt-top-center"><span class="notification">3</span></a>
										</li>
										<li>
											<a class="settings-16 tt-top-center"></a>
										</li>
										<li>
											<a class="profile-16 tt-top-center"></a>
										</li>
										<li>
											<a href="#login" id="logout" class="logout-16 tt-top-center">logout</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</header>
						<div id="main" role="main">
							{block "main"}
								<div id="sub-navigation">
									{block "main"}
										<div id="navigation-search">
											<form>
												<input type="text" name="search" id="search" placeholder="Search" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
											</form>
										</div>
										<ul>
											<li>
												<a class="tt-top-center">7</a><span>new tickets</span>
											</li>
											<li>
												<a class="blue tt-top-center">12</a><span>new tasks</span>
											</li>
											<li>
												<a class="green tt-top-center">3</a><span>completed milestones</span>
											</li>
										</ul>
										<a class="comment-16 tt-top-center" id="show-modal">modal</a>
										<a class="info-16 tt-top-center" id="add-notify">notifications</a>
										<div class="clearfix"></div>
									{/block}
								</div>
								<div id="main-container">
									{block "main-container"}
										<div id="body-section" style="">
											<div id="left-menu">
												{block "left-menu"}
													<ul>
														<li class="menu-trigger">
															<a href="#" class="overview-16" id="c-overview">Overview</a>
														</li>
													</ul>
												{/block}
												<div class="clearfix"></div>
											</div>
											<div id="content-container">
												{block "content-container"}
													<div id="content">
														{block "content"}
															
														{/block}
													</div>
												{/block}
											</div>
											<div class="clearfix"></div>
										</div>
									{/block}
								</div>
							{/block}
						</div>
						{block "footer"}
							<footer>
								<span>
								</span>
							</footer>
						{/block}
					</div>
					<!--! end of #container -->
				{/block}
			</div>
		{/block}
		
		<!-- JavaScript at the bottom for fast page loading -->
		<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/mylibs/excanvas.min.js"></script><![endif]-->
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery-1.6.2.min.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery-ui-1.8.16.custom.min.js"></script>
		
		
		<!-- scripts -->
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/elfinder.min.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.flot.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.flot.pie.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.flot.resize.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.flot.stack.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.flot.crosshair.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.dataTables.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.tools.min.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/fullcalendar.min.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.gritter.min.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.simplemodal.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.autogrowtextarea.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.wysiwyg.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/wysiwyg.image.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/wysiwyg.link.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/wysiwyg.table.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.idTabs.min.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.validate.min.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/chosen.jquery.min.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.jqtransform.js"></script>
		<script language="javascript" type="text/javascript" src="{#BASE_URL#}/static/js/jquery.ba-hashchange.min.js"></script>
		<script defer="" src="{#BASE_URL#}/static/js/init.js"></script>
		<!-- end scripts-->
		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
		chromium.org/developers/how-tos/chrome-frame-getting-started -->
		<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<![endif]-->
	</body>
</html>