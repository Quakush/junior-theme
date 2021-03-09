"use strict";

(function () {
    let swiperShow = new Swiper('.options-slider__shown-container', {
        containerModifierClass: 'swiper-cunt-',
        slidesPerView: 1,
        spaceBetween: 70,
        allowTouchMove: false,
        // centeredSlides: true,
        loop: true,
        breakpoints: {
            375: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 1,
            },
            1440: {
                slidesPerView: 1,
            }
        },

        on: {
            realIndexChange: function () {
                console.log(swiperShow.realIndex + ' index');
            },
        },

    });

    let swiperList = new Swiper('.swiper-small', {
        spaceBetween: 25,
        // slidesPerView: 2,
        allowTouchMove: false,
        loop: true,
        navigation: {
            nextEl: '.options-slider__paginator-element--forward',
            prevEl: '.options-slider__paginator-element--back',
        },
        pagination: {
            el: '.options-slider__paginator',
            clickable: true,
            dynamicBullets: true,
            dynamicMainBullets: 1,
            type: 'custom',
            renderCustom: function (swiper, current) {
                if (current <= 9){
                    return '0' + current;

                } else {
                    return current;

                }
            },
        },
        breakpoints: {
            375: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 2,
            },
            1440: {
                slidesPerView: 2,
            }
        },


        on: {
            realIndexChange: function () {
                // console.log(swiperList.realIndex + ' index');
                swiperShow.realIndex = swiperList.realIndex;
                // swiperShow.slideTo(swiperList.realIndex);
                swiperShow.slideTo(++swiperShow.realIndex);
                console.log(swiperList.realIndex + ' index swiperShow');
            },
        },
    });

})();
