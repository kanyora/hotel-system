{extends "auth/login.tpl"}

{block "navigation"}
	<nav id="secondary">
		<ul>
			<li>
				<a href="{#BASE_URL#}/auth/login/">Login</a>
			</li>
			<li class="current">
				<a href="{#BASE_URL#}/auth/register/">Register</a>
			</li>
			<li>
				<a href="{#BASE_URL#}/auth/forgot-password/">Forgot password</a>
			</li>
		</ul>
	</nav>
{/block}

{block "content"}
    <br>
    <br>
    {if isset($errors)}
    	<div id="errors">
        	{$errors}
        </div>
    {/if}
    {if isset($success_message)} 
        <div id="success">
            <section>{$success_message}</section>
        </div>
    {/if}
	<div id="regbox">
	    <form name="newUser" action="." method="post">
	        <section>
	            <label>Username:</label>
	            <div>
	            	<input type="text" name="username" class="required"/>
	            </div>
	        </section>
	        <section>
	            <label>Email:</label>
	            <div>
	            	<input type="text" name="email" class="required"/>
	            </div>
	        </section>
	        <section>
	            <label>Password:</label>
	            <div>
	            	<input type="password" name="password" class="required"/>
	            </div>
	        </section>
	        <section>
	            <label>Confirm:</label>
	            <div>
	            	<input type="password" name="passwordc" class="required"/>
		            <br>
					<br>
					<input type="submit" value="Register" class="button primary">
					<a href="." class="button danger">Cancel</a>
	            </div>
	        </section>
	    </form>
	</div>
{/block}