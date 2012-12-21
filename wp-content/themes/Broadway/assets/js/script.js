$(document).ready(function($){

	$(window).load(function(){

		/** Flexslider for Product Pages **/
		$('#product-flexslider').flexslider({
			animation: 'slide',
			animationSpeed: 650,
			itemWidth: '100%',
			slideshow: false
		});

		/** Flexslider for Homepage Testimonials **/
		$('#testimonial-slideshow').flexslider({
			animation: 'fade',
			animationSpeed: 350,
			randomize: true,
			slideshow: true,
			controlNav: false,
			directionNav: false,
			slideshowSpeed: 5000,
			smoothHeight: true,
			pauseOnHover: true,
			controlsContainer: '.testimonial-area'
		});
	});

	$('.cat-item a').mouseover(function(elem){

		//get the link name and make lower case to use
		var linkName = elem.currentTarget.innerText.toLowerCase();
		var linkNameFinal = linkName.replace(/&/g, "").replace(/ /, "-").replace(/ /, "");
		
		//get all the list elements
		var listElements = $('.gallery-area li');

		//loop through the list elements
		$(listElements).each(function(index){

			//add list element to variable
			var currentItem = $(listElements.get(index));

			//remove current visible class
			currentItem.removeClass("visible");

			if(currentItem.hasClass(linkNameFinal)){
				currentItem.addClass("visible");
			}
		});
	});

});