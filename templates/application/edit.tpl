{extends "common.tpl"}

{block "content"}
	<h2>Edit Supplier:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="supplier[type]" value="supplier" />
		<section>
			<label for="id_number_plate">Name:</label>
			<div>
				<input type="text" name="supplier[name]" value="{$supplier->name}" />
			</div>
		</section>
		<section>
			<label for="id_number_plate">Phone Number:</label>
			<div>
				<input type="text" name="supplier[phone_number]" value="{$supplier->phone_number}" />
			</div>
		</section>
		<section>
			<label for="id_date_purchased">Email:</label>
			<div>
				<input type="text" name="supplier[email]" value="{$supplier->email}" />
			</div>
		</section>
		<section>
			<label for="id_address">Address:</label>
			<div>
				<input type="text" name="supplier[address]" value="{$supplier->address}" />
			</div>
		</section>
		<section>
			<label for="id_location">Location:</label>
			<div>
				<textarea name="supplier[location]">{$supplier->location}</textarea>
			</div>
		</section>
		<section>
			<input type="submit" value="Save Changes"  class="submit button primary">
		</section>
	</form>
{/block}