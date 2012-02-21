{extends "vehicle/base.tpl"}

{block "content"}
	<form method="POST" action=".">
		<input type="hidden" name="vehicle[type]" value="vehicle" />
		<section>
			<label for="id_number_plate">Number Plate:</label>
			<div>
				<input type="text" name="vehicle[number_plate]" value="{$vehicle->number_plate}" />
			</div>
		</section>
		<section>
			<label for="id_date_purchased">Date Purchased:</label>
			<div>
				<input type="text" name="vehicle[date_purchased]" value="{$vehicle->date_purchased}" />
			</div>
		</section>
		<section>
			<label for="id_vehicle_type">Vehicle Type:</label>
			<div>
				<input type="text" name="vehicle[vehicle_type]" value="{$vehicle->vehicle_type}" />
			</div>
		</section>
		<section>
			<label for="id_details">Details:</label>
			<div>
				<textarea name="vehicle[details]">{$vehicle->details}</textarea>
			</div>
		</section>
		<section>
			<input type="submit" value="Save Changes" class="submit button primary">
		</section>
	</form>
{/block}