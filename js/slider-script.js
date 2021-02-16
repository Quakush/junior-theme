"use strict";

(function () {

var slideIndex = 1;
var slides = document.getElementsByClassName("slider__item");
var dots = document.getElementsByClassName("dot");



function plusSlides(n) {
  showSlides(slideIndex += n);
};

function currentSlide(n) {
  showSlides(slideIndex = n);
};

function showSlides(n) {
  var i;
  
  if (n > slides.length) {
    slideIndex = 1;
  }

  if (n < 1) {
    slideIndex = slides.length;
  }

  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  
  if (slides) {
  slides[slideIndex-1].style.display = "flex";
  dots[slideIndex-1].className += " active";
  }

};

showSlides(slideIndex);

})();
