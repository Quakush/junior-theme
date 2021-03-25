// подгрузка курсов по категориям

jQuery(document).ready(function ($) {

	// Контейнер с контентом
	var $mainBox = $('.blog-content__list');

	// Отправка ajax запроса по клику на категорию в бредкрамблес меню

	$('.blog-links-list .blog-links-list__item a').click(function (e) {
		e.preventDefault();

		var linkCat = $(this).attr('data-cat');
		var titleCat = $(this).text();

		document.title = titleCat;
		//history.pushState({page_title: titleCat}, titleCat, linkCat);

		ajaxCat(linkCat);
	});

  //   $('.categories__list .categories__item--all a').click(function (e) {
  //       e.preventDefault();

  //       document.title = "Все курсы";
  //       var dropDownText = "Выберите специальность";
  //       $dropDown.html(dropDownText);

  //       ajaxAllCourses();
  //   });

	 // // Отслеживание события нажатия кнопок браузера "Вперед/Назад"
  //   window.addEventListener("popstate", function (event) {
  //       document.title = event.state.page_title;
  //       ajaxCat(location.href);
  //   }, false);


    /**
     * Ajax запрос постов из рубрики по переданной ссылке на неё
     *
     * @param linkCat ссылка на рубрику
    */
    function ajaxCat(linkCat) {
        $mainBox.animate({opacity: 0.5}, 300);

        jQuery.post(
            myPlugin.ajaxurl,
            {
                action: 'get_news_cat',
                link: linkCat
            },
            function (response) {
                $('.blog-content__item').remove();
                $mainBox
                    .html(response)
                    .animate({opacity: 1}, 300);
            });
    }

    // function ajaxAllCourses() {
    //     $mainBox.animate({opacity: 0.5}, 300);

    //     jQuery.post(
    //         myPlugin.ajaxurl,
    //         {
    //             action: 'get_courses'
    //         },
    //         function (response) {
    //             $('.courses__item').remove();
    //             $mainBox
    //                 .html(response)
    //                 .animate({opacity: 1}, 300);
    //         });
    // }
});
