{extends "base.tpl"}

{block "right"}
	<form action="." method="POST">
		Are you sure you want to delete this {$object_type}?
		<input type="submit" value="Yes"/>
		<a href="{#BASE_URL#}/admin/dashboard/">No</a>
	</form>
{/block}