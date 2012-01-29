{extends 'base.tpl'}

{block "body"}
	<div id="wrapper">
		{block "wrapper"}
			<div id="content">
				{block "content"}
			        <div id="left-nav">
			        	{block "left-nav"}
				        	{include "auth/left-nav.tpl"}
				            <div class="clear"></div>
				        {/block}
			        </div>
			        <div id="main">
				        {block "main"}
				        {/block}
			  		</div>
			  	{/block}
			</div>
		{/block}
	</div>
{/block}