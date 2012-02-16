{extends "vehicle/base_vehicle.tpl"}

{block "content"}
	<h2>Add Service Part:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="service_part[type]" value="servicepart" />
		<section>
			<label for="id_part_no">Part No:</label>
			<div>
				<input type="text" name="service_part[number]" value="" />
			</div>
		</section>
		<section>
			<label for="id_part_name">Name:</label>
			<div>
				<input type="text" name="service_part[name]" value="" />
			</div>
		</section>
		<section>
			<label for="id_part_cost">Cost:</label>
			<div>
				<input type="text" name="service_part[cost]" value="" />
			</div>
		</section>
		<section>
			<label for="id_service_part_type">Description:</label>
			<div>
				<input type="text" name="service_part[description]" value="" />
			</div>
		</section>
		<section>
			<input type="submit" value="Add Item" class="button primary submit">
		</section>
	</form>
{/block}