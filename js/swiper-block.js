"use strict";

(function () {
    new Swiper('.swiper-block', {
        slidesPerView: 1,
        // centeredSlides: true,

        // on: {
        //     init: function () {
        //         console.log('1111111111');
        //     },
        // },

        breakpoints: {
            320: {
                allowTouchMove: true,
            },
            576: {
                allowTouchMove: true,
            },
            768: {
                allowTouchMove: true,
            },
            1024: {
                allowTouchMove: false,
                slidesPerView: 3,
            },
            1440: {
                allowTouchMove: false,
                slidesPerView: 3,
            },
            1920: {
                allowTouchMove: false,
                slidesPerView: 3,
            },

        }
    });


})();
