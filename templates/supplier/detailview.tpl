{extends "base.tpl"}

{block "body"}
	{if isset($edit_success)}
		{$edit_success}
	{/if}
	<p>
		Id: {$supplier->id}
	</p>
	<p>
		Name: {$supplier->name}
	</p>
	<p>
		Phone Number: {$supplier->phone_number}
	</p>
	<p>
		Email: {$supplier->email}
	</p>
	
	<p>
		Address: {$supplier->address}
	</p>
	<p>
		Location: {$supplier->location}
	</p>
{/block}