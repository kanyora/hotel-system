{extends "common.tpl"}

{block "content"}
	<h2>Add Supplier:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="supplier[type]" value="supplier" />
		<p>
			<label for="id_number_plate">Name:</label>
			<input type="text" name="supplier[name]" value="" />
		</p>
		<p>
			<label for="id_number_plate">Phone Number:</label>
			<input type="text" name="supplier[phone_number]" value="" />
		</p>
		<p>
			<label for="id_date_purchased">Email:</label>
			<input type="text" name="supplier[email]" value="" />
		</p>
		<p>
			<label for="id_supplier_type">Address:</label>
			<input type="text" name="supplier[address]" value="" />
		</p>
		<p>
			<label for="id_details">Location:</label>
			<textarea name="supplier[location]"></textarea>
		</p>
		<p>
			<input type="submit" value="Add">
		</p>
	</form>
{/block}