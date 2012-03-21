$.fn.animateHighlight = function(highlightColor, duration) {
	var highlightBg = highlightColor || "#FFFF9C";
	var animateMs = duration || 1500;
	var originalBg = this.css("backgroundColor");
	this.stop().css("background-color", highlightBg).animate({backgroundColor: originalBg}, animateMs);
};

$(function(){
	$("form.i-validate").validate();
	// Lightbox
	if (params.load_fancybox) {
		$('a.zoom').fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600,
			'speedOut'		:	200,
			'overlayShow'	:	true
		});
	}

	// Star ratings
	$('#rating').hide().before('<p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p>');

	$('p.stars a').click(function(){
		$('#rating').val($(this).text());
		$('p.stars a').removeClass('active');
		$(this).addClass('active');
		return false;
	});

	// Price slider
	var min_price = parseInt($('.price_slider_amount #min_price').val());
	var max_price = parseInt($('.price_slider_amount #max_price').val());

	if (params.min_price) {
		current_min_price = params.min_price;
	} else {
		current_min_price = min_price;
	}

	if (params.max_price) {
		current_max_price = params.max_price;
	} else {
		current_max_price = max_price;
	}

	$('.price_slider').slider({
		range: true,
		min: min_price,
		max: max_price,
		values: [ current_min_price, current_max_price ],
		create : function( event, ui ) {
			$( ".price_slider_amount span" ).html( params.currency_symbol + current_min_price + " - " + params.currency_symbol + current_max_price );
			$( ".price_slider_amount #min_price" ).val(current_min_price);
			$( ".price_slider_amount #max_price" ).val(current_max_price);
		},
		slide: function( event, ui ) {
			$( ".price_slider_amount span" ).html( params.currency_symbol + ui.values[ 0 ] + " - " + params.currency_symbol + ui.values[ 1 ] );
			$( "input#min_price" ).val(ui.values[ 0 ]);
			$( "input#max_price" ).val(ui.values[ 1 ]);
		}
	});

	// Quantity buttons
	$("div.quantity, td.quantity").append('<input type="button" value="+" id="add1" class="plus" />').prepend('<input type="button" value="-" id="minus1" class="minus" />');
	$(".plus").click(function()
	{
		var currentVal = parseInt($(this).prev(".qty").val());

		if (!currentVal || currentVal=="" || currentVal == "NaN") currentVal = 0;

		$(this).prev(".qty").val(currentVal + 1);
	});

	$(".minus").click(function()
	{
		var currentVal = parseInt($(this).next(".qty").val());
		if (currentVal == "NaN") currentVal = 0;
		if (currentVal > 0)
		{
			$(this).next(".qty").val(currentVal - 1);
		}
	});

	/* states */
    var states_json = params.countries.replace(/&quot;/g, '"');
    var states = $.parseJSON( states_json );

    $('select.country_to_state').change(function(){

        var country = $(this).val();
        var state_box = $('#' + $(this).attr('rel'));

        var input_name = $(state_box).attr('name');
        var input_id = $(state_box).attr('id');

        if (states[country]) {
            var options = '';
            var state = states[country];
            var state_selected = params.billing_state;
            if (input_name == 'calc_shipping_state') {
                state_selected = $('#calc_shipping_state').val();
            }
            else {
                state_selected = params.shipping_state;
            }
            for(var index in state) {

                if (state_selected == index) {
                    options = options + '<option value="' + index + '" selected="selected">' + state[index] + '</option>';
                } else {
                    options = options + '<option value="' + index + '">' + state[index] + '</option>';
                }
            }
            if ($(state_box).is('input')) {
                // Change for select
                $(state_box).replaceWith('<select name="' + input_name + '" id="' + input_id + '"><option value="">' + params.select_state_text + '</option></select>');
                state_box = $('#' + $(this).attr('rel'));
            }
            $(state_box).html(options);
        } else {
            if ($(state_box).is('select')) {
                $(state_box).replaceWith('<input class="input-text" type="text" placeholder="' + params.state_text + '" name="' + input_name + '" id="' + input_id + '" />');
                state_box = $('#' + $(this).attr('rel'));
            }
        }

    }).change();

	/* Tabs */
	$('#tabs .panel:not(#tabs .panel)').hide();
	$('#tabs li a').click(function(){
		var href = $(this).attr('href');
		$('#tabs li').removeClass('active');
		$('div.panel').hide();
		$('div' + href).show();
		$(this).parent().addClass('active');
		$.cookie('current_tab', href);
		return false;
	});
	if ($('#tabs li.active').size()==0) {
		$('#tabs li:first a').click();
	} else {
		$('#tabs li.active a').click();
	}

	/* Shipping calculator */

	$('.shipping-calculator-form').hide();

	$('.shipping-calculator-button').click(function() {
	  $('.shipping-calculator-form').slideToggle('slow', function() {
		// Animation complete.
	  });
	});

	// Stop anchors moving the viewport

	$(".shipping-calculator-button").click(function() {return false;});

	$("input[name=shipping_rates]").click(function(){
		var dataString = 'shipping_rates=' + $(this).val();
		var cart_url = $("input[name=cart-url]").val();
		$('.cart_totals_table').block({message: null, overlayCSS: {background: '#fff url(' + params.assets_url + '/assets/images/ajax-loader.gif) no-repeat center', opacity: 0.6}});
		$.ajax({
			type: "POST",
			url: cart_url,
			data: dataString,
			success: function(ret) {
				var jqObj = $(ret);
				$('.cart_totals_table').replaceWith(jqObj.find('.cart_totals_table'));
				$('.cart_totals_table').unblock();
			}
		});
	});

	/*################# VARIATIONS ###################*/

	//check if two arrays of attributes match
	function variations_match(attrs1, attrs2) {
		var match = true;
		for(name in attrs1) {
			var val1 = attrs1[name].toLowerCase();
			var val2 = attrs2[name].toLowerCase();

			if(val1.length != 0 && val2.length != 0 && val1 != val2) {
				match = false;
			}
		}

		return match;
	}

	//search for matching variations for given set of attributes
	function find_matching_variations(attributes) {
		var matching = [];

		for(i = 0; i < product_variations.length; i++) {
			var variation = product_variations[i];
			if(variations_match(variation.attributes, attributes)) {
				matching.push(variation);
			}
		}

		return matching;
	}

	//disable option fields that are unavaiable for current set of attributes
	function update_variation_values(variations) {

        // Loop through selects and disable/enable options based on selections
        $('.variations select').each(function( index, el ){

        	current_attr_select = $(el);

        	// Disable all
        	current_attr_select.find('option:gt(0)').attr('disabled', 'disabled');

        	// Get name
	        var current_attr_name 	= current_attr_select.attr('name');

	        // Loop through variations
	        for(num in variations) {
	            var attributes = variations[num].attributes;

	            for(attr_name in attributes) {
	                var attr_val = attributes[attr_name];

	                if(attr_name == current_attr_name) {
	                    if (attr_val) {
	                    	current_attr_select.find('option[value="'+attr_val+'"]').removeAttr('disabled');
	                    } else {
	                    	current_attr_select.find('option').removeAttr('disabled');
	                    }
	                }
	            }
	        }

        });

	}

	//show single variation details (price, stock, image)
	function show_variation(variation) {
		var img = $('div.images img:eq(0)');
		var link = $('div.images a.zoom:eq(0)');
		var o_src = $(img).attr('original-src');
		var o_link = $(link).attr('original-href');

		var variation_image = variation.image_src;
		var variation_link = variation.image_link;

		$('.single_variation').html( variation.price_html + variation.availability_html );

		if (!o_src) {
			$(img).attr('original-src', $(img).attr('src'));
		}

		if (!o_link) {
			$(link).attr('original-href', $(link).attr('href'));
		}

		if (variation_image && variation_image.length > 1) {
			$(img).attr('src', variation_image);
			$(link).attr('href', variation_link);
		} else {
			$(img).attr('src', o_src);
			$(link).attr('href', o_link);
		}

		$('.product_meta .sku').remove();
		$('.product_meta').append(variation.sku);

		$('.shop_attributes').find('.weight').remove();
		if ( variation.a_weight ) {
			$('.shop_attributes').append(variation.a_weight);
		}

		$('.shop_attributes').find('.length').remove();
		if ( variation.a_length ) {
			$('.shop_attributes').append(variation.a_length);
		}

		$('.shop_attributes').find('.width').remove();
		if ( variation.a_width ) {
			$('.shop_attributes').append(variation.a_width);
		}

		$('.shop_attributes').find('.height').remove();
		if ( variation.a_height ) {
			$('.shop_attributes').append(variation.a_height);
		}

		$('.variations_button, .single_variation').slideDown();
	}

	//when one of attributes is changed - check everything to show only valid options
	function check_variations() {
		$('form input[name=variation_id]').val('');
		$('.single_variation').text('');
		$('.variations_button, .single_variation').slideUp();

		$('.product_meta .sku').remove();
		$('.shop_attributes').find('.weight').remove();
		$('.shop_attributes').find('.length').remove();
		$('.shop_attributes').find('.width').remove();
		$('.shop_attributes').find('.height').remove();

		var all_set = true;
		var current_attributes = {};

		$('.variations select').each(function(){
			if ($(this).val().length == 0) {
				all_set = false;
			}

			current_attributes[$(this).attr('name')] = $(this).val();
		});
		var matching_variations = find_matching_variations(current_attributes);

		if(all_set) {
			var variation = matching_variations.pop();

			$('form input[name=variation_id]').val(variation.variation_id);
			show_variation(variation);
		} else {
			update_variation_values(matching_variations);
		}
	}

	$('.variations select').change(function(){
		//make sure that only selects before this one, and one after this are enabled
		var num = $(this).data('num');

		if($(this).val().length > 0) {
			num += 1;
		}

		var selects = $('.variations select');
		selects.filter(':lt('+num+')').removeAttr('disabled');
		selects.filter(':eq('+num+')').removeAttr('disabled').val('');
		selects.filter(':gt('+num+')').attr('disabled', 'disabled').val('');

		check_variations($(this));
	});

	//disable all but first select field
	$('.variations select:gt(0)').attr('disabled', 'disabled');

	//numerate all selects
	$.each($('.variations select'), function(i, item){
		$(item).data('num', i);
	});

});

