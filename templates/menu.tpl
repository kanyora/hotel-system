{extends "base.tpl"}

{block "right"}
	<div class="btn-box">
		<div class="content">
			{foreach $dishes as $dish}
				<a class="item"> 
					<img width="110px" height="110px" src="{#BASE_URL#}/media/uploads/dishes/images/{$dish->photo}" /> <span>{$dish->name} @{$dish->price}/-</span>
					<button onclick="window.location='{#BASE_URL#}/orders/dish/{$dish->id}/add/'">Add to cart</button>
				</a>
			{/foreach}
		</div>
	</div>
{/block}