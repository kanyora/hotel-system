{extends "base.tpl"}

{block "body"}
	<H2>Services Parts:</H2>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Cost</th>
			<th>Description</th>
		</tr>
		{foreach $service_parts as $service_part}
			<tr>
				<td>{$service_part->id}</td>
				<td>{$service_part->name}</td>
				<td>{$service_part->cost}</td>
				<td>{$service_part->description}</td>
				<td>
					<a href="{#BASE_URL#}/service-parts/{$service_part->id}/">R</a> |
					<a href="{#BASE_URL#}/service-parts/edit/{$service_part->id}/">U</a> |
					<a href="{#BASE_URL#}/service-parts/delete/{$service_part->id}/">D</a>
				</td>
			</tr>
		{/foreach}
	</table>
{/block}