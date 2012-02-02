{extends "base.tpl"}

{block "body"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		Id: {$service_request->id}
	</p>
	<p>
		Vehicle: {$service_request->vehicle->number_plate}
	</p>
	<p>
		Initial date: {$service_request->initial_date}
	</p>
	<p>
		Due Date: {$service_request->due_date}
	</p>
	<p>
		Service type: {$service_request->service->service_type}
	</p>
	<p>
		Service part: {$service_request->servicepart->name}
	</p>
{/block}