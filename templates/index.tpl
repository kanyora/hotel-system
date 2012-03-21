{extends "shop_base.tpl"}

{block "primary"}
	<div id="content" class="row box homerow">
		<script>
			jQuery(window).load(function() {
				jQuery('.blueberry').blueberry({
					interval : 5000,
					duration : 500,
					hoverpause : false,
					pager : true,
					keynav : true
				});
			});

		</script>
		<style>
			#mainslider {
				min-height: 305px;
			}
		</style>
		<div id="mainslider" class="blueberry">
			<ul class="slides">
				<li>
					<a href="{#BASE_URL#}/mac-mini-2/"> <img alt="Mac Mini" title="" src="{#BASE_URL#}/static/img/big1.jpg" width="960" /> </a>
				</li>
				<li>
					<a href="{#BASE_URL#}/products-page/portable-computers/macbook-air/"> <img alt="Macbook Air" title="" src="{#BASE_URL#}/static/img/big2.jpg" width="960" /> </a>
				</li>
				<li>
					<a href="{#BASE_URL#}/macbook-pro-2/"> <img alt="New Line Up" title="" src="{#BASE_URL#}/static/img/big3.jpg" width="960" /> </a>
				</li>
				<li>
					<a href="{#BASE_URL#}"> <img alt="Macbook Pro" title="" src="{#BASE_URL#}/static/img/big4.jpg" width="913" /> </a>
				</li>
			</ul>
		</div>
		<div class="col_12">
			<div id="entry" class="pad20both pad10bottom">
				<h1 style="text-align: center">Welcome to M.O.R.S</h1>
				<p style="text-align: center">
					Experience the most mouth watering, delicious and healthy meals with the best of services offered and serene environment. Mawar Restaurant promises maximum value for your money and a treat to ensure that you keep coming back for more.
				</p>
				<p style="text-align: center">
					We provide a range of dishes and services from various countries and even different parts of Kenya.
				</p>
				<p style="text-align: center">
					Mawar focuses on its original mission of continually improving the quality and value of its services, developing an excellent morale amongst its employees and maintaining a superior level of social and environmental awareness.
				</p>
				<p style="text-align: center">
					Mawar has maintained standards of food and service which rank among the best to be found anywhere in Nairobi or even the country
				</p>
				<p style="text-align: center">Pay a visit and enjoy!</p>
				</p>
			</div><!-- #pad20both -->
		</div><!-- #col_12 -->
		<div class="clear"></div>
		<!-- Hook up the FlexSlider -->
		<script type="text/javascript">
			jQuery(window).load(function() {
				jQuery('#productslider').flexslider({
					animation : "slide",
					slideshowSpeed : 7000,  //Integer: Set the speed of the slideshow cycling, in milliseconds
					animationDuration : 600,
					controlNav : false,
					controlsContainer : ".flexslider-container"
				});
				/* jQuery('#mainslider').flexslider({
				 slideshow: true,
				 slideshowSpeed: 4000,
				 animationDuration: 500,
				 directionNav: false,
				 pauseOnAction: true,
				 pauseOnHover: false
				 });*/
			});

		</script>
		<h2 style="text-align:center;">Latest Dishes</h2>
		<div class="flexslider-container" id="productslidercontainer">
			<div id="productslider" class="flexslider">
				<ul class="slides">
					<style>
						#productslidercontainer {
							min-height: 200px;
						}
					</style>
					<li>
						{foreach $dishes as $dish}
							<a href="{#BASE_URL#}/dishes/{$dish->id}/" title="Mac Mini"> <img alt="Mac Mini"  src="{#BASE_URL#}/media/uploads/dishes/images/{$dish->photo}" /> </a>
						{/foreach}
					</li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
		<div id="content-bottom-border" class="col_12"></div>
		<div id="content-bottom" class="col_12">
			&nbsp;&nbsp; <a href="{#BASE_URL#}/menu/">Menu</a> | 
			<a href="{#BASE_URL#}/services/">Services</a> | 
			<a href="{#BASE_URL#}/orders/cart/">Cart</a>
		</div><!-- #content-bottom -->
	</div><!-- #content -->
{/block}