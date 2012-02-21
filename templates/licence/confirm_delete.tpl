{extends "base.tpl"}

{block "body"}
	<form action="." method="POST">
		Are you sure you want to delete this vehicle?
		<input type="submit" value="Yes"/>
		<a href="{#BASE_URL#}/vehicles/">No</a>
	</form>
{/block}