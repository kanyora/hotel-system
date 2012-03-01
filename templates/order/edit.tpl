{extends "shop_base.tpl"}

{block "dishes"}
	<form method="POST" action="." class="i-validate" novalidate="novalidate">
		<input type="hidden" name="category[type]" value="category" />
		<fieldset>
        	<section>
        		<div class="section-left-s">
					<label for="text_field">Name</label>
				</div>
				<div class="section-right">
					<div class="section-input"><input type="text" name="category[name]" value="{$category->name}"/></div>
				</div>
				<div class="clearfix"></div>
			</section>
			<section>
		        <input type="submit" name="submit" id="" class="i-button no-margin" value="Save">
		        <div class="clearfix"></div>
		    </section>
		</fieldset>
	</form>
{/block}