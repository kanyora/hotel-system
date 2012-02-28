{extends 'base.tpl'}
{block 'title'}Authentication{/block}

{block "body"}
	<div id="wrapper" class="login">
		<div class="box">
			<div class="title">
				Please login
				<span class="hide"></span>
			</div>
			<div class="content">
				{if isset($errors)}
					<div class="message inner red">
						<span><b>Error</b>{$errors}</span>
					</div>
			    {/if}
				<form action="." method="POST">
					<div class="row">
						<label>Username</label>
						<div class="right"><input name="username" type="text" value="" /></div>
					</div>
					<div class="row">
						<label>Password</label>
						<div class="right"><input name="password" type="password" value="" /></div>
					</div>
					<div class="row">
						<div class="right">
							<button type="submit"><span>Submit</span></button>
						</div>
					</div>
				</form>
				<a href="{#BASE_URL#}/auth/register/">Register</a>
			</div>
		</div>
	</div>
{/block}