<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">
	<!--<![endif]-->
	<head>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>{block "title"}{/block}</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta name="description" content="">
			<style type="text/css">
				@import url("{#BASE_URL#}/static/css/style.css");
				@import url("{#BASE_URL#}/static/css/forms.css");
				@import url("{#BASE_URL#}/static/css/forms-btn.css");
				@import url("{#BASE_URL#}/static/css/menu.css");
				@import url('{#BASE_URL#}/static/css/style_text.css');
				@import url("{#BASE_URL#}/static/css/datatables.css");
				@import url("{#BASE_URL#}/static/css/fullcalendar.css");
				@import url("{#BASE_URL#}/static/css/pirebox.css");
				@import url("{#BASE_URL#}/static/css/modalwindow.css");
				@import url("{#BASE_URL#}/static/css/statics.css");
				@import url("{#BASE_URL#}/static/css/tabs-toggle.css");
				@import url("{#BASE_URL#}/static/css/system-message.css");
				@import url("{#BASE_URL#}/static/css/tooltip.css");
				@import url("{#BASE_URL#}/static/css/wizard.css");
				@import url("{#BASE_URL#}/static/css/wysiwyg.css");
				@import url("{#BASE_URL#}/static/css/wysiwyg.modal.css");
				@import url("{#BASE_URL#}/static/css/wysiwyg-editor.css");
				@import url("{#BASE_URL#}/static/css/handheld.css");
			</style>

			{block "extracss"}{/block}
			{block "extrajs"}{/block}
		</head>
		<body screen_capture_injected="true">
			<div id="change">
				<a href="{#BASE_URL#}/"><img src="{#BASE_URL#}/static/images/fixed.png" alt=""></a>
			</div>
			<div id="wrapper">
				<div id="container">
					<div class="hide-btn top"></div>
					<div class="hide-btn center"></div>
					<div class="hide-btn bottom"></div>
					<div id="top">
						<h1 id="logo"><a href="./"></a></h1>
						<div id="labels">
							<ul>
								<li>
									<a href="#" class="user"><span class="bar">Welcome John Do</span></a>
								</li>
								<li>
									<a href="#" class="settings"></a>
								</li>
								<li class="subnav">
									<a href="#" class="messages"></a>
									<ul>
										<li>
											<a href="#">New message</a>
										</li>
										<li>
											<a href="#">Inbox</a>
										</li>
										<li>
											<a href="#">Outbox</a>
										</li>
										<li>
											<a href="#">Trash</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#" class="logout"></a>
								</li>
							</ul>
						</div>
						<div id="menu">
							<ul class="sf-js-enabled">
								<li class="current">
									<a href="dashboard.html">Dashboard</a>
								</li>
								<li>
									<a href="forms.html">Forms</a>
								</li>
								<li class="">
									<a href="tables.html">Tables</a>
									<ul style="float: none; width: 15em; display: none; visibility: hidden; " class="sf-js-enabled">
										<li style="float: left; width: 100%; white-space: normal; ">
											<a href="#" style="float: none; width: auto; ">First item</a>
										</li>
										<li class="current" style="float: left; width: 100%; white-space: normal; ">
											<a href="#" style="float: none; width: auto; ">Second item</a>
											<ul style="left: 15em; float: none; width: 15em; display: none; visibility: hidden; " class="sf-js-enabled">
												<li style="float: left; width: 100%; white-space: normal; ">
													<a href="#" style="float: none; width: auto; ">First item</a>
												</li>
												<li class="current" style="float: left; width: 100%; white-space: normal; ">
													<a href="#" style="float: none; width: auto; ">Second item</a>
												</li>
												<li style="float: left; width: 100%; white-space: normal; ">
													<a href="#" style="float: none; width: auto; ">Third item</a>
												</li>
												<li style="float: left; width: 100%; white-space: normal; ">
													<a href="#" style="float: none; width: auto; ">Fourth item</a>
												</li>
											</ul>
										</li>
										<li style="float: left; width: 100%; white-space: normal; ">
											<a href="#" style="float: none; width: auto; ">Third item</a>
										</li>
										<li style="float: left; width: 100%; white-space: normal; ">
											<a href="#" style="float: none; width: auto; ">Fourth item</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="charts.html">Charts</a>
								</li>
								<li>
									<a href="uielements.html">UI Elements</a>
								</li>
								<li>
									<a href="typography.html">Typography</a>
								</li>
								<li>
									<a href="gallery.html">Gallery</a>
								</li>
								<li>
									<a href="boxgrid.html">Boxgrid</a>
								</li>
								<li>
									<a href="icons.html">Icons</a>
								</li>
								<li>
									<a href="plain.html">Plain</a>
								</li>
							</ul>
						</div>
					</div>
					<div id="left">
						<div class="box search">
							<div class="content">
								<form action="">
									<input type="text" value="" placeholder="Search">
									<button type="submit"></button>
								</form>
							</div>
						</div>
						<div class="box submenu">
							<div class="content">
								<ul>
									<li>
										<a href="#">First item</a>
									</li>
									<li class="current">
										<a href="#">Second item</a>
										<ul>
											<li>
												<a href="#">First item</a>
											</li>
											<li class="current">
												<a href="#">Second item</a>
											</li>
											<li>
												<a href="#">Third item</a>
											</li>
											<li>
												<a href="#">Fourth item</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Third item</a>
									</li>
									<li>
										<a href="#">Fourth item</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box statics">
							<div class="content">
								<ul>
									<li>
										<h2>Statistics</h2>
									</li>
									<li>
										Total pages
										<div class="info red">
											<span>999</span>
										</div>
									</li>
									<li>
										Comments
										<div class="info blue">
											<span>654</span>
										</div>
									</li>
									<li>
										Users
										<div class="info green">
											<span>7</span>
										</div>
									</li>
									<li>
										Last update
										<div class="info black">
											<span>01.20.2012</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="box togglemenu">
							<div class="content">
								<ul class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons" role="tablist">
									<li class="ui-accordion-li-fix">
										<h2>Toggle Menu</h2>
									</li>
									<li class="title ui-accordion-li-fix ui-accordion-header ui-helper-reset ui-state-default ui-state-active ui-corner-top" role="tab" aria-expanded="true" aria-selected="true" tabindex="0">
										<span class="ui-icon ui-icon-triangle-1-s"></span>Toggle item 01
									</li>
									<li class="content ui-accordion-li-fix ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" role="tabpanel">
										Aenean vulputate condime pellent
										que. Sed ornare semper purus
										sollicitudin. Vivamus nisi dui,
										pharetra ac condimentum id.
									</li>
									<li class="title ui-accordion-li-fix ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1">
										<span class="ui-icon ui-icon-triangle-1-e"></span>Toggle item 02
									</li>
									<li class="content ui-accordion-li-fix ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none; ">
										Aenean vulputate condime pellent
										que. Sed ornare semper purus
										sollicitudin. Vivamus nisi dui,
										pharetra ac condimentum id.
									</li>
									<li class="title ui-accordion-li-fix ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1">
										<span class="ui-icon ui-icon-triangle-1-e"></span>Toggle item 03
									</li>
									<li class="content ui-accordion-li-fix ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none; ">
										Aenean vulputate condime pellent
										que. Sed ornare semper purus
										sollicitudin. Vivamus nisi dui,
										pharetra ac condimentum id.
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="right">
						<div class="btn-box">
							<div class="content">
								<a href="#" class="item"> <img src="{#BASE_URL#}/static/images/dashboard.png" alt="Dashboard"> <span>Dashboard</span> Back to the dashboard </a>
								<a href="#" class="item"> <img src="{#BASE_URL#}/static/images/messages.png" alt="Messages"> <span>Messages</span> Go to your inbox </a>
								<a href="#" class="item"> <img src="{#BASE_URL#}/static/images/settings.png" alt="Settings"> <span>Settings</span> Change your settings </a>
								<a href="#" class="item"> <img src="{#BASE_URL#}/static/images/support.png" alt="Support"> <span>Support</span> Need some support? </a>
								<a href="#" class="item"> <img src="{#BASE_URL#}/static/images/statics.png" alt="Statics"> <span>Statics</span> See your statistics </a>
							</div>
						</div>
						<div class="section">
							<div class="box">
								<div class="title">
									Chart <span class="hide"></span>
								</div>
								<div class="content">
									<div class="chart-caption">
										Statistics February
									</div>
									<div class="space"></div>
									<div class="flot-graph" style="width: 100%; height: 200px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; position: relative; ">
										<canvas class="base" width="902" height="200"></canvas><canvas class="overlay" width="902" height="200" style="position: absolute; left: 0px; top: 0px; "></canvas>
										<div class="tickLabels" style="font-size:smaller">
											<div class="xAxis x1Axis" style="color:#545454">
												<div class="tickLabel" style="position:absolute;text-align:center;left:10px;top:193px;width:29px">
													1
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:39px;top:193px;width:29px">
													2
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:68px;top:193px;width:29px">
													3
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:97px;top:193px;width:29px">
													4
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:126px;top:193px;width:29px">
													5
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:155px;top:193px;width:29px">
													6
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:184px;top:193px;width:29px">
													7
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:213px;top:193px;width:29px">
													8
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:243px;top:193px;width:29px">
													9
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:272px;top:193px;width:29px">
													10
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:301px;top:193px;width:29px">
													11
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:330px;top:193px;width:29px">
													12
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:359px;top:193px;width:29px">
													13
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:388px;top:193px;width:29px">
													14
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:417px;top:193px;width:29px">
													15
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:447px;top:193px;width:29px">
													16
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:476px;top:193px;width:29px">
													17
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:505px;top:193px;width:29px">
													18
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:534px;top:193px;width:29px">
													19
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:563px;top:193px;width:29px">
													20
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:592px;top:193px;width:29px">
													21
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:621px;top:193px;width:29px">
													22
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:650px;top:193px;width:29px">
													23
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:680px;top:193px;width:29px">
													24
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:709px;top:193px;width:29px">
													25
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:738px;top:193px;width:29px">
													26
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:767px;top:193px;width:29px">
													27
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:796px;top:193px;width:29px">
													28
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:825px;top:193px;width:29px">
													29
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:854px;top:193px;width:29px">
													30
												</div>
												<div class="tickLabel" style="position:absolute;text-align:center;left:884px;top:193px;width:29px">
													31
												</div>
											</div>
											<div class="yAxis y1Axis" style="color:#545454">
												<div class="tickLabel" style="position:absolute;text-align:right;top:181px;right:884px;width:18px">
													0
												</div>
												<div class="tickLabel" style="position:absolute;text-align:right;top:154px;right:884px;width:18px">
													50
												</div>
												<div class="tickLabel" style="position:absolute;text-align:right;top:128px;right:884px;width:18px">
													100
												</div>
												<div class="tickLabel" style="position:absolute;text-align:right;top:102px;right:884px;width:18px">
													150
												</div>
												<div class="tickLabel" style="position:absolute;text-align:right;top:76px;right:884px;width:18px">
													200
												</div>
												<div class="tickLabel" style="position:absolute;text-align:right;top:50px;right:884px;width:18px">
													250
												</div>
												<div class="tickLabel" style="position:absolute;text-align:right;top:24px;right:884px;width:18px">
													300
												</div>
												<div class="tickLabel" style="position:absolute;text-align:right;top:-2px;right:884px;width:18px">
													350
												</div>
											</div>
										</div>
										<div class="legend">
											<table style="position:absolute;top:4px;right:4px;; margin:-27px 0 0 -5px;font-size:11px;color:#545454">
												<tbody>
													<tr>
														<td class="legendColorBox">
														<div style="border:1px solid none;padding:1px">
															<div style="width:4px;height:0;border:5px solid rgb(225, 0, 0);overflow:hidden"></div>
														</div></td><td class="legendLabel">unique visitors</td><td class="legendColorBox">
														<div style="border:1px solid none;padding:1px">
															<div style="width:4px;height:0;border:5px solid rgb(0, 0, 0);overflow:hidden"></div>
														</div></td><td class="legendLabel">pageviews</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="section">
							<div class="half">
								<div class="box">
									<div class="title">
										Recent comments <span class="hide"></span>
									</div>
									<div class="content">
										<ul class="comments">
											<li>
												<a href="#"><img src="{#BASE_URL#}/static/images/user-photo.gif" alt="User"></a>
												<a href="#"><b>John do</b></a> says:
												<br>
												Vestibulum at metus mauris, sed iaculis.
												Vestibulum hendrerit mattis blandit.
											</li>
											<li>
												<a href="#"><img src="{#BASE_URL#}/static/images/user-photo.gif" alt="User"></a>
												<a href="#"><b>John do</b></a> says:
												<br>
												Vestibulum at metus mauris, sed iaculis.
												Vestibulum hendrerit mattis blandit.
											</li>
											<li>
												<a href="#"><img src="{#BASE_URL#}/static/images/user-photo.gif" alt="User"></a>
												<a href="#"><b>John do</b></a> says:
												<br>
												Vestibulum at metus mauris, sed iaculis.
												Vestibulum hendrerit mattis blandit.
											</li>
											<li>
												<a href="#"><img src="{#BASE_URL#}/static/images/user-photo.gif" alt="User"></a>
												<a href="#"><b>John do</b></a> says:
												<br>
												Vestibulum at metus mauris, sed iaculis.
												Vestibulum hendrerit mattis blandit.
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="half">
								<div class="box">
									<div class="title">
										Quick page insert <span class="hide"></span>
									</div>
									<div class="content">
										<form action="">
											<div class="row">
												<label>Title</label>
												<div class="right">
													<input type="text" value="">
												</div>
											</div>
											<div class="row">
												<label>Your tags</label>
												<div class="right">
													<input type="text" value="">
												</div>
											</div>
											<div class="row">
												<label>Page content</label>
												<div class="right">
													<textarea rows="" cols="" style="height : 144px;"></textarea>
