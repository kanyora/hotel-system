{extends "base.tpl"}

{block "right"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		Reference No: {$order->reference}
	</p>
	<p>
		Items: {$order->name}
	</p>
{/block}