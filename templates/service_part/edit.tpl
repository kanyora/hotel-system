{extends "service_part/base.tpl"}

{block "content"}
	<h2>Edit Service Part:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="service_part[type]" value="servicepart" />
		<section>
			<label for="id_part_no">Part No:</label>
			<div>
				<input type="text" name="service_part[number]" value="{$service_part->number}" />
			</div>
		</section>
		<section>
			<label for="id_part_name">Name:</label>
			<div>
				<input type="text" name="service_part[name]" value="{$service_part->name}" />
			</div>
		</section>
		<section>
			<label for="id_part_cost">Cost:</label>
			<div>
				<input type="text" name="service_part[cost]" value="{$service_part->cost}" />
			</div>
		</section>
		<section>
			<label for="id_service_part_type">Description:</label>
			<div>
				<textarea name="service_part[description]" class="wym_html_val">{$service_part->description}</textarea>
			</div>
		</section>
		<section>
			<input type="submit" value="Save Changes" class="button primary submit">
		</section>
	</form>
{/block}