jQuery(function($){
	$('.join-us__slider-list').slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: false,
		dots: true
	});

	$('.news-slider__list').slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: false,
		dots: true
	});

	$('.immigration-slider__list').slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 4000,
		arrows: false,
		dots: true
	});
    
    if (screen.width < 768) {
    	$('.banners__list').slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 2000,
			arrows: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			
	    });
	// вызов slick
    }

    if (screen.width >= 768) {
    	$('.banners__list').slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 2000,
			arrows: false,
			slidesToShow: 5,
			slidesToScroll: 2
	    });
	// вызов slick
    }

});



