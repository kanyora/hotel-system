{extends "shop_base.tpl"}

{block "title"}Delivery{/block}

{block "dishes"}
	<form class="form" method="POST" action=".">
		<input type="hidden" name="order[type]" value="order" />
		<div class="row">
		    <label>Phone Number:</label>
		    <div class="right">
		    	<input class="required" style="height:25px;width:200px;margin-bottom:20px" type="number" name="order[location]"/>
		    </div>
		</div>
		<div>
		    <label>Location of Delivery:</label>
		    <div class="right">
		    	<select class="required" style="height:30px;margin-bottom:20px" type="text" value="" name="order[location]">
					  <option value="Langata">Langata</option>
					  <option value="Rongai">Rongai</option>
					  <option value="Karen">Karen</option>
					  <option value="Madaraka">Madaraka</option>
					  <option value="Nairobi west">Nairobi West</option>
					  <option value="South b">South B</option>
					  <option value="South c">South C</option>
					  <option value="Ngumo">Ngumo</option>
					  <option value="Highrise">Highrise</option>
					  <option value="Adams Arcade">Adams Arcade</option>
					  <option value="Mimosa">Mimosa</option>
					  <option value="Ngong">Ngong</option>
					  <option value="Westlands">Westlands</option>
					  <option value="Embakassi">Embakassi</option>
					  <option value="Buruburu">Buruburu</option>
					  <option value="Kasarani">Kasarani</option>
					  <option value="City Stadium">City Stadium</option>
					  <option value="Moi Avenue">Moi AvenueHighrise</option>
					  <option value="Tom Mboya Street">Tom Mboya Street</option>
					  <option value="Ring Road">Ring Road</option>
					  <option value="Bellevue">Bellevue</option>
					  <option value="Kilimani">Kilimani</option>
					  <option value="Lavington">Lavington</option>
					  <option value="Kileleshwa">Kileleshwa</option>
					  <option value="Hurlinghum">Hurlinghum</option>
		    	</select>
		    </div>
		</div>
		<div>
	    <input class="button" type="submit" value="Place Order" />
	</form>
	<br />
{/block}
