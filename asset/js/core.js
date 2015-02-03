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
	  singleItem:true,
	  autoHeight : true,

 
  });
  
  
 
});

//Nice Scroll
$(document).ready(

    function () {

        $("html").niceScroll({
            cursorcolor: "rgba(0, 0, 0, 0.5)",
            cursorwidth: "15px",
            cursorborderradius: "0px",
            autohidemode: "cursor",
            cursorborder: 'none',
            zindex: '99999'
        });

    }

);

// Light Box 
$(function() {
    $('#imgOpened').dialog({
        autoOpen:false
    });

    $(".second-effect a").click(function(e) {
        e.preventDefault();
        $('#imgOpened').dialog('open');
    });
});


