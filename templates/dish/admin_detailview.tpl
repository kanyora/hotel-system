{extends "base.tpl"}

{block "title"}{$dish->name}{/block}

{block "right"}
	<div id="post-166" class="post-166 product type-product status-publish hentry">
	<div class="images">
		<img style="float:right" width="300" height="300" src="{#BASE_URL#}/media/uploads/dishes/images/{$dish->photo}" class="attachment-300x300 wp-post-image" alt="whatis_gallery_slide120100901" title="whatis_gallery_slide120100901">
	</div>
	<div class="summary">
		<p>
			<h1>{$dish->name}</h1>
		</p>
		<p>
			<b>Price:</b> KES. {$dish->price}
		</p>
		<p>
			<b>Details:</b>{$dish->details}
		</p>
		<p class="product_meta">
			<div class="posted_in">
				<b>Posted in:</b> <a href="{#BASE_URL#}/categories/{$dish->category->id}/dishes/" rel="tag">{$dish->category->name}</a>.
			</div>
		</p>
		<a href="{#BASE_URL#}/admin/dishes/{$dish->id}/">View</a>
		<a href="{#BASE_URL#}/admin/dishes/{$dish->id}/edit/">Edit</a> 
		<a href="{#BASE_URL#}/admin/dishes/{$dish->id}/delete/">Remove</a>
	</div>
</div>
{/block}