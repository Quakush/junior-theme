"use strict";

(function () {
    new Swiper('.blog-container', {
        // spaceBetween: 10,
        // slidesPerView: 12

        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 8,
            },
            576: {
                slidesPerView: 6,
                spaceBetween: 14,
            },
            768: {
                slidesPerView: 8,
                spaceBetween: 16,
            },
            1024: {
                slidesPerView: 10,
                spaceBetween: 8,
            },
            1440: {
                allowTouchMove: false,
                slidesPerView: 10,
                spaceBetween: 12,
            },
            1920: {
                allowTouchMove: false,
                slidesPerView: 10,
                spaceBetween: 15,
            },

        }
    });


})();
