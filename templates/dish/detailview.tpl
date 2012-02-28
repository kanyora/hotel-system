{extends "base.tpl"}

{block "right"}
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
	<button onclick="window.location='{#BASE_URL#}/orders/dish/{$dish->id}/add/'">Add to chart</button>
{/block}