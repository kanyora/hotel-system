{extends "shop_base.tpl"}

{block "title"}Cart{/block}

{block "dishes"}
	<div id="entry" class="pad20both pad20vertical">
		<form action="{#BASE_URL#}/cart/" method="post">
			<table class="shop_table cart" cellspacing="0">
				<thead>
					<tr>
						<th class="product-remove"></th>
						<th class="product-thumbnail"></th>
						<th class="product-name"><span class="nobr">Product Name</span></th>
						<th class="product-price"><span class="nobr">Unit Price</span></th>
						<th class="product-quantity">Quantity</th>
						<th class="product-subtotal">Price</th>
					</tr>
				</thead>
				<tbody>
					{foreach $cart as $item}
						<tr>
							<td class="product-remove">
								<a href="{#BASE_URL#}/orders/dish/{$item.id}/remove/" class="remove" title="Remove this item.">×</a>
							</td>
							<td class="product-thumbnail">
								<a href="{#BASE_URL#}/dishes/{$item.id}/"> 
									<img width="36" height="36" src="{#BASE_URL#}/media/uploads/dishes/images/{$item.photo}" class="attachment-shop_tiny wp-post-image" alt="whatis_gallery_slide120100901" title="whatis_gallery_slide120100901"> 
								</a>
							</td>
							<td class="product-name"><a href="{#BASE_URL#}/dishes/{$item.id}/">{$item.name}</a></td>
							<td class="product-price">{$item.price}</td>
							<td class="product-quantity">{$item.quantity}</td>
							<td class="product-subtotal">{$item.price * $item.quantity}</td>
						</tr>
					{foreachelse}
					    <tr>
					        <td colspan="5">You dont have anything in your cart yet.</td>
					    </tr>
					{/foreach}
				</tbody>
				<tfoot>
					<tr>
						<td colspan="6" class="actions">
						<input type="hidden" id="_n" name="_n" value="64165cdf0b">
						<input type="hidden" name="_wp_http_referer" value="/demo/echojigo/cart/">
						<input type="submit" class="button" name="update_cart" value="Update Shopping Cart">
						<a href="{#BASE_URL#}/orders/check-out/" class="checkout-button button">Proceed to Checkout →</a></td>
					</tr>
				</tfoot>
			</table>
		</form>
		<div class="cart-collaterals">
			<div class="cart_totals">
				<h2>Cart Totals</h2>
				<div class="cart_totals_table">
					<table cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<th class="cart-row-subtotal-title">Subtotal</th>
								<td class="cart-row-subtotal">KES. {$total}</td>
							</tr>
							<tr>
								<th class="cart-row-total-title"><strong>Total</strong></th>
								<td class="cart-row-total"><strong>KES. {$total}</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
{/block}

