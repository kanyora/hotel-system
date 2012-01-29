{extends 'auth/auth_layout.tpl'}
{block 'title'}Authentication{/block}

{block "main"}
	<h1>Your Account</h1>
	<p>Welcome to your account page <strong>{$request->user->username}</strong></p>
    <p>I am a <strong>
    {$group->Name}
	</strong></p>
    <p>You joined on {$signup_date} </p>
{/block}
  

