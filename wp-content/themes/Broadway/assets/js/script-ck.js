$(document).ready(function(e){var t=e(".accordion > dd");e(".accordion > dt > h4").click(function(){t.slideUp();e(this).parent().next().slideDown();return!1});e(window).load(function(){e(".flexslider").flexslider({animation:"slide",animationSpeed:650,itemWidth:"100%",slideshow:!1})})});