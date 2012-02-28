{extends "base.tpl"}

{block "right"}
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
					<a href="{#BASE_URL#}/categories/{$category->id}/">View</a> |
					<a href="{#BASE_URL#}/admin/categories/{$category->id}/edit/">Edit</a> |
					<a href="{#BASE_URL#}/admin/categories/{$category->id}/delete/">Remove</a>
				</td>
			</tr>
		{/foreach}
	</table>
	<button onclick="window.location='{#BASE_URL#}/admin/categories/add/'">Add Category</button>
{/block}