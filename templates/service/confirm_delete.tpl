{extends "base.tpl"}

{block "body"}
	<form action="." method="POST">
		Are you sure you want to delete this service?
		<input type="submit" value="Yes"/>
		<a href="{#BASE_URL#}/services/">No</a>
	</form>
{/block}