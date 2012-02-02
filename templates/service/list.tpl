{extends "base.tpl"}

{block "body"}
	<H2>Services:</H2>
	<table>
		<tr>
			<th>Id</th>
			<th>Service Type</th>
		</tr>
		{foreach $services as $service}
			<tr>
				<td>{$service->id}</td>
				<td>{$service->service_type}</td>
				<td>
					<a href="{#BASE_URL#}/services/{$service->id}/">R</a> |
					<a href="{#BASE_URL#}/services/edit/{$service->id}/">U</a> |
					<a href="{#BASE_URL#}/services/delete/{$service->id}/">D</a>
				</td>
			</tr>
		{/foreach}
	</table>
{/block}