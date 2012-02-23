{extends "base.tpl"}

{block "body"}
	<H2>Categories:</H2>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Actions</th>
		</tr>
		{foreach $categories as $category}
			<tr>	
				<td>{$category->id}</td>
				<td>{$category->name}</td>
				<td>
					<a href="{#BASE_URL#}/categories/{$category->id}/">R</a> |
					<a href="{#BASE_URL#}/categories/{$category->id}/edit/">U</a> |
					<a href="{#BASE_URL#}/categories/{$category->id}/delete/">D</a>
				</td>
			</tr>
		{/foreach}
	</table>
{/block}