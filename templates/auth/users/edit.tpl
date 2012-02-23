{extends "base.tpl"}

{block "content"}
	<h2>Edit User</h2>
	<form method="POST" action=".">
		<table>
			<input type="hidden" name="user[type]" value="user" />
			<tr>
				<td>
					<label for="id_username">Username:</label>
				</td>
				<td>
					<input type="text" class="text" name="user[username]" value="{$user->username}" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="id_email">Email:</label>
				</td>
				<td>
					<input id="id_email" class="text" type="text" name="user[email]" value="{$user->email}" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="id_is_active">Is Active:</label>
				</td>
				<td>
					<input id="id_is_active" class="text" type="checkbox" name="user[is_active]" value="{$user->is_active}"/>
				</td>
			</tr>
			<tr>
				<td>
					<label for="id_groups">Groups:</label>
				</td>
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
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input type="submit" value="Edit">
				</td>
			</tr>
		</table>
	</form>
{/block}