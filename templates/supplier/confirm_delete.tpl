{extends "common.tpl"}

{block "content"}
	<form action="." method="POST">
		Are you sure you want to delete this supplier?
		<input type="submit" value="Yes"/>
		<a href="{#BASE_URL#}/suppliers/">No</a>
	</form>
{/block}