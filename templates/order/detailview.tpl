{extends "shop_base.tpl"}

{block "dishes"}
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