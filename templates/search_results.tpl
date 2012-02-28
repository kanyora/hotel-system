{extends "base.tpl"}

{block "right"}
	<div class="btn-box">
		<div class="content">
			<H2>Results:</H2>
			<ul>
				{foreach $results as $result}
				    <li><a href="{$result->get_absolute_url()}">{$result->name}</a></li>
				{foreachelse}
					<li>No Results found</li>
				{/foreach}
			</ul>
		</div>
	</div>
{/block}