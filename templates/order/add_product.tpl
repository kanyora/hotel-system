{extends "base.tpl"}

{block content}
	<form method="POST" action=".">
		<input type="hidden" name="order[type]" value="order" />
	    <div class="fieldWrapper">
	        <label for="quantity">Enter the quantity:</label>
	        <input type="text" name="order[quantity]" />
	    </div>
	    <div class="fieldWrapper">
	        <label for="note">Additional notes (e.g. milk, two sugars):</label>
	        <textarea id="note" name="order[notes]"></textarea>
	    </div>
	    <br />
	    <br />
	    <input type="submit" value="Add to My Order" />
	</form>
{/block}
