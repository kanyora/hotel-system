{extends "auth/auth_layout.tpl"}

{block "title"}Registration{/block}

{block "main"}
	{if isset($errors)}
	    <div id="errors">
	    	{$errors}
	    </div>
	{else if isset($message)}
        <div id="success">
           <p>{$message}</p>
        </div>
    {/if}
	<div id="regbox">
	    <form name="newUser" action="/Pharmacy/auth/register/" method="post">
	        <p>
	            <label>Username:</label>
	            <input type="text" name="username" />
	        </p>
	        <p>
	            <label>Password:</label>
	            <input type="password" name="password" />
	        </p>
	        <p>
	            <label>Confirm:</label>
	            <input type="password" name="passwordc" />
	        </p>
	        <p>
	            <label>Email:</label>
	            <input type="text" name="email" />
	        </p>
	        <p>
	            <label>&nbsp;</label>
	            <input type="submit" value="Register"/>
	        </p>
	    </form>
	</div>
{/block}