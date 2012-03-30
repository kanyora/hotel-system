{extends "base.tpl"}

{block "right"}
	<div class="btn-box">
		<div class="content">
			<a href="{#BASE_URL#}/admin/reports/invoices/" class="item"> <img src="{#BASE_URL#}/static/images/dashboard.png" alt="Dashboard"> <span>Delivery Reports</span></a>
			<a href="{#BASE_URL#}/admin/reports/deliveriess/" class="item"> <img src="{#BASE_URL#}/static/images/dashboard.png" alt="Dashboard"> <span>Invoice Reports</span></a>
		</div>
	</div>
{/block}