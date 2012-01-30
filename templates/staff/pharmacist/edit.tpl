{extends "base.tpl"}

{block "body"}
	<form method="POST" action=".">
		<input type="hidden" name="staff[id]" value="{$pharmacist->id}" />
		<input type="hidden" name="staff[type]" value="pharmacist" />
		<p>
			<label for="id_first_name">First Name:</label>
			<input type="text" name="staff[first_name]" value="{$pharmacist->first_name}" />
		</p>
		<p>
			<label for="id_last_name">Last Name:</label>
			<input type="text" name="staff[last_name]" value="{$pharmacist->last_name}" />
		</p>
		<p>
			<label for="id_speciality">Speciality:</label>
			<input type="text" name="staff[speciality]" value="{$pharmacist->speciality}" />
		</p>
		<p>
			<label for="id_speciality">Notes:</label>
			<textarea name="staff[notes]">{$pharmacist->notes}</textarea>
		</p>
		<p>
			<label for="id_speciality">User:</label>
			<select name="user">
				<option value='null'>----</option>
				{html_options options=$users selected=$pharmacist->ownUser[0]->id}
			</select>
		</p>
		<p>
			<input type="submit" value="Edit">
		</p>
	</form>
{/block}