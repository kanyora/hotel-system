{extends 'base.tpl'}
{block 'title'}Authentication{/block}

{block "body-container"}
    {if isset($errors)}
        <div id="errors">{$errors}</div>
    {/if}
    <div id="login-container" style="">
		<div id="login" class="i-box">
			<div class="login-title">
				<h1>KRA</h1>
			</div>
			<form name="login-form" id="login-form" method="POST" action="." novalidate="novalidate">
				<fieldset>
					<section>
						<input class="i-text required" type="text" name="username" placeholder="Username">
					</section>
					<section>
						<input class="i-text required" type="password" name="password" placeholder="Password">
					</section>
				</fieldset>
				<a href="#">Forgot your password?</a>
				<input class="i-button" type="submit" value="Login">
			</form>
		</div>
	</div>
{/block}