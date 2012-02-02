{extends "base.tpl"}

{block "body"}
	<H2>Suppliers:</H2>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Number</th>
			<th>Email</th>
			<th>Address</th>
			<th>Location</th>
		</tr>
		{foreach $suppliers as $supplier}
			<tr>
				<td>{$supplier->id}</td>
				<td>{$supplier->name}</td>
				<td>{$supplier->phone_number}</td>
				<td>{$supplier->email}</td>
				<td>{$supplier->address}</td>
				<td>{$supplier->location}</td>
				<td>
					<a href="{#BASE_URL#}/suppliers/{$supplier->id}/">R</a> |
					<a href="{#BASE_URL#}/suppliers/edit/{$supplier->id}/">U</a> |
					<a href="{#BASE_URL#}/suppliers/delete/{$supplier->id}/">D</a>
				</td>
			</tr>
		{/foreach}
	</table>
{/block}