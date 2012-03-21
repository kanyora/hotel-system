{extends "shop_base.tpl"}

{block "title"}{$dish->name}{/block}

{block "dishes"}
	<div id="post-166" class="post-166 product type-product status-publish hentry">
	<div class="images">
		<img style="float:right" width="300" height="300" src="{#BASE_URL#}/media/uploads/dishes/images/{$dish->photo}" class="attachment-300x300 wp-post-image" alt="whatis_gallery_slide120100901" title="whatis_gallery_slide120100901">
	</div>
	<div class="summary">
		<p class="price">
			KES. {$dish->price}
		</p>
		<p>
			{$dish->details}
		</p>
		<form action="{#BASE_URL#}/orders/dish/{$dish->id}/add/" class="cart i-validate" method="POST">
			<div class="quantity">
				<input type="hidden" name="order[type]" value="order" />
				<input min="0" style="width: 48px;" name="order[quantity]" value="1" type="number" size="4" title="Qty" class="input-text qty text required" maxlength="12">
			</div>
			<br/>
			<br/>
			<button type="submit" class="button">
				Add to cart
			</button>
		</form>
		<div class="product_meta">
			<div class="posted_in">
				Posted in <a href="{#BASE_URL#}/categories/{$dish->category->id}/dishes/" rel="tag">{$dish->category->name}</a>.
			</div>
		</div>
	</div>
</div>
{/block}