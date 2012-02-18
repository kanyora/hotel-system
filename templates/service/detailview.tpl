{extends "service/base.tpl"}

{block "content"}
	<h2>Service: {$service->service_type}</h2>
	<div>
		{if isset($edit_success)}
			{$edit_success}
		{/if}
		<section>
			<label>Id:</label> {$service->id}
		</section>
		<section>
			<label>Service Type:</label> {$service->service_type}
		</section>
	</div>
{/block}