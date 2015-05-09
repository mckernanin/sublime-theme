jQuery(function($) { 
    $(document).ready(function() {

    	$('.bio').on('click', function(){
    		var face = $(this).find('.person');
    		face.toggleClass('toggled');
    		if(face.hasClass('toggled')){
    			$(this).find('.person').addClass('hasToggled');
    		} 
    	})

    	if($('body').hasClass('page-team')) {
	        $(window).load(function(){
	            $(".bio-paragraph").mCustomScrollbar();
	        });
    	}

	$('img[src$=".svg"]').svgInject();

		function isTouchDevice(){
    		return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
		}

	// Change header color on home page scroll past hero
	$('.home-hero').next().waypoint(function() {
		$('#main-header').toggleClass('green-header');
	}, {
		offset: '115'
	})

	if( ($('.home-hero').length) && ( isTouchDevice() != true) ){

		var section = $('.home-hero .et_pb_text');
		section.attr({'data-start': 'opacity: 1;', 'data-400': 'opacity: 0;'})

		skrollr.init({
			forceHeight: false,
		});

	}

	$('li#menu-item-53 a').on('click', function(e){
		e.preventDefault();
		$('#contact-overlay').addClass('active');
		$('body').addClass('noscroll');
	})

	$('#closeContact').on('click', function(e){
		e.preventDefault();
		$('#contact-overlay').removeClass('active');
		$('body').removeClass('noscroll');
	})

// Transforming Hamburger Icon state toggle
    	var hamburger = $('#hamburger-icon');
    	var header = $('#main-header');
    	hamburger.click(function() {
    		hamburger.toggleClass('active');
    		header.toggleClass('nav-open');
    		if (hamburger.hasClass('active')) {
				$('#hamburger-icon .text').text('CLOSE');
    		} else {
    			$('#hamburger-icon .text').text('MENU');
    		};
    		return false;
    	});


    });
});