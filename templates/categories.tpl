{extends "shop_base.tpl"}

{block "title"}All Categories{/block}

{block "dishes"}
	{if $request->user->belongsToGroups('admin')}
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
					{if $request->user->belongsToGroups('admin')}
						<td>
							<a href="{#BASE_URL#}/categories/{$category->id}/">View</a> |
							<a href="{#BASE_URL#}/admin/categories/{$category->id}/edit/">Edit</a> |
							<a href="{#BASE_URL#}/admin/categories/{$category->id}/delete/">Remove</a>
						</td>
					{/if}
				</tr>
			{/foreach}
		</table>
		{if $request->user->belongsToGroups('admin')}
			<button onclick="window.location='{#BASE_URL#}/admin/categories/add/'">Add Category</button>
		{/if}
	{else}
		<ol>
			{foreach $categories as $category}
				<li style="clear:both">
					<a href="{#BASE_URL#}/categories/{$category->id}/dishes/">{$category->name}</a>
				</li>
			{/foreach}
		</ol>
	{/if}
{/block}