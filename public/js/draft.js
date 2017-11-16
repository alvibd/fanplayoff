(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {


        $(".slider-carousel-wrap").owlCarousel({
            autoplay: false,
            nav: true,
            dots: false,
            loop: false,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 12
                },
                768: {
                    items: 12
                },
                992: {
                    items: 12
                },
                1401: {
                    items: 12
                },
                1601: {
                    items: 13
                }
            }
        });




    });


    // jQuery(window).load(function () {


    // });


}(jQuery));