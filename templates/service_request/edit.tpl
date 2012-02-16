{extends "common.tpl"}

{block "content"}
	<h2>Edit Service Request:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="service_request[type]" value="servicerequest" />
		<section>
			<label for="id_initial_date">Initial date:</label>
			<div>
				<input type="text" name="service_request[initial_date]" value="{$service_request->initial_date}" />
			</div>
		</section>
		<section>
			<label for="id_due_date">Due date:</label>
			<div>
				<input type="text" name="service_request[due_date]" value="{$service_request->due_date}" />
			</div>
		</section>
		<section>
			<label for="id_services">Services:</label>
			<div>
				<select name="service_request[service]" size="{$services|@count}" style="opacity: 0; position: relative; z-index: 100; ">
					<option value="null">----</option>
					{foreach $services as $service}
						<option value="{$service->id}" {if $service_request->service eq $service}selected="selected"{/if}>
							{$service->service_type}
						</option>
					{/foreach}
				</select>
			</div>
		</section>
		<section>
			<label for="id_service_parts">Service Part:</label>
			<div>
				<select name="service_request[servicepart]" size="{$service_parts|@count}" style="opacity: 0; position: relative; z-index: 100; ">
					<option value="null">----</option>
					{foreach $service_parts as $service_part}
						<option value="{$service_part->id}" {if $service_request->servicepart eq $service_part}selected="selected"{/if}>
							{$service_part->name}
						</option>
					{/foreach}
				</select>
			</div>
		</section>
		<section>
			<input type="submit" value="Save Changes" class="button primary submit">
		</section>
	</form>
{/block}