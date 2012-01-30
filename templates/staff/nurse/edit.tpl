{extends "base.tpl"}

{block "body"}
	<form method="POST" action=".">
		<input type="hidden" name="staff[id]" value="{$nurse->id}" />
		<input type="hidden" name="staff[type]" value="nurse" />
		<p>
			<label for="id_first_name">First Name:</label>
			<input type="text" name="staff[first_name]" value="{$nurse->first_name}" />
		</p>
		<p>
			<label for="id_last_name">Last Name:</label>
			<input type="text" name="staff[last_name]" value="{$nurse->last_name}" />
		</p>
		<p>
			<label for="id_speciality">Speciality:</label>
			<input type="text" name="staff[speciality]" value="{$nurse->speciality}" />
		</p>
		<p>
			<label for="id_speciality">Notes:</label>
			<textarea name="staff[notes]">{$nurse->notes}</textarea>
		</p>
		<p>
			<label for="id_speciality">User:</label>
			<select name="user">
				<option value='null'>----</option>
				{html_options options=$users selected=$nurse->ownUser[0]->id}
			</select>
		</p>
		<p>
			<input type="submit" value="Edit">
		</p>
	</form>
{/block}