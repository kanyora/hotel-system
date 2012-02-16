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
											<li> <a href="{#BASE_URL#}/dashboard/"> <span class="icon dashboard"></span> Dashboard </a> </li>
											<li> <a href="{#BASE_URL#}/vehicles/"> <span class="icon"></span> Vehicles </a> </li>
											<li> <a href="{#BASE_URL#}/services/"> <span class="icon"></span> Services </a> </li>
											<li> <a href="{#BASE_URL#}/suppliers/"> <span class="icon"></span> Suppliers </a> </li>
											<li> <a href="{#BASE_URL#}/notifications/"> <span class="icon"></span> <span class="badge">4</span>Notifications </a> </li>
											<li class="current"> <a href="{#BASE_URL#}"> <span class="icon"></span> Forms </a> </li>
											<li> <a href="{#BASE_URL#}/"> <span class="icon"></span> Icons/buttons </a> </li>
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