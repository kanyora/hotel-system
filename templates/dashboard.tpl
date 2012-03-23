{extends "base.tpl"}

{block "right"}
	<div class="btn-box">
		<div class="content">
			{if $request->user->belongsToGroups('admin')}
				<a href="{#BASE_URL#}/" class="item"> <img src="{#BASE_URL#}/static/images/dashboard.png" alt="Dashboard"> <span>Dashboard</span></a>
				<a href="{#BASE_URL#}/dishes/" class="item"> <img src="{#BASE_URL#}/static/images/messages.png" alt="Messages"> <span>Dishes</span></a>
				<a href="{#BASE_URL#}/categories/" class="item"> <img src="{#BASE_URL#}/static/images/settings.png" alt="Settings"> <span>Categories</span> </a>
				<a href="{#BASE_URL#}/orders/" class="item"> <img src="{#BASE_URL#}/static/images/support.png" alt="Support"> <span>Orders</span> </a>
				<a href="{#BASE_URL#}/reports/" class="item"> <img src="{#BASE_URL#}/static/images/statics.png" alt="Reports"> <span>Reports</span></a>
			{/if}
		</div>
	</div>
{/block}