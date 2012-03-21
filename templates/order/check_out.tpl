{extends "shop_base.tpl"}

{block "title"}Delivery{/block}

{block "dishes"}
	<form class="form" method="POST" action=".">
		<input type="hidden" name="order[type]" value="order" />
		<div class="row">
		    <label>M-Pesa Code:</label>
		    <div class="right">
		    	<input class="required" style="height:25px;width:200px;margin-bottom:20px" type="text" name="order[location]"/>
		    </div>
		</div>
		<div>
		    <label>Location of Delivery:</label>
		    <div class="right">
		    	<select class="required" style="height:30px;margin-bottom:20px" type="text" value="" name="order[location]">
		    		
		    	</select>
		    </div>
		</div>
		<div>
	    <input class="button" type="submit" value="Place Order" />
	</form>
	<br />
{/block}
