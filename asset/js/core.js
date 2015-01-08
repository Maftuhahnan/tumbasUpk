// masonry customization
jQuery(document).ready(function($) {
	var post_area = $('#post-area');
	post_area.imagesLoaded(function(){
		post_area.masonry({
		// options…
		isAnimated: true,
		animationOptions: {
			duration: 400,
			easing: 'linear',
			queue: false
		}
	});
	});
});

$(document).ready(function() {
 
  $("#clientsay").owlCarousel({
 
      navigation : false, 
      slideSpeed : 300,
      paginationSpeed : 400,
	  autoPlay: true,
	  items:1,
	  autoHeight : true,

 
  });
 
});