{if !$request->user->isUserLoggedIn()}
	<ul>
	    <li><a href="/Pharmacy/">Home</a></li>
	    <li><a href="/Pharmacy/auth/login/">Login</a></li>
	    <li><a href="/Pharmacy/auth/register/">Register</a></li>
	    <li><a href="/Pharmacy/auth/forgot-password/">Forgot Password</a></li>
	    <li><a href="/Pharmacy/auth/resend-activation/">Resend Activation Email</a></li>
	</ul>
{else}
	<ul>
		<li><a href="/Pharmacy/">Home</a></li>
		<li><a href="/Pharmacy/auth/logout/">Logout</a></li>
		<li><a href="/Pharmacy/auth/account/">Account Home</a></li>
		<li><a href="/Pharmacy/auth/change-password/">Change password</a></li>
	    <li><a href="/Pharmacy/auth/update-email-address/">Update email address</a></li>
	</ul>
{/if}