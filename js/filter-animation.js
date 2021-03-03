"use strict";

(function () {

var filterBlock = document.querySelector('.filters');
if (filterBlock) {
	var categoryLinks = filterBlock.querySelectorAll('.categories__list a');
	var categoryDropdown = filterBlock.querySelector('.categories__dropdown');
	var categoryContainer = filterBlock.querySelector('.categories__list');
}


var removeActive = function () {
	for (var i = 0; i < categoryLinks.length; i++) {
		if (categoryLinks[i].classList.contains('categories__link--active')) {
			categoryLinks[i].classList.remove('categories__link--active');
		}
	}
};

if (categoryDropdown) {
    categoryDropdown.addEventListener('click', function () {
    	categoryDropdown.classList.add('categories__dropdown--open');
    	categoryContainer.classList.toggle('categories__list--shown');
    });
}

if (filterBlock) {
	for (var k = 0; k < categoryLinks.length; k++) {
		categoryLinks[k].addEventListener('click', function (evt) {
			var target = event.currentTarget;
			removeActive();
            target.classList.add('categories__link--active');
            categoryContainer.classList.remove('categories__list--shown');
		});
	}
}

})();
