{extends "base.tpl"}

{block "body"}
	<h2>Add Service Request:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="service_request[type]" value="serviceRequest" />
		<p>
			<label for="id_part_name">Initial date:</label>
			<input type="text" name="service_request[initial_date]" value="" />
		</p>
		<p>
			<label for="id_part_cost">Due date:</label>
			<input type="text" name="service_request[due_date]" value="" />
		</p>
		<p>
			<label for="id_services">Services:</label>
			<select name="service_request[service]" size="{$services|@count}">
				<option value="null">----</option>
				{foreach $services as $service}
					<option value="{$service->id}">{$service->service_type}</option>
				{/foreach}
			</select>
		</p>
		<p>
			<label for="id_service_parts">Service Part:</label>
			<select name="service_request[servicePart]" size="{$service_parts|@count}">
				<option value="null">----</option>
				{foreach $service_parts as $service_part}
					<option value="{$service_part->id}">{$service_part->name}</option>
				{/foreach}
			</select>
		</p>
		<p>
			<input type="submit" value="Add">
		</p>
	</form>
{/block}