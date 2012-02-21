{extends "auth/base.tpl"}

{block "container-attrs"}class="logincontainer" style="height: 681px; "{/block}

{block "navigation"}
	<nav id="secondary">
		<ul>
			<li class="current">
				<a href="{#BASE_URL#}/auth/login/">Login</a>
			</li>
			<li>
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
    
    <div id="regbox">
        <form name="newUser" action="." method="post">
			<section>
                <label>Username:</label>
                <div>
                	<input type="text" name="username" placeholder="Username" class="required" />
                </div>
            </section>
            <section>
                 <label>Password:</label>
                 <div>
					<input type="password" name="password" id="password" placeholder="Password" class="required">
					<br>
					<br>
					<input type="submit" value="Login" class="button primary">
					<a href="." class="button danger">Cancel</a>
				 </div>
            </section>
        </form>
    </div>
{/block}