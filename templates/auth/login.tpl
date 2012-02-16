{extends "common.tpl"}

{block "container-attrs"}class="logincontainer" style="height: 681px; "{/block}

{block "navigation"}
	<nav id="secondary">
		<ul>
			<li class="current">
				<a href="#">Login</a>
			</li>
			<li>
				<a href="#">Sign up</a>
			</li>
			<li>
				<a href="#">Forgot password</a>
			</li>
		</ul>
	</nav>
{/block}

{block "header"}
	<h1 id="logo">Admin Control Panel</h1>
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
					<a href="." class="button">Cancel</a>
				 </div>
            </section>
        </form>
    </div>
{/block}