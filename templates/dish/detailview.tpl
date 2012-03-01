{extends "shop_base.tpl"}

{block "dishes"}
	<p>
		Id: {$dish->id}
	</p>
	<p>
		Name: {$dish->name}
	</p>
	<p>
		Price: {$dish->date_purchased}
	</p>
	<p>
		Details: {$dish->details}
	</p>
	<p>
		<div class="image">
			<img width="110px" height="110px" src="{#BASE_URL#}/media/uploads/dishes/images/{$dish->photo}" />
		</div>
	</p>
	<button class="button" onclick="window.location='{#BASE_URL#}/orders/dish/{$dish->id}/add/'">Add to Cart</button>
{/block}