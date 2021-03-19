
	$(document).ready(function() {
 
    $("#owl-demo").owlCarousel({

    navigation : true, // Show next and prev buttons

    slideSpeed : 300,
    paginationSpeed : 400,

    items : 1, 
    itemsDesktop : false,
    itemsDesktopSmall : false,
    itemsTablet: false,
    itemsMobile : false,
    autoHeight:true

    });

});


$('#owl-books-four').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    autoWidth:true,
    autoplay: true,
    autoPlaySpeed: 1000,
    autoPlayTimeout: 1000,
    autoplayHoverPause: true,
    dots: true,
    slideTransition: 'linear',
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});	
