{extends "service/base.tpl"}

{block "content"}
	<H2>Services:</H2>
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
					<th class="sorting" >Id</th>
					<th class="sorting" >Service Type</th>
					<th class="sorting" >Actions</th>
				</tr>
			</thead>
			<tbody>
				{foreach $services as $service}
					<tr class="{if $service@iteration is even by 1}even{else}odd{/if}">
						<td>{$service->id}</td>
						<td><a href="{#BASE_URL#}/services/{$service->id}/">{$service->service_type}</a></td>
						<td>
							<span class="button-group">
								<a href="{#BASE_URL#}/services/edit/{$service->id}/" class="button icon edit">Edit</a>
								<a href="{#BASE_URL#}/services/delete/{$service->id}/" class="button icon remove danger">Remove</a>
							</span>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
		<div class="clear"></div>
	</div>
{/block}