if (params.is_checkout==1) {

	var updateTimer;
	var jqxhr;

	function update_checkout() {

		if (jqxhr) jqxhr.abort();

		var method		   = $('#shipping_method').val();
		var payment_method = $('input[name=payment_method]:checked').val();
		var country 	   = $('#billing-country').val();
		var state 		   = $('#billing-state').val();
		var postcode 	   = $('input#billing-postcode').val();

		if ($('#shiptobilling input').is(':checked') || $('#shiptobilling input').size()==0) {
			var s_country 	= $('#billing-country').val();
			var s_state 	= $('#billing-state').val();
			var s_postcode 	= $('input#billing-postcode').val();

		} else {
			var s_country 	= $('#shipping-country').val();
			var s_state 	= $('#shipping-state').val();
			var s_postcode 	= $('input#shipping-postcode').val();
		}

		$('#order_methods, #order_review').block({message: null, overlayCSS: {background: '#fff url(' + params.assets_url + '/assets/images/ajax-loader.gif) no-repeat center', opacity: 0.6}});

		var data = {
			action: 			'jigoshop_update_order_review',
			security: 			params.update_order_review_nonce,
			shipping_method: 	method,
			country: 			country,
			state: 				state,
			postcode: 			postcode,
			s_country: 			s_country,
			s_state: 			s_state,
			s_postcode: 		s_postcode,
			payment_method:     payment_method,
			post_data:			$('form.checkout').serialize()
		};

		jqxhr = $.ajax({
			type: 		'POST',
			url: 		params.ajax_url,
			data: 		data,
			success: 	function( response ) {
				$('#order_methods, #order_review').remove();
				$('#order_review_heading').after(response);
				$('#order_review input[name=payment_method]:checked').click();
			}
		});

	}

	$(function(){

		$('p.password').hide();

		$('input.show_password').change(function(){
			$('p.password').slideToggle();
		});

		$('div.shipping-address').hide();

		$('#shiptobilling input').change(function(){
			$('div.shipping-address').hide();
			if (!$(this).is(':checked')) {
				$('div.shipping-address').slideDown();
			}
		}).change();

		if (params.option_guest_checkout=='yes') {

			$('div.create-account').hide();

			$('input#createaccount').change(function(){
				$('div.create-account').hide();
				if ($(this).is(':checked')) {
					$('div.create-account').slideDown();
				}
			}).change();

		}

		$('.payment_methods input.input-radio').live('click', function(){
			$('div.payment_box').hide();
			if ($(this).is(':checked')) {
				$('div.payment_box.' + $(this).attr('ID')).slideDown();
			}
		});

		$('#order_review input[name=payment_method]:checked').click();

		$('form.login').hide();

		$('a.showlogin').click(function(e){
			e.preventDefault();
			$('form.login').slideToggle();
		});

		/* Update totals */
		$('#shipping_method').live('change', function(){
			clearTimeout(updateTimer);
			update_checkout();
		}).change();
		$('input#billing-country, input#billing-state, #billing-postcode, input#shipping-country, input#shipping-state, #shipping-postcode').live('keydown', function(){
			clearTimeout(updateTimer);
			updateTimer = setTimeout("update_checkout()", '5000');
		});
		$('select#billing-country, select#billing-state, select#shipping-country, select#shipping-state, #shiptobilling input').live('change', function(){
			clearTimeout(updateTimer);
			update_checkout();
		});

		/* AJAX Form Submission */
		$('form.checkout').submit(function(){
			var form = this;
			$(form).block({message: null, overlayCSS: {background: '#fff url(' + params.assets_url + '/assets/images/ajax-loader.gif) no-repeat center', opacity: 0.6}});
			$.ajax({
				type: 		'POST',
				url: 		params.checkout_url,
				data: 		$(form).serialize(),
				success: 	function( code ) {
								$('.jigoshop_error, .jigoshop_message').remove();
								try {
									success = $.parseJSON( code );
									window.location = decodeURI(success.redirect);
								}
								catch(err) {
								  	$(form).prepend( code );
									$(form).unblock();
									$.scrollTo($(form).parent(), {easing:'swing'});
								}
							},
				dataType: 	"html"
			});
			return false;
		});

	});
}

//message fade in
$(document).ready(function(){
	$('.jigoshop_error, .jigoshop_message').css('opacity', 0);
	setTimeout(function(){$('.jigoshop_error, .jigoshop_message').animate({opacity:1}, 1500);},100);
});