</div>											</div>
											<div class="row">
												<label></label>
												<div class="right">
													<button type="submit">
														<span>Sumbit</span>
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="section">
							<div class="box">
								<div class="title">
									When was somewone online <span class="hide"></span>
								</div>
								<div class="content">
									<div class="dataTables_wrapper">
										<div>
											<div class="dataTables_filter">
												<label>
													<input type="text" placeholder="Search">
												</label>
											</div>
										</div>
										<table cellspacing="0" cellpadding="0" border="0" class="all">
											<thead>
												<tr>
													<th class="sorting_asc" rowspan="1" colspan="1" style="width: 215px; ">Username</th><th class="sorting" rowspan="1" colspan="1" style="width: 138px; ">Duration</th><th class="sorting" rowspan="1" colspan="1" style="width: 239px; ">Date</th><th class="sorting" rowspan="1" colspan="1" style="width: 221px; ">Last visit page</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd">
													<td class=" sorting_1">Average Joe</td>
													<td>39 min</td>
													<td>23 January 2012</td>
													<td><a href="#">Contact form</a></td>
												</tr>
												<tr class="even">
													<td class=" sorting_1">Hong Gildong</td>
													<td>3 min</td>
													<td>23 January 2012</td>
													<td><a href="#">Login</a></td>
												</tr>
												<tr class="odd">
													<td class=" sorting_1">Israel Israeli</td>
													<td>7 min</td>
													<td>23 January 2012</td>
													<td><a href="#">Our Company</a></td>
												</tr>
												<tr class="even">
													<td class=" sorting_1">Jane Doe</td>
													<td>23 min</td>
													<td>23 January 2012</td>
													<td><a href="#">Dashboard</a></td>
												</tr>
												<tr class="odd">
													<td class=" sorting_1">Joe Shmoe</td>
													<td>45 min</td>
													<td>23 January 2012</td>
													<td><a href="#">My statics</a></td>
												</tr>
												<tr class="even">
													<td class=" sorting_1">John Do</td>
													<td>10 min</td>
													<td>23 January 2012</td>
													<td><a href="#">Dashboard</a></td>
												</tr>
												<tr class="odd">
													<td class=" sorting_1">John Smith</td>
													<td>3 hours</td>
													<td>23 January 2012</td>
													<td><a href="#">Message inbox</a></td>
												</tr>
												<tr class="even">
													<td class=" sorting_1">Luther Blissett</td>
													<td>41 min</td>
													<td>23 January 2012</td>
													<td><a href="#">My profile</a></td>
												</tr>
												<tr class="odd">
													<td class=" sorting_1">Nomen nescio</td>
													<td>56 sec</td>
													<td>23 January 2012</td>
													<td><a href="#">Build a page</a></td>
												</tr>
												<tr class="even">
													<td class=" sorting_1">Tommy Atkins</td>
													<td>1 hour</td>
													<td>23 January 2012</td>
													<td><a href="#">Settings</a></td>
												</tr>
											</tbody>
										</table>
										<div>
											<div class="dataTables_paginate paging_full_numbers">
												<span class="first paginate_button paginate_button_disabled">First</span><span class="previous paginate_button paginate_button_disabled">Previous</span><span><span class="paginate_active">1</span></span><span class="next paginate_button paginate_button_disabled">Next</span><span class="last paginate_button paginate_button_disabled">Last</span>
											</div>
											<div class="dataTables_length">
												<label>
													<select size="1" class="entries" style="display: none; ">
														<option value="5">5</option><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
													</select><a class="ui-selectmenu ui-widget ui-state-default ui-corner-all entries ui-selectmenu-dropdown" id="undefined-button" role="button" href="#" aria-haspopup="true" aria-owns="undefined-menu"><span class="ui-selectmenu-status">10</span><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span></a></label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="piro_overlay" style="display: none; opacity: 0.5; "></div>
			<table class="piro_html ui-draggable" cellpadding="0" cellspacing="0" style="display: none; left: 424.5px; top: -181.5px; ">
				<tbody>
					<tr>
						<td class="h_t_l"></td><td class="h_t_c" title="drag me!!"></td><td class="h_t_r"></td>
					</tr>
					<tr>
						<td class="h_c_l"></td><td class="h_c_c">
						<div class="piro_loader" title="close">
							<span></span>
						</div>
						<div class="resize">
							<div class="nav_container" style="display: none; ">
								<a href="#prev" class="piro_prev" title="previous"></a><a href="#next" class="piro_next" title="next"></a>
								<div class="piro_prev_fake">
									prev
								</div>
								<div class="piro_next_fake">
									next
								</div><div class="piro_close" title="close"></div>
							</div><div class="caption" style="display: none; "></div><div class="div_reg"></div>
						</div></td><td class="h_c_r"></td>
					</tr>
					<tr>
						<td class="h_b_l"></td><td class="h_b_c"></td><td class="h_b_r"></td>
					</tr>
				</tbody>
			</table>
			<ul class="ui-selectmenu-menu ui-widget ui-widget-content ui-corner-bottom entries ui-selectmenu-menu-dropdown" aria-hidden="true" role="listbox" aria-labelledby="undefined-button" id="undefined-menu" aria-activedescendant="ui-selectmenu-item-486" style="left: 338px; top: 1395px; ">
				<li role="presentation" style="">
					<a href="#" tabindex="-1" role="option" aria-selected="false">5</a>
				</li>
				<li role="presentation" class="ui-selectmenu-item-selected">
					<a href="#" tabindex="-1" role="option" aria-selected="true" id="ui-selectmenu-item-486">10</a>
				</li>
				<li role="presentation">
					<a href="#" tabindex="-1" role="option" aria-selected="false">25</a>
				</li>
				<li role="presentation">
					<a href="#" tabindex="-1" role="option" aria-selected="false">50</a>
				</li>
				<li role="presentation" class="ui-corner-bottom">
					<a href="#" tabindex="-1" role="option" aria-selected="false">100</a>
				</li>
			</ul>
			<!-- scripts -->
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery-1.7.1.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.backgroundPosition.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.placeholder.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.ui.1.8.17.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.ui.select.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.ui.spinner.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/superfish.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/supersubs.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.datatables.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/fullcalendar.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.smartwizard-2.0.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/pirobox.extended.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.tipsy.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.elastic.source.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.customInput.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.validate.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.metadata.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.filestyle.mini.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.filter.input.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.flot.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.flot.pie.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.flot.resize.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.graphtable-0.2.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/jquery.wysiwyg.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/wysiwyg.image.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/wysiwyg.link.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/wysiwyg.table.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/wysiwyg.rmFormat.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/js/costum.js"></script>
			<!-- end scripts-->
			<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
			chromium.org/developers/how-tos/chrome-frame-getting-started -->
			<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<![endif]-->
		</body>
</html>