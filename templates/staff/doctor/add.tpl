{extends "base.tpl"}

{block "body"}
	<form method="POST" action=".">
		<input type="hidden" name="staff[type]" value="doctor" />
		<p>
			<label for="id_first_name">First Name:</label>
			<input type="text" name="staff[first_name]" value="" />
		</p>
		<p>
			<label for="id_last_name">Last Name:</label>
			<input type="text" name="staff[last_name]" value="" />
		</p>
		<p>
			<label for="id_speciality">Speciality:</label>
			<input type="text" name="staff[speciality]" value="" />
		</p>
		<p>
			<label for="id_speciality">Notes:</label>
			<textarea name="staff[notes]"></textarea>
		</p>
		<p>
			<label for="id_speciality">User:</label>
			<select name="user">
				<option value='null'>----</option>
				{html_options options=$users selected=$doctor->ownUser[0]->id}
			</select>
		</p>
		<p>
			<input type="submit" value="Add">
		</p>
	</form>
{/block}