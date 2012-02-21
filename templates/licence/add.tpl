{extends "base.tpl"}

{block "body"}
	<h2>New Licence Application: </h2>
	<form method="POST" action=".">
		<input type="hidden" name="licence[type]" value="{$db_type}" />
		{block 'form-items'}
		{/block}
		<p>
			<input type="submit" value="Save">
		</p>
	</form>
{/block}