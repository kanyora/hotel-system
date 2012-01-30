{extends "base.tpl"}

{block "body"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		First Name: {$doctor->first_name}
	</p>
	<p>
		Last Name: {$doctor->last_name}
	</p>
	<p>
		Speciality: {$doctor->speciality}
	</p>
	<p>
		Notes: {$doctor->notes}
	</p>
{/block}