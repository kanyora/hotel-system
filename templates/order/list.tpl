{extends "base.tpl"}

{block "right"}
	<div class="content">
		<H2>Orders:</H2>
		{if $orders}
			<table>
				<tr>
					<th>Id</th>
					<th>Actions</th>
				</tr>
				{foreach $orders as $order}
					<tr>	
						<td>{$order->id}</td>
						<td>
							<a href="{#BASE_URL#}/orders/{$order->id}/">R</a> |
							<a href="{#BASE_URL#}/admin/orders/{$order->id}/delete/">D</a>
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