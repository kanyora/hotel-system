{extends "base.tpl"}

{block "subheader"}
	<h4>Tell us how to reach you</h4>
{/block}

{block "content"}
	<form method="POST" action=".">
	    {{ form.as_p }}
	    <br />
	    <br />
	    <input type="submit" value="Submit" />
	</form>
	<br />
{/block}
