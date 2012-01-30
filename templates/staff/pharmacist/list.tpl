{extends "base.tpl"}

{block "body"}
	<H2>pharmacists:</H2>
	<ul>
		{foreach $pharmacists as $pharmacist}
		    <li>{$pharmacist->first_name} {$pharmacist->last_name}</li>
		{/foreach}
	</ul>
{/block}