{extends "licence/add.tpl"}

{block 'form-items'}
	<p>
		<label>Motor Vehicle Type:</label>
		<input type="text" class="text" name="licence[motor_vehicle_type]"  value="{$licence->motor_vehicle_type}"/>
	</p>
	<p>
		<label>Motor Vehicle Make:</label>
		<input type="text" class="text" name="licence[make]"  value="{$licence->make}"/>
	</p>
	<p>
		<label>Body type:</label>
		<input type="text" class="text" name="licence[body_type]"  value="{$licence->body_type}"/>
	</p>
	<p>
		<label>Year of Manufacture:</label>
		<select name="licence[year_of_manufacture]">
			<option value="">Select Year:</option>
			<option value="2004">2004</option>
			<option value="2005">2005</option>
			<option value="2006">2006</option>
			<option value="2007">2007</option>
			<option value="2008">2008</option>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
		</select>
	</p>
	<p>
		<label>Tare Weight:</label>
		<input type="text" class="text" name="licence[tare_weight]"  value="{$licence->tare_weight}"/>
	</p>
	<p>
		<label>Number of Axles:</label>
		<input type="text" class="text" name="licence[number_of_axles]"  value="{$licence->number_of_axles}"/>
	</p>
	<p>
		<label>Value:</label>
		<input type="text" class="text" name="licence[value]"  value="{$licence->value}"/>
	</p>
	<p>
		<label>Principal Body Colour:</label>
		<input type="text" class="text" name="licence[body_colour]"  value="{$licence->body_colour}"/>
	</p>
	<p>
		<label>New Vehicle:</label>
		<input type="checkbox" class="text" name="licence[new]"  value="{$licence->new}"/>
	</p>
	<p>
		<label>Previously Registered:</label>
		<input type="checkbox" class="text" name="licence[registered]"  value="{$licence->registered}"/>
		<label>Country:</label>
		<input type="text" class="text" name="licence[country]"  value="{$licence->country}"/>
		<label>Reg No:</label>
		<input type="text" class="text" name="licence[reg_no]"  value="{$licence->reg_no}"/>
	</p>
	<p>
		<label>New Vehicle:</label>
		<input type="text" class="text" name="licence[new]"  value="{$licence->new}"/>
	</p>
{/block}
