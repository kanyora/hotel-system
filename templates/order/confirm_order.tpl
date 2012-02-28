{extends "base.tpl"}

{block "menu"}{/block}
{block "cart"}{/block}
{block "feedback"}{/block}

{block "subheader"}<h4>Confirm or Decline Order</h4>{block}

{block "right"}
	<div class="menu">
		<a class='button' href="{#BASE_URL#}/order/respond/{{order_reference}}/accept/" id='button'>Accept</a>
		<a class='button' href="{#BASE_URL#}/order/respond/{{order_reference}}/decline/" id='button'>Decline</a>
	</div>
{/block}
