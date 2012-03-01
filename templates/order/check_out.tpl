{extends "shop_base.tpl"}

{block "title"}Delivery Location{/block}

{block "dishes"}
	<form method="POST" action=".">
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
