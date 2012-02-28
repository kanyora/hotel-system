{extends "base.tpl"}

{block "subheader"}
	<h4>Tell us how to reach you</h4>
{/block}

{block "right"}
	<form method="POST" action=".">
		<h2>Delivery location</h2>
		<input type="hidden" name="order[type]" value="order" />
		<div class="row">
		    <label>Location</label>
		    <div class="right">
		    	<textarea type="text" value="" name="order[location]"></textarea>
		    </div>
		</div>
		<div>
	    <input class="button" type="submit" value="Submit" />
	</form>
	<br />
{/block}
