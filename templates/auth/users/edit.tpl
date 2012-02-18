{extends "common.tpl"}

{block "content"}
	<h2>Edit User</h2>
	<form method="POST" action=".">
		<input type="hidden" name="user[type]" value="user" />
		<section>
			<label for="id_username">Username:</label>
			<div>
				<input type="text" name="user[username]" value="{$user->username}" />
			</div>
		</section>
		<section>
			<label for="id_email">Email:</label>
			<div>
				<input id="id_email" type="text" name="user[email]" value="{$user->email}" />
			</div>
		</section>
		<section>
			<label for="id_is_active">Is Active:</label>
			<div>
				<input id="id_is_active" type="checkbox" name="user[is_active]" value="{$user->is_active}"/>
			</div>
		</section>
		<section>
			<label for="id_groups">Groups:</label>
			<div>
				<select multiple name="groups[]" size="{$groups|@count}">
					{foreach $groups as $group}
						<option value="{$group->id}"
							{if isset($related_groups[$group->id])}
								selected="selected"
							{/if}
						>{$group->name}</option>
					{/foreach}
				</select>
			</div>
		</section>
		<section>
			<input type="submit" value="Save Changes" class="submit button primary">
		</section>
	</form>
{/block}