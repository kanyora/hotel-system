{extends "shop_base.tpl"}

{block "dishes"}
	<div class="menu">
		<a class='button' href="{#BASE_URL#}/order/respond/{{order_reference}}/accept/" id='button'>Accept</a>
		<a class='button' href="{#BASE_URL#}/order/respond/{{order_reference}}/decline/" id='button'>Decline</a>
	</div>
{/block}
