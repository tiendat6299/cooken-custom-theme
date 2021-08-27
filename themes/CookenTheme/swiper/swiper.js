jQuery(function($){$(document).ready(function() {
    // Swiper: Slider
        new Swiper('#ahihi', {
            slidesPerView: 3,
            paginationClickable: true,
            spaceBetween: 20,
            breakpoints: {
                1920: {
                    slidesPerView: 3,
                    spaceBetween: 24
                },
                1028: {
                    slidesPerView: 3,
                    spaceBetween: 24
                },
                769: {
                    slidesPerView: 3,
                    spaceBetween: 24
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }
            }
        });
    });
});