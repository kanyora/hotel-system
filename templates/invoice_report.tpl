<table>
	<tr>
		<td colspan="4"><center><h1>M.O.R.S Invoice</h1></center></td>
	</tr>
	<tr>
		<td colspan="4">
			<i>Listing all the {$status} Orders</i> 
		</td>
	</tr>
</table>
<br />
<table border="1" style="width: 100%">
	<tr>
		<td>Ordered by</td>
		<td>Reference No</td>
		<td>Phone Number</td>
		<td>Location</td>
	</tr>
	{foreach $orders as $order}
		<tr>
			<td>{$order->user->username}</td>
			<td>{$order->reference}</td>
			<td>{$order->phone_number}</td>
			<td>{$order->location}</td>
		</tr>
	{/foreach}
</table>