{extends "base.tpl"}

{block "body"}
	<h2>Add Service Part:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="service_part[type]" value="servicePart" />
		<p>
			<label for="id_part_no">Part No:</label>
			<input type="text" name="service_part[number]" value="" />
		</p>
		<p>
			<label for="id_part_name">Name:</label>
			<input type="text" name="service_part[name]" value="" />
		</p>
		<p>
			<label for="id_part_cost">Cost:</label>
			<input type="text" name="service_part[cost]" value="" />
		</p>
		<p>
			<label for="id_service_part_type">Description:</label>
			<input type="text" name="service_part[description]" value="" />
		</p>
		<p>
			<input type="submit" value="Add">
		</p>
	</form>
{/block}