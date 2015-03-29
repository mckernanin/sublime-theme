jQuery(function($) { 
    $(document).ready(function() {

$('img[src$=".svg"]').svgInject();

      // Change header color on home page scroll past hero
	  $('.home-hero').next().waypoint(function() {
	      $('#main-header').toggleClass('green-header');
	  }, {
	    offset: '50'
	  })


    });
});