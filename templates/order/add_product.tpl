{extends "shop_base.tpl"}

{block "dishes"}
	<form method="POST" action="." class="i-validate">
		<input type="hidden" name="order[type]" value="order" />
	    <div class="row">
	        <label for="quantity">Enter the quantity:</label>
	        <div class="right">
	        	<input type="number" class="required" name="order[quantity]" min="0"/>
	        </div>
	    </div>
	    <div class="row">
	        <label for="note">Additional notes (e.g. milk, two sugars):</label>
	        <div class="right">
	        	<textarea id="note" name="order[notes]" style="width:300px;height:100px"></textarea>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="right">
	    		<input type="submit" value="Add to My Order" />
	    	</div>
	    </div>
	</form>
{/block}
