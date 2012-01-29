{extends "auth/auth_layout.tpl"}

{block "main"}
    <h1>Change Password</h1>
    
    {if isset($errors)}
        <div id="errors">{$errors}</div>
    {/if}
    {if isset($success_message)}
    	<div id="success"><p>{$success_message}</p></div>
    {/if}

	<div id="regbox">
        <form name="changePass" action="/KRA/auth/change-password/" method="post">
            <p>
                <label>Password:</label>
                <input type="password" name="password" />
            </p>
            <p>
                <label>New Pass:</label>
                <input type="password" name="passwordc" />
            </p>
            <p>
                <label>Confirm Pass:</label>
                <input type="password" name="passwordcheck" />
            </p>
    		<p>
                <label>&nbsp;</label>
                <input type="submit" value="Update Password" class="submit" />
           	</p>
        </form>
		<div class="clear"></div>
	</div>
{/block}