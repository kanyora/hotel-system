<html>
	<!--<![endif]-->
	<head>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>{block "title"}{/block}</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta name="description" content="">
			<style type="text/css">
				@import url("{#BASE_URL#}/static/admin/css/style.css");
				@import url("{#BASE_URL#}/static/admin/css/forms.css");
				@import url("{#BASE_URL#}/static/admin/css/forms-btn.css");
				@import url("{#BASE_URL#}/static/admin/css/menu.css");
				@import url('{#BASE_URL#}/static/admin/css/style_text.css');
				@import url("{#BASE_URL#}/static/admin/css/datatables.css");
				@import url("{#BASE_URL#}/static/admin/css/fullcalendar.css");
				@import url("{#BASE_URL#}/static/admin/css/pirebox.css");
				@import url("{#BASE_URL#}/static/admin/css/modalwindow.css");
				@import url("{#BASE_URL#}/static/admin/css/statics.css");
				@import url("{#BASE_URL#}/static/admin/css/tabs-toggle.css");
				@import url("{#BASE_URL#}/static/admin/css/system-message.css");
				@import url("{#BASE_URL#}/static/admin/css/tooltip.css");
				@import url("{#BASE_URL#}/static/admin/css/wizard.css");
				@import url("{#BASE_URL#}/static/admin/css/wysiwyg.css");
				@import url("{#BASE_URL#}/static/admin/css/wysiwyg.modal.css");
				@import url("{#BASE_URL#}/static/admin/css/wysiwyg-editor.css");
				@import url("{#BASE_URL#}/static/admin/css/handheld.css");
			</style>

			{block "extracss"}{/block}
			{block "extrajs"}{/block}
		</head>
		<body>
			{block "body"}
			<div id="wrapper">
				<div id="container">
					<div class="hide-btn top"></div>
					<div class="hide-btn center"></div>
					<div class="hide-btn bottom"></div>
					<div id="top">
						<h1><a href="./">M.O.R.S</a></h1>
						<div id="labels">
							<ul>
								<li>
									<a href="#" class="user"><span class="bar">Welcome {$request->user->username}</span></a>
								</li>
								<li>
									<a href="{#BASE_URL#}/logout/" class="logout"></a>
								</li>
							</ul>
						</div>
						<div id="menu">
							<ul class="sf-js-enabled">
								<li class="">
									<a href="{#BASE_URL#}/orders/">Orders</a>
								</li>
								<li class="">
									<a href="{#BASE_URL#}/admin/users/">Users</a>
								</li>
								<li class="">
									<a href="{#BASE_URL#}/admin/dishes/">Dishes</a>
								</li>
								<li class="">
									<a href="{#BASE_URL#}/admin/categories/">Categories</a>
								</li>
								<li class="">
									<a href="{#BASE_URL#}/admin/reports/">Reports</a>
								</li>
							</ul>
						</div>
					</div>
					<div id="left">
						<div class="box search">
							<div class="content">
								<form action="{#BASE_URL#}/search/">
									<input type="text" name="q" placeholder="Search">
									<button type="submit"></button>
								</form>
							</div>
						</div>
						<div class="box submenu">
							<div class="content">
								<ul>
									{block "left-submenu"}
										{if isset($categories)}
											{foreach $categories as $category }
												<li class="current">
													<a href="{#BASE_URL#}/categories/{$category->id}/dishes/">{$category->name}</a>
												</li>
											{/foreach}
										{/if}
									{/block}
								</ul>
							</div>
						</div>
					</div>
					<div id="right">
						{block "right"}
						{/block}
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
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery-1.7.1.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.backgroundPosition.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.placeholder.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.ui.1.8.17.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.ui.select.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.ui.spinner.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/superfish.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/supersubs.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.datatables.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/fullcalendar.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.smartwizard-2.0.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/pirobox.extended.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.tipsy.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.elastic.source.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.customInput.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.validate.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.metadata.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.filestyle.mini.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.filter.input.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.flot.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.flot.pie.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.flot.resize.min.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.graphtable-0.2.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/jquery.wysiwyg.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/wysiwyg.image.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/wysiwyg.link.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/wysiwyg.table.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/wysiwyg.rmFormat.js"></script>
			<script type="text/javascript" src="{#BASE_URL#}/static/admin/js/costum.js"></script>
			<!-- end scripts-->
			<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
			chromium.org/developers/how-tos/chrome-frame-getting-started -->
			<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<![endif]-->
			{/block}
		</body>
</html>