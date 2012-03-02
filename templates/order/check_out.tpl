{extends "shop_base.tpl"}

{block "title"}Delivery{/block}

{block "dishes"}
	<form method="POST" action=".">
		<input type="hidden" name="order[type]" value="order" />
		<div class="row">
		    <label>M-Pesa Code:</label>
		    <div class="right">
		    	<input style="height:25px;width:200px;margin-bottom:20px" type="text" value="" name="order[location]"/>
		    </div>
		</div>
		<div>
		    <label>Location of Delivery:</label>
		    <div class="right">
		    	<textarea style="height:60px;width:200px;margin-bottom:20px" type="text" value="" name="order[location]"></textarea>
		    </div>
		</div>
		<div>
	    <input class="button" type="submit" value="Place Order" />
	</form>
	<br />
{/block}
