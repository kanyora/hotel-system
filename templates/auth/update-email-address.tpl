{extends "auth/auth_layout.tpl"}

{block "main"}
    <h1>Update your email address</h1>
    
    {if isset($errors)}
    	<div id="errors">{$errors}</div>
    {/if}
    {if isset($success_message)} 
	    <div id="success"><p>{$success_message}</p></div>
	{/if}
	
	<div id="regbox">
	    <form name="changePass" action="." method="post">
	    <p>
	        <label>Email:</label>
	        <input type="text" name="email" value="{$request->user->email}" />
	    </p>
	    <p>
	        <label>&nbsp;</label>
	        <input type="submit" value="Update Email" class="submit" />
	    </p>
	    </form>
	</div>
{/block}