{extends "base.tpl"}

{block "body"}
	<h2>Supplier:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="supplier[type]" value="supplier" />
		<p>
			<label for="id_number_plate">Name:</label>
			<input type="text" name="supplier[name]" value="{$supplier->name}" />
		</p>
		<p>
			<label for="id_number_plate">Phone Number:</label>
			<input type="text" name="supplier[phone_number]" value="{$supplier->phone_number}" />
		</p>
		<p>
			<label for="id_date_purchased">Email:</label>
			<input type="text" name="supplier[email]" value="{$supplier->email}" />
		</p>
		<p>
			<label for="id_address">Address:</label>
			<input type="text" name="supplier[address]" value="{$supplier->address}" />
		</p>
		<p>
			<label for="id_location">Location:</label>
			<textarea name="supplier[location]">{$supplier->location}</textarea>
		</p>
		<p>
			<input type="submit" value="Edit">
		</p>
	</form>
{/block}