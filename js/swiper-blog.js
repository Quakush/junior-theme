"use strict";

(function () {
    new Swiper('.blog-container', {
        slidesPerView: 5,

        breakpoints: {
            320: {
                slidesPerView: 3,
            },
            576: {
                slidesPerView: 5,
            },
            768: {
                slidesPerView: 8,
            },
            1024: {
                allowTouchMove: false,
                slidesPerView: 10,
            },
            1440: {
                allowTouchMove: false,
                slidesPerView: 4,
            },
            1920: {
                allowTouchMove: false,
            },
        }
    });
})();
