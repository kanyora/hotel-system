{extends "auth/auth_layout.tpl"}

{block "main"}
	<h1>Resend Activation Email</h1>
	{if isset($errors)}
    	<div id="errors">
        	{$errors}
        </div> 
    {/if}
    {if isset($success_message)}
        <div id="success">
            <p>{$success_message}</p>
        </div>
    {/if}  
    <div id="regbox">
	    {if isset($feature_disabled)}
	        {$feature_disabled}
		{else}
	        <form name="resendActivation" action="." method="post">
		         <p>
		            <label>Username:</label>
		            <input type="text" name="username" />
	 	         </p>     
		         <p>
		            <label>Email:</label>
		            <input type="text" name="email" />
		         </p>    
		    	 <p>
		         	<label>&nbsp;</label>
		            <input type="submit" value="Login" class="submit" />
		         </p>
	        </form>
		{/if}
     </div>   
{/block}


