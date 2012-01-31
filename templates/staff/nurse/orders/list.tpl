{extends "base.tpl"}

{block "body"}
	<H2>{block "header"}Orders:{/block}</H2>
	<ul>
		{foreach $orders as $order}
		    <li>{$order->id} - {$order->status} - {$order->notify_customer}</li>
		{/foreach}
	</ul>
{/block}