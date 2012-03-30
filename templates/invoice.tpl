<table>
	<tr>
		<td colspan="4"><h1>M.O.R.S Invoice</h1></td>
	</tr>
	<tr>
		<td colspan="4">
			<i>Invoice For Order Reference: <b>{$order->reference}</b></i>
			<br />
			<span><b>Location:</b> {$order->location}, </span> 
			<span><b>Phone Number:</b> {$order->phone_number}</span>
		</td>
	</tr>
</table>
<br />
<table style="width: 100%">
	<tr>
		<td>
			<h4><u>Dishes</u></h4>
		</td>
	</tr>
	{foreach $order->ownOrderitem as $orderitem}
		<tr>
			<td>{$orderitem->quantity} {$orderitem->dish->name} at KES. {$orderitem->dish->price}/= &nbsp;&nbsp;&nbsp; <em style="font-size: 80%">Subtotal: {$orderitem->dish->price * $orderitem->quantity}/=</em></td>
		</tr>
	{foreachelse}
		<tr>
			<td>No Ordered Dishes</td>
		</tr>
	{/foreach}
	<tr>
		<td>
			<span style="float: right; font-size: 90%; font-weight: bold">Total: {$total}</span>
		</td>
	</tr>
</table>
