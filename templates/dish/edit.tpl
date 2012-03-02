{extends "base.tpl"}

{block "right"}
	<h2>Add Dish:</h2>
	<form method="POST" action="." class="i-validate" novalidate="novalidate" enctype="multipart/form-data">
		<input type="hidden" name="dish[type]" value="dish" />
		<fieldset>
			<section>
				<div class="section-left-s">
					<label for="id_name">Name:</label>
				</div>
				<div class="section-right">
					<input type="text" name="dish[name]" value="{$dish->name}" class="i-text"/>
				</div>
			</section>
			<section>
				<div class="section-left-s">
					<label for="id_category">Category:</label>
				</div>
				<div class="section-right">
					<select name="dish[category]">
						<option>----</option>
						{foreach $categories as $category}
							<option value="{$category->id}" 
								{if $category->id eq $dish->category->id }
									selected="selected"
								{/if}>
							</option>
						{/foreach}
					</select>
				</div>
			</section>
			<section>
				<label for="id_price">Price:</label>
				<input alt="{$dish->name}-photo" type="text" name="dish[price]" value="{$dish->price}" class="i-text"/>
			</section>
			<section>
				{if $dish->photo }
					<div class="image">
						<img width="110px" height="110px" src="{#BASE_URL#}/media/uploads/dishes/images/{$dish->photo}" />
					</div>
				{/if}
				<label for="id_price">Photo:</label>
				<input type="file" name="photo" />
			</section>
			<section>
				<label for="id_price">Details:</label>
				<textarea name="dish[details]" class="i-text">{$dish->details}</textarea>
			</section>
			<section>
				<input type="submit" value="Add">
			</section>
		</fieldset>
	</form>
{/block}