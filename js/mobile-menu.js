"use strict";

(function () {

var menuBlock = document.querySelector('.top-header');
var menuButton = menuBlock.querySelector('.toggler');
var menu = menuBlock.querySelector('.mobile-nav');
var popUp = document.querySelector('.pop-up');
var signUpDropdowns = document.querySelectorAll('.sign-up__dropdown');

menuButton.addEventListener('click', function () {
	menu.classList.toggle('mobile-nav--shown');
	menuBlock.classList.toggle('top-header--mobile');
	menuButton.classList.toggle('toggler--cross');
});

for (var i = 0; i < signUpDropdowns.length; i++) {
	signUpDropdowns[i].addEventListener('click', function (evt) {
		var target = event.currentTarget;
		target.querySelector('.sign-up__options').classList.toggle('sign-up__options--shown');
		var dropdownValue = target.querySelector('.sign-up__mark');
		dropdownValue.classList.toggle('sign-up__mark--opened');
		

		    var signUpOptions = target.querySelectorAll('.sign-up__options li');
         
			for (var j = 0; i < signUpOptions.length; j++) {
				signUpOptions[j].addEventListener('click', function (evt) {
					var aim = event.currentTarget;
					dropdownValue.textContent = aim.textContent;
				});
			}
		
	});
}

if (popUp) {
	var popUpButton = popUp.querySelector('.toggler');
	popUpButton.addEventListener('click', function () {
		popUp.classList.add('pop-up--close');
	});
}

})();
