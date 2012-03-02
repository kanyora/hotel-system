{extends "base.tpl"}

{block "right"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<h1>Order Details</h1>
	<p>
		<b>Reference No:</b> {$order->reference}
	</p>
	<p>
		<b>Ordered By:</b> {$order->user->username}
	</p>
	<p>
		<b>Location:</b> {$order->location}
	</p>
	<br/>
	<b>Order Items:</b>
	<ul>
		{foreach $order->ownOrderitem as $orderitem}
			<li>
				{$orderitem->dish->name} ({$orderitem->quantity})
			</li>
		{foreachelse}
			<li>No Order items</li>
		{/foreach}
	</ul>
	<a class="submit" href="{#BASE_URL#}/orders/attend/">Attend to Order</a>
{/block}