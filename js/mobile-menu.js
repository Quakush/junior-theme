"use strict";

(function () {
var body = document.querySelector('body');
var menuBlock = document.querySelector('.top-header');
var menuButton = menuBlock.querySelector('.toggler');
var menu = menuBlock.querySelector('.mobile-nav');
var popUp = document.querySelector('.pop-up');
var signUpDropdowns = document.querySelectorAll('.sign-up__dropdown');
var checkboxConfidLabels = document.querySelectorAll('.mailpoet_checkbox_label');

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

for (var i = 0; i < checkboxConfidLabels.length; i++) {
	if (checkboxConfidLabels[i].querySelector('input[type="checkbox"]').checked == true) {
		checkboxConfidLabels[i].classList.add('mailpoet_checkbox_label--checked');
	} else {
		if (checkboxConfidLabels[i].classList.contains('mailpoet_checkbox_label--checked')) {
		     checkboxConfidLabels[i].classList.remove('mailpoet_checkbox_label--checked');
		}
	}
}

for (var i = 0; i < checkboxConfidLabels.length; i++) {

	checkboxConfidLabels[i].addEventListener('click', function(evt) {
		var target = event.target;
		target.classList.toggle('mailpoet_checkbox_label--checked');
	});
}


})();
