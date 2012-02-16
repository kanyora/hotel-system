{extends "common.tpl"}

{block "content"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		Id: {$service->id}
	</p>
	<p>
		Service Type: {$service->service_type}
	</p>
{/block}