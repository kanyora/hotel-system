{extends "base.tpl"}

{block subheader}<h4>Your items:</h4>{/block}

{block "right"}
	<table class="cart">
	    {foreach $cart as $item}
		    <tr>
		        <td valign="top"><a href="{#BASE_URL#}/orders/dish/{$item.id}/remove/">[x]</a></td>
		        <td>
		            {$item.quantity}
		            {$item.name}
		            ({$item.notes})
		        </td>
		        <td valign="top">{$item.subtotal}/-</td>
		    </tr>
	    {foreachelse}
		    <tr>
		        <td colspan="2">You haven't selected anything yet.</td>
		    </tr>
	    {/foreach}
	    {if cart}
		    <tr id="total">
		        <td></td>
		        <td>Your total:</td><td>{$total}/-</td> 
		    </tr>
	    {/if}
	</table>
	<br />
	{if $cart}
		<button onclick="window.location='{#BASE_URL#}/orders/check-out/'" class='button' type='submit'>  Submit order  </button>
	{/if}
{/block}

{block "cart"}{/block}
{block "menu"}<a href="/">Add another item</a><br />{/block}
