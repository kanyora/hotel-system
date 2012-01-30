{extends "base.tpl"}

{block "body"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		First Name: {$stock_personel->first_name}
	</p>
	<p>
		Last Name: {$stock_personel->last_name}
	</p>
	<p>
		Speciality: {$stock_personel->speciality}
	</p>
	<p>
		Notes: {$stock_personel->notes}
	</p>
{/block}