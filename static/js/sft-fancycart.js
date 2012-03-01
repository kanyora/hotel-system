jQuery(document).ready(function() {
	
	jQuery("a#sft-cart-button").fancybox({
		'hideOnContentClick': true,
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	400, 
		'speedOut'		:	400, 
		'overlayShow'	:	false,
		'padding'       :   0,
		'centerOnScroll':   true
	});

	/* Apply fancybox to multiple items */
	
	jQuery("a.fancybox-image").fancybox({
		'hideOnContentClick': true,
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	400, 
		'speedOut'		:	400, 
		'overlayShow'	:	false,
		'padding'       :   0,
		'centerOnScroll':   true
	});
	
	/* Community Tab */
	
	jQuery(".showcommunity").click(function () {
	jQuery("#communitylinks").fadeIn("slow");
	});
	jQuery(".hidecommunity").click(function () {
	jQuery("#communitylinks").fadeOut("slow");
	});
			
		
});