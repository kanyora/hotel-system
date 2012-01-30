{extends "base.tpl"}

{block "body"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		First Name: {$pharmacist->first_name}
	</p>
	<p>
		Last Name: {$pharmacist->last_name}
	</p>
	<p>
		Speciality: {$pharmacist->speciality}
	</p>
	<p>
		Notes: {$pharmacist->notes}
	</p>
{/block}