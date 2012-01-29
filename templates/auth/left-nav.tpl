{if !$request->user->isUserLoggedIn()}
	<ul>
	    <li><a href="/KRA/">Home</a></li>
	    <li><a href="/KRA/auth/login/">Login</a></li>
	    <li><a href="/KRA/auth/register/">Register</a></li>
	    <li><a href="/KRA/auth/forgot-password/">Forgot Password</a></li>
	    <li><a href="/KRA/auth/resend-activation/">Resend Activation Email</a></li>
	</ul>
{else}
	<ul>
		<li><a href="/KRA/">Home</a></li>
		<li><a href="/KRA/auth/logout/">Logout</a></li>
		<li><a href="/KRA/auth/account/">Account Home</a></li>
		<li><a href="/KRA/auth/change-password/">Change password</a></li>
	    <li><a href="/KRA/auth/update-email-address/">Update email address</a></li>
	</ul>
{/if}