"use strict";

(function () {

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

var showSlide = function (element) {
  element.classList.add('projects-slider__item--active');
};

for (var i = 0; i < bullets.length; i++) {
    bullets[i].addEventListener('click', function (evt) {
        var target = event.currentTarget;
        var number = target.getAttribute('data');
        removeActiveClass();
        showSlide(slides[number]);
  });
}

})();
