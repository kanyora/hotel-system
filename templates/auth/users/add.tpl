{extends "common.tpl"}

{block "content"}
	<h2>Add User</h2>
	<form method="POST" action=".">
		<input type="hidden" name="user[type]" value="user" />
		<section>
			<label for="id_username">Username:</label>
			<div>
				<input type="text" name="user[username]" value="" />
			</div>
		</section>
		<section>
			<label for="id_password">Password:</label>
			<div>
				<input id="id_password" type="password" name="user[password]" value="" />
			</div>
		</section>
		<section>
			<label for="id_email">Email:</label>
			<div>
				<input id="id_email" type="text" name="user[email]" value="" />
			</div>
		</section>
		<section>
			<label for="id_is_active">Is Active:</label>
			<div>
				<div class="column left">
					<input id="id_is_active" type="checkbox" name="user[is_active]"/>
					<label for="checkbox1" class="prettyCheckbox checkbox list"><span class="holderWrap" style="width: 17px; height: 17px; "><span class="holder" style="width: 17px; "></span></span>Checkbox 1</label>
				</div>
			</div>
		</section>
		<section>
			<label for="id_groups">Groups:</label>
			<div>
				<select multiple name="groups[]" size="{$groups|@count}">
					{foreach $groups as $group}
						<option value="{$group->id}">{$group->name}</option>
					{/foreach}
				</select>
				<br />
				<input type="submit" value="Add">
			</div>
		</section>
	</form>
{/block}