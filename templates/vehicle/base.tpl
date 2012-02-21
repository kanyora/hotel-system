{extends "common.tpl"}

{block "secondary-navigation"}
	<ul>
		<li> <a class="current" href="{#BASE_URL#}/vehicles/"> <span class="icon"></span> Vehicles </a> </li>
		<li> <a href="{#BASE_URL#}/services/"> <span class="icon"></span> Services </a> </li>
		<li> <a href="{#BASE_URL#}/service-parts/"> <span class="icon"></span> Services Requests </a> </li>
	</ul>
{/block}