{extends "vehicle/base_vehicle.tpl"}

{block "content"}
	<form action="." method="POST">
		Are you sure you want to delete this service part?
		<input type="submit" value="Yes"/>
		<a href="{#BASE_URL#}/services/">No</a>
	</form>
{/block}