"use strict";

(function () {

	var optionSlider = document.querySelector('.options-slider');
	var sliderShowContainer = optionSlider.querySelector('.options-slider__shown-container');
	var sliderElements = optionSlider.querySelectorAll('.options-slider__list .options-slider__item');
	var forwardButton = optionSlider.querySelector('.paginator-slider__element--forward');
	var backButton = optionSlider.querySelector('.paginator-slider__element--back');
	var page = optionSlider.querySelector('.paginator-slider__page');

	var addActive = function (element) {
		element.classList.add('options-slider__article--active');
	}

	var hideElement = function (element) {
		element.classList.add('options-slider__item--hidden');
	}

	var showElement = function () {
		for (var i = 0; i < sliderElements.length; i++) {
			if (sliderElements[i].classList.contains('options-slider__item--hidden')) {
                sliderElements[i].classList.remove('options-slider__item--hidden');
			}
		}
	}

	var findNextSlide = function (number) {
		var nextSlide;
		showElement();

		for (var i = 0; i < sliderElements.length; i++) {
			if (sliderElements[i].getAttribute('data') == number) {
				hideElement(sliderElements[i]);
				nextSlide = sliderElements[i];
				
				return nextSlide;
			}
		}
	}

	forwardButton.addEventListener('click', function () {
		var slide = sliderShowContainer.querySelector('.options-slider__article');
		var number = slide.getAttribute('data');

		console.log(number);

		if (number < 3) {
			number++;
			var nextSlide = findNextSlide(number);
			sliderShowContainer.innerHTML = nextSlide.innerHTML;
            sliderShowContainer.querySelector('article').classList.add('options-slider__article--active');
			
			page.textContent = "0" + number;
			
		}

	});

	backButton.addEventListener('click', function () {
		var slide = sliderShowContainer.querySelector('.options-slider__article');
		var number = slide.getAttribute('data');

		console.log(number);

		if (number > 1) {
			number = number - 1;
			var nextSlide = findNextSlide(number);
			sliderShowContainer.innerHTML = nextSlide.innerHTML;
            sliderShowContainer.querySelector('article').classList.add('options-slider__article--active');
			
			page.textContent = "0" + number;
			
		}

	});

})();
