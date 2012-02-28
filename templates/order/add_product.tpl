{extends "base.tpl"}

{block "right"}
	<form method="POST" action=".">
		<input type="hidden" name="order[type]" value="order" />
	    <div class="row">
	        <label for="quantity">Enter the quantity:</label>
	        <div class="right">
	        	<input type="text" name="order[quantity]" />
	        </div>
	    </div>
	    <div class="row">
	        <label for="note">Additional notes (e.g. milk, two sugars):</label>
	        <div class="right">
	        	<textarea id="note" name="order[notes]"></textarea>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="right">
	    		<input type="submit" value="Add to My Order" />
	    	</div>
	    </div>
	</form>
{/block}
