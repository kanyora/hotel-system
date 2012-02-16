{extends "base.tpl"}

{block "body"}
	<ul id="notifications"></ul>
    <div id="gradient">
      	<div id="stars">
        	<div id="container" {block "container-attrs"}{/block}>
		          <header>
		          	{block "header"}
		            	<!-- Logo -->
			            <h1 id="logo">Admin Control Panel</h1>
			            <!-- User info -->
			            <div id="userinfo">
							<img src="/ita/static/images/avatar.png" alt="Bram Jetten"/>
							<div class="intro"> Welcome {$request->user->username}</div><br>
							You have <a href="/ita/forms#">3 notifications</a>
						</div>
					{/block}
		          </header>
					<!-- The application "window" -->
					<div id="application">
						{block "application"}
							{block "navigation"}
								<nav id="primary">
									{block "primary-navigation"}
										<ul>
											<li> <a href="/ita/"> <span class="icon dashboard"></span> Dashboard </a> </li>
											<li class="current"> <a href="/ita/static/Admin Control Panel2.htm"> <span class="icon pencil"></span> Forms </a> </li>
											<li> <a href="/ita/tables"> <span class="icon tables"></span> DataTables </a> </li>
											<li> <a href="/ita/charts"> <span class="icon chart"></span> <span class="badge">4</span> Charts </a> </li>
											<li> <a href="/ita/notifications"> <span class="icon modal"></span> Notifcations </a> </li>
											<li> <a href="/ita/typography"> <span class="icon newspaper"></span> Typography </a> </li>
											<li> <a href="/ita/buttons"> <span class="icon anchor"></span> Icons/buttons </a> </li>
										</ul>
										<input type="text" id="search" placeholder="Realtime search..." autocomplete="off">
									{/block}
								</nav>
								<nav id="secondary">
									{block "secondary-navigation"}
										
									{/block}
								</nav>
							{/block}
							<!-- The content -->
							<section id="content">{block "content"}{/block}</section>
						{/block}
					</div>
					<footer id="copyright">
						{block "footer"}
							Theme design &amp; development by Bram Jetten in 2011
						{/block}
					</footer>
				</div>
			</div>
		</div>
{/block}