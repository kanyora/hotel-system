{extends "shop_base.tpl"}

{block "dishes"}
	{foreach $dishes as $dish}
		<li class="product {if $dish@first}first{else if $dish@last}last{/if}">
			<a href="{#BASE_URL#}/dishes/{$dish->id}/"> 
				<img width="300" height="300" src="{#BASE_URL#}/media/uploads/dishes/images/{$dish->photo}" class="attachment-shop_small wp-post-image" alt="{$dish->details}" title="{$dish->details}" /> 
				<strong>{$dish->name}</strong> <span class="price">KES. {$dish->price}</span> 
			</a>
			<a href="{#BASE_URL#}/orders/dish/{$dish->id}/add/" class="button">Add to cart</a>
		</li>
	{/foreach}
{/block}
