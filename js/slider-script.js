"use strict";

(function () {


if (document.querySelector('.projects-slider')) {
    var slider = document.querySelector('.projects-slider');
    var slides = slider.querySelectorAll('.projects-slider__item');
    var bullets = slider.querySelectorAll('.projects-slider__bullets li');


    var removeActiveClass = function () {
        for (var i = 0; i < slides.length; i++) {
            if (slides[i].classList.contains('projects-slider__item--active')) {
                slides[i].classList.remove('projects-slider__item--active');
            }
        }
    };

    var removeActiveBullet = function () {
        for (var i = 0; i < bullets.length; i++) {
            if (bullets[i].classList.contains('bullets__active')) {
                bullets[i].classList.remove('bullets__active');
            }
        }
    }

    var showSlide = function (element) {
        element.classList.add('projects-slider__item--active');
    };

    for (var i = 0; i < bullets.length; i++) {
        bullets[i].addEventListener('click', function (evt) {
            var target = event.currentTarget;
            var number = target.getAttribute('data');
            removeActiveBullet();
            removeActiveClass();
            showSlide(slides[number]);
            target.classList.add('bullets__active');
        });
    }

}




})();
