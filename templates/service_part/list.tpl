{extends "service_part/base.tpl"}

{block "content"}
	<H2>Services Parts:</H2>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Cost</th>
			<th>Description</th>
			<th>Actions</th>
		</tr>
		{foreach $service_parts as $service_part}
			<tr>
				<td>{$service_part->id}</td>
				<td>{$service_part->name}</td>
				<td>{$service_part->cost}</td>
				<td>{$service_part->description}</td>
				<td>
					<span class="button-group">
						<a href="{#BASE_URL#}/service-parts/edit/{$service_part->id}/" class="button icon edit">Edit</a>
						<a href="{#BASE_URL#}/service-parts/delete/{$service_part->id}/" class="button icon remove danger">Remove</a>
					</span>
				</td>
			</tr>
		{/foreach}
	</table>
{/block}