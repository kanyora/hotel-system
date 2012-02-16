{extends "common.tpl"}

{block "content"}	
	<h2>Add Service Request:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="service_request[type]" value="serviceRequest" />
		<section>
			<label for="id_part_name">Initial date:</label>
			<div>
				<input type="text" name="service_request[initial_date]" value="" />
			</div>
		</section>
		<section>
			<label for="id_part_cost">Due date:</label>
			<div>
			<input type="text" name="service_request[due_date]" value="" />
			</div>
		</section>
		<section>
			<label for="id_services">Services:</label>
			<div>
				<select name="service_request[service]" size="{$services|@count}">
					<option value="null">----</option>
					{foreach $services as $service}
						<option value="{$service->id}">{$service->service_type}</option>
					{/foreach}
				</select>
			</div>
		</section>
		<section>
			<label for="id_service_parts">Service Part:</label>
			<div>
				<select name="service_request[servicePart]" size="{$service_parts|@count}">
					<option value="null">----</option>
					{foreach $service_parts as $service_part}
						<option value="{$service_part->id}">{$service_part->name}</option>
					{/foreach}
				</select>
			</div>
		</section>
		<section>
			<input type="submit" class="submit button primary" value="Add">
		</section>
	</form>
{/block}