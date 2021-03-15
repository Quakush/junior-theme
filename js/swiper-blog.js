"use strict";

(function () {
    let swiperBlog = Swiper;
    let init = false;

    /* Which media query
    **************************************************************/
    function swiperMode() {
        let mobile = window.matchMedia('(min-width: 0px) and (max-width: 1023px)');
        let desktop = window.matchMedia('(min-width: 1024px) and (max-width: 1920px)');

        // Enable (for mobile)
        if (mobile.matches) {
            if (!init) {
                init = true;
                swiperBlog = new Swiper('.blog-container', {
                    slidesPerView: 'auto',
                    loop: false,
                    spaceBetween: 33,
                    // loopedSlides: 1,
                    // slidesPerView: 4,
                    // spaceBetween: 33,
                    // centeredSlides: true,

                    // direction: 'horizontal',
                    // autoHeight: true,
                    // width: true,
                    // marginRight: 33,
                    // setWrapperSize: true,
                    // breakpoints: {
                    //     320: {
                    //         spaceBetween: 33,
                    //         slidesPerView: 5,
                    //
                    //     },
                    //     //
                    //     //     // 576: {
                    //     //     //     slidesPerView: 5,
                    //     //     // },
                    //     //     // 768: {
                    //     //     //     slidesPerView: 8,
                    //     //     //
                    //     //     //     // allowTouchMove: true,
                    //     //     // },
                    //     //     // 1024: {
                    //     //     //     slidesPerView: 2,
                    //     //     //
                    //     //     // },
                    //     //     // 1440: {
                    //     //     //     slidesPerView: 2,
                    //     //     //
                    //     //     // },
                    //     //     // 1920: {
                    //     //     //     slidesPerView: 12,
                    //     //     //
                    //     //     // },
                    // }
                });
            }
        }

        // Disable (for desktop)
        else if (desktop.matches) {
            console.log('&&&&&&&');
            swiperBlog.destroy();
            init = false;
        }
    }

    /* On Load
    **************************************************************/
    window.addEventListener('load', function () {
        console.log('!!!!!!');
        swiperMode();
    });

    /* On Resize
    **************************************************************/
    window.addEventListener('resize', function () {
        swiperMode();
    });
})();
