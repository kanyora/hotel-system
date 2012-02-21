{extends "common.tpl"}

{block "content"}
	<H2>Suppliers:</H2>
	<div class="dataTables_wrapper">
		<div class="dataTables_length">
			<label>Show
				<div class="cmf-skinned-select" style="width: 100px; height: 0px; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-size: 13px; font-family: Arial; font-style: normal; position: relative; ">
					<div class="cmf-skinned-text" style="height: 3px; width: 91px; opacity: 100; overflow-x: hidden; overflow-y: hidden; position: absolute; text-indent: 0px; z-index: 1; top: 0px; left: 0px; ">
						10
					</div>
					<select size="1" style="opacity: 0; position: relative; z-index: 100; ">
						<option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
					</select>
				</div> entries
			</label>
		</div>
		<div class="dataTables_filter">
			<label>
				<input type="text">
			</label>
		</div>
		<table class="datatable">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Number</th>
					<th>Email</th>
					<th>Address</th>
					<th>Location</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				{foreach $suppliers as $supplier}
					<tr>
						<td>{$supplier->id}</td>
						<td>{$supplier->name}</td>
						<td>{$supplier->phone_number}</td>
						<td>{$supplier->email}</td>
						<td>{$supplier->address}</td>
						<td>{$supplier->location}</td>
						<td>
							<span class="button-group">
								<a href="{#BASE_URL#}/suppliers/edit/{$supplier->id}/" class="button icon edit">Edit</a>
								<a href="{#BASE_URL#}/suppliers/delete/{$supplier->id}/" class="button icon remove danger">Remove</a>
							</span>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
		<div class="clear"></div>
	</div>
{/block}