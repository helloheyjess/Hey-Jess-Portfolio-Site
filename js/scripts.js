$(function(){
	//your jQuery here

	//Initialize Stellar.js if window width is greater than 480px
	if ($(window).width() > 480) {
	   $.stellar({
	   	horizontalScrolling: false
	   });
	}
	
	// Initialize Smooth Scroll
	$('a').smoothScroll({
		speed: 800,
		offset: -75
	});

	//Initialize Fittext
	jQuery(".responsive_headline").fitText();

	
});