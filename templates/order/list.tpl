{extends "base.tpl"}

{block "right"}
	<div class="content">
		<H2>Orders:</H2>
		{if $orders}
			<table>
				<tr>
					<th>User</th>
					<th>Reference</th>
					<th>Location</th>
				</tr>
				{foreach $orders as $order}
					<tr>	
						<td>{$order->user->username}</td>
						<td>{$order->reference}</td>
						<td>{$order->location}</td>
						<td>
							<a href="{#BASE_URL#}/orders/{$order->id}/">View</a>
						</td>
					</tr>
				{foreachelse}
					<tr><td colspan="2">No Orders Found</td></tr>
				{/foreach}
			</table>
		{else}
			No Orders Found
		{/if}
	</div>
{/block}