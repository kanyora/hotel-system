{extends "base.tpl"}

{block "body"}
	<form method="POST" action=".">
		<input type="hidden" name="staff[id]" value="{$stock_personel->id}" />
		<input type="hidden" name="staff[type]" value="stock_personel" />
		<p>
			<label for="id_first_name">First Name:</label>
			<input type="text" name="staff[first_name]" value="{$stock_personel->first_name}" />
		</p>
		<p>
			<label for="id_last_name">Last Name:</label>
			<input type="text" name="staff[last_name]" value="{$stock_personel->last_name}" />
		</p>
		<p>
			<label for="id_speciality">Speciality:</label>
			<input type="text" name="staff[speciality]" value="{$stock_personel->speciality}" />
		</p>
		<p>
			<label for="id_speciality">Notes:</label>
			<textarea name="staff[notes]">{$stock_personel->notes}</textarea>
		</p>
		<p>
			<label for="id_speciality">User:</label>
			<select name="user">
				<option value='null'>----</option>
				{html_options options=$users selected=$stock_personel->ownUser[0]->id}
			</select>
		</p>
		<p>
			<input type="submit" value="Edit">
		</p>
	</form>
{/block}