$(function(){
	//your jQuery here
	$.stellar({
		horizontalScrolling: false
	});

	// Hide menu item content on load
	$('.toggled').hide();

	// When .skill-title is clicked
	$('.skill-title').on('click', function(){
	
		// Change title bar colour
		$(this).toggleClass('chosen-btn');

		// Toggle plus and minus symbols
		$(this).children('i').toggleClass("fa-plus, fa-minus");

		// Toggle display of menu item content 
		$(this).next().slideToggle("slow");
	})

	// Initialize Smooth Scroll
	$('a').smoothScroll({
		speed: 800,
		offset: -75
	});

	//Initialize Fittext
	jQuery(".responsive_headline").fitText();

});