{extends "common.tpl"}

{block "content"}
	<h2>Add Vehicle:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="vehicle[type]" value="vehicle" />
		<p>
			<label for="id_number_plate">Number Plate:</label>
			<input type="text" name="vehicle[number_plate]" value="" />
		</p>
		<p>
			<label for="id_date_purchased">Date Purchased:</label>
			<input type="text" name="vehicle[date_purchased]" value="" />
		</p>
		<p>
			<label for="id_vehicle_type">Vehicle Type:</label>
			<input type="text" name="vehicle[vehicle_type]" value="" />
		</p>
		<p>
			<label for="id_details">Details:</label>
			<textarea name="vehicle[details]"></textarea>
		</p>
		<p>
			<input type="submit" value="Add">
		</p>
	</form>
{/block}