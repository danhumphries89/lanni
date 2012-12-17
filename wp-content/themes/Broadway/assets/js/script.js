$(document).ready(function($){

	var allPanels = $('.accordion > dd');

	$('.accordion > dt > h4').click(function() {
		allPanels.slideUp();
		$(this).parent().next().slideDown();
		return false;
	});

	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: 'slide',
			animationSpeed: 650,
			itemWidth: '100%',
			slideshow: false
		});
	});

});