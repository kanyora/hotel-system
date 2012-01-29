{extends 'base.tpl'}

{block "body"}
	<div id="wrapper">
		{block "wrapper"}
			<div id="content">
				{block "wrapper"}
			        <div id="left-nav">
			        	{block "left-nav"}
				        	{include_php "auth/layout_inc/left-nav.php"}
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