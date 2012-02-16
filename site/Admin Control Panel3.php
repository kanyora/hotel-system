<!DOCTYPE html>
<!-- saved from url=(0035)http://denk-groot.nl/admincp/tables -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Admin Control Panel</title>
		<link rel="stylesheet" href="http://denk-groot.nl/admincp/css/reset.css">
		<link rel="stylesheet" href="http://denk-groot.nl/admincp/css/visualize.css">
		<link rel="stylesheet" href="http://denk-groot.nl/admincp/css/datatables.css">
		<link rel="stylesheet" href="http://denk-groot.nl/admincp/css/buttons.css">
		<link rel="stylesheet" href="http://denk-groot.nl/admincp/css/checkboxes.css">
		<link rel="stylesheet" href="http://denk-groot.nl/admincp/css/inputtags.css">
		<link rel="stylesheet" href="http://denk-groot.nl/admincp/css/main.css">
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="/admincp/css/ie.css" />
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript" async="" src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/ga.js"></script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-11172759-12']);
			_gaq.push(['_trackPageview']); (function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>
		<script id="__isTpiViewExists"></script>
	</head>
	<body>
		<ul id="notifications"></ul>
		<div id="gradient">
			<div id="stars">
				<div id="container">
					<header>
						<!-- Logo -->
						<h1 id="logo">Admin Control Panel</h1>
						<!-- User info -->
						<div id="userinfo">
							<img src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/avatar.png" alt="Bram Jetten">
							<div class="intro">
								Welcome Bram
								<br>
								You have <a href="http://denk-groot.nl/admincp/tables#">3 new messages</a>
							</div>
						</div>
					</header>
					<!-- The application "window" -->
					<div id="application">
						<!-- Primary navigation -->
						<nav id="primary">
							<ul>
								<li>
									<a href="http://denk-groot.nl/admincp/"> <span class="icon dashboard"></span> Dashboard </a>
								</li>
								<li>
									<a href="http://denk-groot.nl/admincp/forms"> <span class="icon pencil"></span> Forms </a>
								</li>
								<li class="current">
									<a href="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/Admin Control Panel3.htm"> <span class="icon tables"></span> DataTables </a>
								</li>
								<li>
									<a href="http://denk-groot.nl/admincp/charts"> <span class="icon chart"></span> <span class="badge">4</span> Charts </a>
								</li>
								<li>
									<a href="http://denk-groot.nl/admincp/notifications"> <span class="icon modal"></span> Notifcations </a>
								</li>
								<li>
									<a href="http://denk-groot.nl/admincp/typography"> <span class="icon newspaper"></span> Typography </a>
								</li>
								<li>
									<a href="http://denk-groot.nl/admincp/buttons"> <span class="icon anchor"></span> Icons/buttons </a>
								</li>
							</ul>
							<input type="text" id="search" placeholder="Realtime search..." autocomplete="off">
						</nav>
						<!-- Secondary navigation -->
						<nav id="secondary">
							<ul>
								<li class="current">
									<a href="http://denk-groot.nl/admincp/tables#maintab">Main tab</a>
								</li>
								<li>
									<a href="http://denk-groot.nl/admincp/tables#secondtab">Explanation tabs</a>
								</li>
								<li>
									<a href="http://denk-groot.nl/admincp/tables#thirdtab">Optional third tab</a>
								</li>
							</ul>
						</nav>
						<!-- The content -->
						<section id="content">
							<div class="tab" id="maintab" style="display: block; ">
								<h2>Interactive DataTables</h2>
								<div class="column left third">
									<h3>Instructions</h3>
									<p>
										The only thing you have to do to create this interactive table is add the following class to a table.
									</p>
									<pre>&lt;table class="datatable"&gt;</pre>
								</div>
								<div class="column right twothird">
									<div class="dataTables_wrapper">
										<div class="dataTables_length">
											<label>Show
												<div class="cmf-skinned-select" style="width: 100px; height: 0px; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-size: 13px; font-family: Arial; font-style: normal; position: relative; ">
													<div class="cmf-skinned-text" style="height: 3px; width: 91px; opacity: 100; overflow-x: hidden; overflow-y: hidden; position: absolute; text-indent: 0px; z-index: 1; top: 0px; left: 0px; ">
														10
													</div>
													<select size="1" style="opacity: 0; position: relative; z-index: 100; ">
														<option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
													</select>
												</div> entries</label>
										</div>
										<div class="dataTables_filter">
											<label>
												<input type="text">
											</label>
										</div>
										<table class="vehicle">
											<thead>
												<tr>
													<th class="sorting_asc" rowspan="1" colspan="1" style="width: 106px; ">Number Plate</th>
													<th class="sorting" rowspan="1" colspan="1" style="width: 131px; ">Model</th>
													<th class="sorting" rowspan="1" style="width: 157px; ">Purchase </th>
													<th class="sorting" rowspan="1" colspan="1" style="width: 157px; ">Email</th>
													<th class="sorting" rowspan="1" colspan="1" style="width: 205px; ">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd">
													<td class=" sorting_1">Another Guy</td>
													<td>His real name</td>
													<td>&nbsp;</td>
													<td>hisfake@email.com</td>
													<td><span class="button-group"> 
														<a href="http://denk-groot.nl/admincp/tables#" class="button icon edit">Edit</a> 
														<a href="http://denk-groot.nl/admincp/tables#" class="button icon remove danger">Remove</a> 
														</span>
													</td>
												</tr>
												<tr class="even">
													<td class=" sorting_1">Another Guy</td>
													<td>His real name</td>
													<td>&nbsp;</td>
													<td>hisfake@email.com</td>
													<td><span class="button-group"> <a href="http://denk-groot.nl/admincp/tables#" class="button icon edit">Edit</a> <a href="http://denk-groot.nl/admincp/tables#" class="button icon remove danger">Remove</a> </span></td>
												</tr>
												<tr class="odd">
													<td class=" sorting_1">Another Guy</td>
													<td>His real name</td>
													<td>&nbsp;</td>
													<td>hisfake@email.com</td>
													<td><span class="button-group"> <a href="http://denk-groot.nl/admincp/tables#" class="button icon edit">Edit</a> <a href="http://denk-groot.nl/admincp/tables#" class="button icon remove danger">Remove</a> </span></td>
												</tr>
												<tr class="even">
													<td class=" sorting_1">Interfico</td>
													<td>Bram Jetten</td>
													<td>&nbsp;</td>
													<td>mail@bramjetten.nl</td>
													<td><span class="button-group"> <a href="http://denk-groot.nl/admincp/tables#" class="button icon edit">Edit</a> <a href="http://denk-groot.nl/admincp/tables#" class="button icon remove danger">Remove</a> </span></td>
												</tr>
												<tr class="odd">
													<td class=" sorting_1">Interfico</td>
													<td>Bram Jetten</td>
													<td>&nbsp;</td>
													<td>mail@bramjetten.nl</td>
													<td><span class="button-group"> <a href="http://denk-groot.nl/admincp/tables#" class="button icon edit">Edit</a> <a href="http://denk-groot.nl/admincp/tables#" class="button icon remove danger">Remove</a> </span></td>
												</tr>
												<tr class="even">
													<td class=" sorting_1">Interfico</td>
													<td>Bram Jetten</td>
													<td>&nbsp;</td>
													<td>mail@bramjetten.nl</td>
													<td><span class="button-group"> <a href="http://denk-groot.nl/admincp/tables#" class="button icon edit">Edit</a> <a href="http://denk-groot.nl/admincp/tables#" class="button icon remove danger">Remove</a> </span></td>
												</tr>
												<tr class="odd">
													<td class=" sorting_1">Thedude</td>
													<td>The Big Leboski</td>
													<td>&nbsp;</td>
													<td>realbig@dude.com</td>
													<td><span class="button-group"> <a href="http://denk-groot.nl/admincp/tables#" class="button icon edit">Edit</a> <a href="http://denk-groot.nl/admincp/tables#" class="button icon remove danger">Remove</a> </span></td>
												</tr>
												<tr class="even">
													<td class=" sorting_1">Thedude</td>
													<td>The Big Leboski</td>
													<td>&nbsp;</td>
													<td>realbig@dude.com</td>
													<td><span class="button-group"> <a href="http://denk-groot.nl/admincp/tables#" class="button icon edit">Edit</a> <a href="http://denk-groot.nl/admincp/tables#" class="button icon remove danger">Remove</a> </span></td>
												</tr>
												<tr class="odd">
													<td class=" sorting_1">Thedude</td>
													<td>The Big Leboski</td>
													<td>&nbsp;</td>
													<td>realbig@dude.com</td>
													<td><span class="button-group"> <a href="http://denk-groot.nl/admincp/tables#" class="button icon edit">Edit</a> <a href="http://denk-groot.nl/admincp/tables#" class="button icon remove danger">Remove</a> </span></td>
												</tr>
												<tr class="even">
													<td class=" sorting_1">What up</td>
													<td>This is my name</td>
													<td>&nbsp;</td>
													<td>email@email.com</td>
													<td><span class="button-group"> <a href="http://denk-groot.nl/admincp/tables#" class="button icon edit">Edit</a> <a href="http://denk-groot.nl/admincp/tables#" class="button icon remove danger">Remove</a> </span></td>
												</tr>
											</tbody>
										</table>
										<div class="dataTables_info">
											Showing 1 to 10 of 12 entries
										</div>
										<div class="dataTables_paginate paging_two_button">
											<div class="paginate_disabled_previous" title="Previous"></div><div class="paginate_enabled_next" title="Next"></div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="tab" id="secondtab" style="display: none; ">
								<h2>Explanation tabs</h2>
								<p>
									Your secondary menu should look something like this:
								</p>
								<pre>&lt;nav id="secondary"&gt;
  &lt;ul&gt;
    &lt;li class="current"&gt;&lt;a href="#maintab"&gt;Main tab&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#secondtab"&gt;Explanation tabs&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#thirdtab"&gt;Optional third tab&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</pre>
								<p>
									If you use class="current" on a &lt;li&gt;-tag, that tab will be the default.
								</p>
								<p>
									In your content area, you must use the following structure:
								</p>
								<pre>&lt;div class="tab" id="maintab"&gt;
&lt;/div&gt;

&lt;div class="tab" id="secondtab"&gt;
&lt;/div&gt;

&lt;div class="tab" id="thirdtab"&gt;
&lt;/div&gt;
</pre>
							</div>
							<div class="tab" id="thirdtab" style="display: none; ">
								<h2>Third tab</h2>
							</div>
						</section>
					</div>
					<footer id="copyright">
						Theme design &amp; development by Bram Jetten in 2011
					</footer>
				</div>
			</div>
		</div>
		<!-- JavaScript -->
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/excanvas.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/jquery.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/jquery.livesearch.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/jquery.visualize.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/jquery.datatables.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/jquery.placeholder.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/jquery.selectskin.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/jquery.checkboxes.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/jquery.wymeditor.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/jquery.validate.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/jquery.inputtags.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/notifications.js"></script>
		<script src="file:///C|/Users/user/Desktop/site/Admin Control Panel3_files/application.js"></script>
		<div id="livesearch" style="display: none; "></div>
	</body>
</html>