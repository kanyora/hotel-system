{extends "base.tpl"}

{block "content"}
	<H2>Results:</H2>
	<ul>
		{foreach $results as $result}
		    <li><a href="{$result->get_absolute_url()}">{$result->name}</a></li>
		{/foreach}
	</ul>
{/block}