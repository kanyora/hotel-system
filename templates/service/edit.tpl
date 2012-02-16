{extends "common.tpl"}

{block "content"}
	<h2>Edit Service:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="service[type]" value="service" />
		<section>
			<label for="id_service_type">Service Type:</label>
			<div>
				<input type="text" name="service[service_type]" value="{$service->service_type}" />
			</div>
		</section>
		<section>
			<input type="submit" value="Save Changes" class="button primary submit">
		</section>
	</form>
{/block}