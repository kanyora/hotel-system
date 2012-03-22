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
					  <option value="langata">Langata</option>
					  <option value="rongai">Rongai</option>
					  <option value="karen">Karen</option>
					  <option value="madaraka">Madaraka</option>
					  <option value="nairobi west">Nairobi West</option>
					  <option value="south b">South B</option>
					  <option value="south c">South C</option>
					  <option value="ngumo">Ngumo</option>
					  <option value="highrise">Highrise</option>
					  <option value="adams arcade">Adams Arcade</option>
					  <option value="mimosa">Mimosa</option>
					  <option value="ngong">Ngong</option>
					  <option value="westlands">Westlands</option>
					  <option value="embakassi">Embakassi</option>
					  <option value="buruburu">Buruburu</option>
					  <option value="kasarani">Kasarani</option>
					  <option value="city stadium">City Stadium</option>
					  <option value="moi avenue">Moi AvenueHighrise</option>
					  <option value="tom mboya street">Tom Mboya Street</option>
					  <option value="ring road">Ring Road</option>
					  <option value="bellevue">Bellevue</option>
					  <option value="kilimani">Kilimani</option>
					  <option value="lavington">Lavington</option>
					  <option value="kileleshwa">Kileleshwa</option>
					  <option value="hurlinghum">Hurlinghum</option>
		    	</select>
		    </div>
		</div>
		<div>
	    <input class="button" type="submit" value="Place Order" />
	</form>
	<br />
{/block}
