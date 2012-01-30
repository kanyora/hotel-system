{extends "base.tpl"}

{block "body"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		First Name: {$nurse->first_name}
	</p>
	<p>
		Last Name: {$nurse->last_name}
	</p>
	<p>
		Speciality: {$nurse->speciality}
	</p>
	<p>
		Notes: {$nurse->notes}
	</p>
{/block}