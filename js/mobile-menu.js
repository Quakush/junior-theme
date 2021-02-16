"use strict";

(function () {

var menuBlock = document.querySelector('.top-header');
var menuButton = menuBlock.querySelector('.toggler');
var menu = menuBlock.querySelector('.mobile-nav');
var popUp = document.querySelector('.pop-up');

menuButton.addEventListener('click', function () {
	menu.classList.toggle('mobile-nav--shown');
	menuBlock.classList.toggle('top-header--mobile');
	menuButton.classList.toggle('toggler--cross');
});

if (popUp) {
	var popUpButton = popUp.querySelector('.toggler');
	popUpButton.addEventListener('click', function () {
		popUp.classList.add('pop-up--close');
	});
}

})();
