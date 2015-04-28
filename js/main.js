jQuery(function($) { 
    $(document).ready(function() {

	$('img[src$=".svg"]').svgInject();

		function isTouchDevice(){
    		return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
		}

      // Change header color on home page scroll past hero
	  $('.home-hero').next().waypoint(function() {
	      $('#main-header').toggleClass('green-header');
	  }, {
	    offset: '80'
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


    });
});