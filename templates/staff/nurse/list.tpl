{extends "base.tpl"}

{block "body"}
	<H2>Nurses:</H2>
	<ul>
		{foreach $nurses as $nurse}
		    <li>{$nurse->first_name} {$nurse->last_name}</li>
		{/foreach}
	</ul>
{/block}