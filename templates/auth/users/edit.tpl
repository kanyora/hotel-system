{extends "base.tpl"}

{block "body"}
	<h2>Edit User</h2>
	<form method="POST" action=".">
		<input type="hidden" name="user[type]" value="user" />
		<p>
			<label for="id_username">Username:</label>
			<input type="text" name="user[username]" value="{$user->username}" />
		</p>
		<p>
			<label for="id_email">Email:</label>
			<input id="id_email" type="text" name="user[email]" value="{$user->email}" />
		</p>
		<p>
			<label for="id_is_active">Is Active:</label>
			<input id="id_is_active" type="checkbox" name="user[is_active]" value="{$user->is_active}"/>
		</p>
		<p>
			<input type="submit" value="Edit">
		</p>
	</form>
{/block}