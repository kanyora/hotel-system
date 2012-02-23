{extends "base.tpl"}

{block "content"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		Id: {$vehicle->id}
	</p>
	<p>
		Name: {$vehicle->number_plate}
	</p>
	<p>
		Category: {$vehicle->vehicle_type}
	</p>
	<p>
		Price: {$vehicle->date_purchased}
	</p>
	<p>
		Details: {$vehicle->details}
	</p>
{/block}