{*
	Below is a very simple example of how to process a lost password request
	We'll deal with a request in two stages, confirmation or deny then proccess
	
	This file handles 3 tasks.
	
	1. Construct new request.
	2. Confirm request. - Generate new password, update the db then email the user
	3. Deny request. - Close the request
*}
{extends 'auth/auth_layout.tpl'}

{block "title"}Forgot Password{/block}
{block "main"}
    <h1>Forgot Password</h1>

    {if isset($errors)}
    	<div id="errors">
        	{$errors}
        </div>
    {/if}
    {if isset($success_message)} 
        <div id="success">
            <p>{$success_message}</p>
        </div>
    {/if}
    
    <div id="regbox">
        <form name="newLostPass" action="." method="post">
	        <p>
	            <label>Username:</label>
	            <input type="text" name="username" />
	        </p>
	        <p>    
	            <label>Email:</label>
	            <input type="text" name="email" />
	        </p>
	        <p>
	            <label>&nbsp;</label>
	            <input type="submit" value="Login" class="submit" />
	        </p>
        </form>
    </div>
{/block}