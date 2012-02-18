{extends "service/base.tpl"}

{block "content"}
	<h2>Add Service:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="service[type]" value="service" />
		<section>
			<label for="id_service_type">Service Type:</label>
			<div><input type="text" name="service[service_type]"/></div>
		</section>
		<section>
			<input type="submit" value="Add Service" class="button primary submit">
		</section>
	</form>
{/block}