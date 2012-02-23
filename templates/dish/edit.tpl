{extends "base.tpl"}

{block "body"}
	<h2>Add Dish:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="dish[type]" value="dish" />
		<p>
			<label for="id_name">Name:</label>
			<input type="text" name="dish[name]" value="{$dish->name}" />
		</p>
		<p>
			<label for="id_category">Category:</label>
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
		</p>
		<p>
			<label for="id_price">Price:</label>
			<input type="text" name="dish[price]" value="{$dish->price}" />
		</p>
		<p>
			<label for="id_price">Price:</label>
			<input type="file" name="dish[photo]" value="{$dish->photo}" />
		</p>
		<p>
			<label for="id_price">Details:</label>
			<textarea name="dish[details]" value="{$dish->details}"></textarea>
		</p>
		<p>
			<input type="submit" value="Add">
		</p>
	</form>
{/block}