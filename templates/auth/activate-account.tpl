{extends "auth/auth_layout.tpl"}

{block "title"}Account Activation{/block}

{block "main"}
	<h1>Account activation</h1>
		{if isset($errors)}
		    <div id="errors">
		    	{$errors}
		    </div>
	    {else}
			<div id="success">
			   <p>{$ACCOUNT_NOW_ACTIVE}</p>
			</div>
		{/if}
{/block}