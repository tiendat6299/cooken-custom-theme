jQuery(function($){
    $('.owl-carousel').owlCarousel({
        items:3,
        lazyLoad:true,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:4000,
        autoplaySpeed:4000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
        
    });



});


