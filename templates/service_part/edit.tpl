{extends "base.tpl"}

{block "body"}
	<h2>Edit Service Part:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="service_part[type]" value="servicePart" />
		<p>
			<label for="id_part_no">Part No:</label>
			<input type="text" name="service_part[number]" value="{$service_part->number}" />
		</p>
		<p>
			<label for="id_part_name">Name:</label>
			<input type="text" name="service_part[name]" value="{$service_part->name}" />
		</p>
		<p>
			<label for="id_part_cost">Cost:</label>
			<input type="text" name="service_part[cost]" value="{$service_part->cost}" />
		</p>
		<p>
			<label for="id_service_part_type">Description:</label>
			<input type="text" name="service_part[description]" value="{$service_part->description}" />
		</p>
		<p>
			<input type="submit" value="Add">
		</p>
	</form>
{/block}