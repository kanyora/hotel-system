{extends "common.tpl"}

{block "content"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		Id: {$notification->id}
	</p>
	<p>
		Number Plate: {$notification->number_plate}
	</p>
{/block}