{extends "common.tpl"}

{block "content"}
	<h2>Edit User</h2>
	<form method="POST" action=".">
		<table>
			<input type="hidden" name="user[type]" value="user" />
		<p>
				<td>
					<label for="id_username">Username:</label>
			<input type="text" name="user[username]" value="{$user->username}" />
		</p>
		<p>
			<tr>
				<td>
					<label for="id_email">Email:</label>
			<input id="id_email" type="text" name="user[email]" value="{$user->email}" />
		</p>
		<p>
			<tr>
				<td>
					<label for="id_is_active">Is Active:</label>
			<input id="id_is_active" type="checkbox" name="user[is_active]" value="{$user->is_active}"/>
		</p>
		<p>
			<tr>
				<td>
					<label for="id_groups">Groups:</label>
				<td>
			<select multiple name="groups[]" size="{$groups|@count}">
				{foreach $groups as $group}
					<option value="{$group->id}"
						{if isset($related_groups[$group->id])}
							selected="selected"
						{/if}
					>{$group->name}</option>
				{/foreach}
			</select>
			
		</p>
		<p>
				<td>
			<input type="submit" value="Edit">
		</p>
			</tr>
		</table>
	</form>
{/block}