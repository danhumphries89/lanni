$(document).ready(function($){

	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: 'slide',
			animationSpeed: 650,
			itemWidth: '100%',
			slideshow: false
		});
	});

	$('.cat-item a').mouseover(function(elem){
		
		var linkName = elem.currentTarget.innerText.toLowerCase()
		var linkNameFinal = linkName.replace(/ /g, "_");
		
		console.log(linkNameFinal);

		

	});

});