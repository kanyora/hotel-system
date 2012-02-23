{extends "base.tpl"}

{block "body"}
	<H2>Vehicles:</H2>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Category</th>
			<th>Price</th>
			<th>Actions</th>
		</tr>
		{foreach $dishes as $dish}
			<tr>
				<td>{$dish->id}</td>
				<td>{$dish->name}</td>
				<td>{$dish->category}</td>
				<td>{$dish->price}</td>
				<td>
					<a href="{#BASE_URL#}/dishes/{$dish->id}/">R</a> |
					<a href="{#BASE_URL#}/dishes/{$dish->id}/edit/">U</a> |
					<a href="{#BASE_URL#}/dishes/{$dish->id}/delete/">D</a>
				</td>
			</tr>
		{/foreach}
	</table>
{/block}