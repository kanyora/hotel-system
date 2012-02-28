{extends "base.tpl"}

{block "right"}
	<div class="btn-box">
		<div class="content">
			{if $request->user->belongsToGroups('admin')}
				<a href="#" class="item"> <img src="{#BASE_URL#}/static/images/dashboard.png" alt="Dashboard"> <span>Dashboard</span></a>
				<a href="#" class="item"> <img src="{#BASE_URL#}/static/images/messages.png" alt="Messages"> <span>Dishes</span></a>
				<a href="#" class="item"> <img src="{#BASE_URL#}/static/images/settings.png" alt="Settings"> <span>Categories</span> </a>
				<a href="#" class="item"> <img src="{#BASE_URL#}/static/images/support.png" alt="Support"> <span>Orders</span> </a>
				<a href="#" class="item"> <img src="{#BASE_URL#}/static/images/statics.png" alt="Reports"> <span>Reports</span></a>
			{else}
				{foreach $dishes as $dish}
					<a class="item"> 
						<img width="110px" height="110px" src="{#BASE_URL#}/media/uploads/dishes/images/{$dish->photo}" /> <span>{$dish->name} @{$dish->price}/-</span>
						<button onclick="window.location='{#BASE_URL#}/orders/dish/{$dish->id}/add/'">Add to chart</button>
					</a>
				{/foreach}
			{/if}
		</div>
	</div>
{/block}