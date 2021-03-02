"use strict";

(function () {

    if (document.querySelector('.join-us__slider')) {
        var slider = document.querySelector('.join-us__slider');
        var slides = slider.querySelectorAll('.join-us__slider-item');
        var bullets = slider.querySelectorAll('.join-us__bullets li');

        var removeActiveClass = function () {
            for (var i = 0; i < slides.length; i++) {
                if (slides[i].classList.contains('join-us__slider-item--active')) {
                    slides[i].classList.remove('join-us__slider-item--active');
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
            element.classList.add('join-us__slider-item--active');
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
