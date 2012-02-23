{extends "base.tpl"}

{block "body"}
	<form method="POST" action=".">
		<input type="hidden" name="category[type]" value="category" />
		<p>
			<label>Name</label>
			<input type="text" name="category[name]" value="{$category->name}"/>
		</p>
		<p>
			<input type="submit" value="Save">
		</p>
	</form>
{/block}