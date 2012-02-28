{extends "base.tpl"}

{block "title"}Registration{/block}

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
						<span><b>Error</b>
							{if isset($errors)}
							    <div id="errors">
							    	{$errors}
							    </div>
							{else if isset($message)}
						        <div id="success">
						           <p>{$message}</p>
						        </div>
						    {/if}
						</span>
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
						<label>Confirm</label>
						<div class="right"><input name="passwordc" type="password" value="" /></div>
					</div>
					<div class="row">
						<label>Email</label>
						<div class="right"><input name="email" type="text" value="" /></div>
					</div>
					<div class="row">
						<div class="right">
							<button type="submit"><span>Submit</span></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
{/block}