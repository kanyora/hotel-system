{extends "base.tpl"}

{block "content"}
	<h2>Add Dish:</h2>
	<form method="POST" action="." class="i-validate" novalidate="novalidate">
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
					<select name="dish[category]" size="{$categories|@count}">
						<option>----</option>
						{foreach $categories as $category}
							<option value="{$category->id}" 
								{if $dish->category eq $category }
									selected="selected"
								{/if}>
								{$category->name}
							</option>
						{/foreach}
					</select>
				</div>
			</section>
			<section>
				<label for="id_price">Price:</label>
				<input type="text" name="dish[price]" value="{$dish->price}" class="i-text"/>
			</section>
			<section>
				<label for="id_price">Price:</label>
				<input type="file" name="dish[photo]" value="{$dish->photo}" />
			</section>
			<section>
				<label for="id_price">Details:</label>
				<textarea name="dish[details]" value="{$dish->details}" class="i-text"></textarea>
			</section>
			<section>
				<input type="submit" value="Add">
			</section>
		</fieldset>
	</form>
{/block}