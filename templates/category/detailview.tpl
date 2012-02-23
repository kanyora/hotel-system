{extends "base.tpl"}

{block "content"}
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