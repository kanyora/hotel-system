{extends 'auth/auth_layout.tpl'}
{block 'title'}Authentication{/block}

{block "main"}
    <h1>Login</h1>
    
    {if isset($errors)}
        <div id="errors">{$errors}</div>
    {/if}
    
    <div id="regbox">
        <form name="newUser" action="." method="post">
            <p>
                <label>Username:</label>
                <input type="text" name="username" />
            </p>
            <p>
                 <label>Password:</label>
                 <input type="password" name="password" />
            </p>
            <p>
                <label>&nbsp;</label>
                <input type="submit" value="Login" class="submit" />
            </p>
        </form>
    </div>
{/block}