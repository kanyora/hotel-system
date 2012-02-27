{extends "base.tpl"}

{block subheader}<h4>Your items:</h4>{/block}

{block "content"}
	<table class="cart">
	    {for $cart as $item}
		    <tr>
		        <td valign="top"><a href="{#BASE_URL#}/orders/cart/remove/product/{$item.id}/">[x]</a></td>
		        <td>
		            {$item.quantity|apnumber|capfirst} 
		            {$item.name}{$item.quantity|pluralize} 
		            ({$item.notes})
		        </td>
		        <td valign="top">{$item.subtotal}/-</td>
		    </tr>
	    {foreachelse}
		    <tr>
		        <td colspan="2">You haven't selected anything yet.</td>
		    </tr>
	    {/for}
	    {if cart}
		    <tr id="total">
		        <td></td>
		        <td>Your total:</td><td>{$total}/-</td> 
		    </tr>
	    {/if}
	</table>
	<br />
	{if $cart} 
		<a class = 'button' href="{% url check_out %}">Submit order</a>
	{/if}
{/block}

{block "cart"}{/block}
{block "menu"}<a href="/">Add another item</a><br />{/block}
