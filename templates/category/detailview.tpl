{extends "base.tpl"}

{block "body"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		Id: {$category->id}
	</p>
	<p>
		Name: {$category->name}
	</p>
{/block}