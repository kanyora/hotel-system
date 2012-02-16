{extends "vehicle/base_vehicle.tpl"}

{block "content"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		Id: {$service_part->id}
	</p>
	<p>
		Name: {$service_part->name}
	</p>
	<p>
		Part No: {$service_part->number}
	</p>
	<p>
		Cost: {$service_part->cost}
	</p>
	<p>
		Description: {$service_part->description}
	</p>
{/block}