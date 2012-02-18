{extends "common.tpl"}

{block "secondary-navigation"}
	<ul>
		<li> <a href="{#BASE_URL#}/vehicles/"> <span class="icon"></span> Vehicles </a> </li>
		<li class="current"> <a href="{#BASE_URL#}/services/"> <span class="icon"></span> Services </a> </li>
		<li> <a href="{#BASE_URL#}/service-parts/"> <span class="icon"></span> Services Parts </a> </li>
	</ul>
{/block}
