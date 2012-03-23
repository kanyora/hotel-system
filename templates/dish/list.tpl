{extends "base.tpl"}

{block "right"}
	<div class="box-head-light">
		Dishes: <a href="" class="collapsable"></a>
	</div>
	<div class="box-content no-padding grey-bg">
		<div class="dataTables_wrapper" id="datatable_wrapper">
			<div id="datatable_length" class="dataTables_length"> </div>
			<div class="dataTables_filter" id="datatable_filter">
				<label>Search:
					<input type="text">
				</label>
			</div>
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="datatable">
				<thead>
					<tr>
						<th class="sorting" rowspan="1" colspan="1" style="width: 229px; ">Name</th>
						<th class="sorting" rowspan="1" colspan="1" style="width: 213px; ">Category</th>
						<th class="sorting" rowspan="1" colspan="1" style="width: 136px; ">Price</th>
						<th class="sorting" rowspan="1" colspan="1" style="width: 96px; ">Actions</th>
					</tr>
				</thead>
				<tbody>
					{foreach $dishes as $dish}
						<tr class="odd">
							<td><a href="{#BASE_URL#}/admin/dishes/{$dish->id}/">{$dish->name}</a></td>
							<td>{$dish->category->name}</td>
							<td>{$dish->price}</td>
							<td>
								<a href="{#BASE_URL#}/admin/dishes/{$dish->id}/">View</a> |
								<a href="{#BASE_URL#}/admin/dishes/{$dish->id}/edit/">Edit</a> |
								<a href="{#BASE_URL#}/admin/dishes/{$dish->id}/delete/">Remove</a>
							</td>
						</tr>
					{/foreach}
				</tbody>
			</table>
			<button><a href="{#BASE_URL#}/admin/dishes/add/">Add Dish</a></button>
			<div class="dataTables_paginate paging_full_numbers" id="datatable_paginate">
				<span class="first paginate_button paginate_button_disabled" id="datatable_first">First</span>
				<span class="previous paginate_button paginate_button_disabled" id="datatable_previous">Previous</span>
				<span>
					<span class="paginate_active">1</span>
				</span>
				<span class="next paginate_button" id="datatable_next">Next</span>
				<span class="last paginate_button" id="datatable_last">Last</span>
			</div>
		</div>
	</div>
{/block}