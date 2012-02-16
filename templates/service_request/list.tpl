{extends "common.tpl"}

{block "content"}
	<H2>Service Requests:</H2>
	<table>
		<tr>
			<th>Id</th>
			<th>Vehicle</th>
			<th>Initial date</th>
			<th>Due date</th>
			<th>Service</th>
			<th>Service part</th>
			<th>Actions</th>
		</tr>
		{foreach $service_requests as $service_request}
			<tr>
				<td>{$service_request->id}</td>
				<td>{$service_request->vehicle->number_plate}</td>
				<td>{$service_request->initial_date}</td>
				<td>{$service_request->due_date}</td>
				<td>{$service_request->service->service_type}</td>
				<td>{$service_request->servicepart->name}</td>
				<td>
					{if isset($vehicle)}
						<a href="{#BASE_URL#}/vehicles/{$vehicle->id}/service-requests/{$service_request->id}/">R</a> |
						<a href="{#BASE_URL#}/vehicles/{$vehicle->id}/service-requests/edit/{$service_request->id}/">U</a> |
						<a href="{#BASE_URL#}/vehicles/{$vehicle->id}/service-requests/delete/{$service_request->id}/">D</a>
					{else}
						<a href="{#BASE_URL#}/service-requests/{$service_request->id}/">R</a> |
						<a href="{#BASE_URL#}/service-requests/edit/{$service_request->id}/">U</a> |
						<a href="{#BASE_URL#}service-requests/delete/{$service_request->id}/">D</a>
					{/if}
				</td>
			</tr>
		{/foreach}
	</table>
{/block}