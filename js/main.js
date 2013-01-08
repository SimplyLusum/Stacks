// Smooth Scroll
		    $(document).ready(function() {
		    
		      $('.nav a').smoothScroll({offset: -73});
		    
		    });

// Scrollspy offset
$('[data-spy="scroll"]').scrollspy({ offset: 100 });


// Tooltip
	  jQuery(document).ready(function () {
	    $("[rel=tooltip]").tooltip();
	  });

	
// Popover
	  jQuery(document).ready(function () {
	    $("[rel=popover]").popover();
	  });


// Carousel	Auto
		jQuery(document).ready(function() {
			 $('#myCarousel-auto').carousel({
				   interval: 5000,
					  cycle: true
			 });
		});
		var $ = jQuery.noConflict();
		
		
		
		