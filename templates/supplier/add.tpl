{extends "supplier/base_supplier.tpl"}
	
{block "content"}
	<h2>Add Supplier:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="supplier[type]" value="supplier" />
		<section>
			<label for="id_number_plate">Name:</label>
			<div>
				<input type="text" name="supplier[name]" value="" />
			</div>
		</section>
		<section>
			<label for="id_number_plate">Phone Number:</label>
			<div>
				<input type="text" name="supplier[phone_number]" value="" />
			</div>
		</section>
		<section>
			<label for="id_date_purchased">Email:</label>
			<div>
				<input type="text" name="supplier[email]" value="" />
			</div>
		</section>
		<section>
			<label for="id_supplier_type">Address:</label>
			<div>
				<input type="text" name="supplier[address]" value="" />
			</div>
		</section>
		<section>
			<label for="id_details">Location:</label>
			<div>
				<textarea name="supplier[location]"></textarea>
			</div>
		</section>
		<section>
			<input type="submit" value="Add Supplier" class="submit button primary">
		</section>
	</form>
{/block}