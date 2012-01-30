{extends "base.tpl"}

{block "body"}
	<H2>stock_personels:</H2>
	<ul>
		{foreach $stock_personels as $stock_personel}
		    <li>{$stock_personel->first_name} {$stock_personel->last_name}</li>
		{/foreach}
	</ul>
{/block}