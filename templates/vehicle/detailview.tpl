{extends "common.tpl"}

{block "content"}
	<h2>Vehicle: {$vehicle->number_plate}</h2>
	<p>
		Number Plate: {$vehicle->number_plate}
	</p>
	<p>
		Vehicle Type: {$vehicle->vehicle_type}
	</p>
	<p>
		Date Purchased: {$vehicle->date_purchased}
	</p>
	<p>
		Details: {$vehicle->details}
	</p>
	<a class="button primary" href="{#BASE_URL#}/vehicles/1/service-requests/">Current Service Requests</a>
	<a class="button primary" href="{#BASE_URL#}/vehicles/1/service-requests/add/">New Service Requests</a>
{/block}