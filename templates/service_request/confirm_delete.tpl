{extends "base.tpl"}

{block "body"}
	<form action="." method="POST">
		Are you sure you want to delete this service request?
		<input type="submit" value="Yes"/>
		<a href="{#BASE_URL#}/service-requests/">No</a>
	</form>
{/block}