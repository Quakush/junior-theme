// подгрузка курсов по категориям

jQuery(document).ready(function ($) {

	// Контейнер с контентом
	var $mainBox = $('.courses__list');

	// Отправка ajax запроса по клику на option в select  в фильтре
	$('.categories__list a').click(function (e) {
		e.preventDefault();
		

		var linkCat = $(this).attr('data-cat');
		var titleCat = $(this).text();

		document.title = titleCat;
		history.pushState({page_title: titleCat}, titleCat, linkCat);

		ajaxCat(linkCat);
	});

	 // Отслеживание события нажатия кнопок браузера "Вперед/Назад"
    window.addEventListener("popstate", function (event) {
        document.title = event.state.page_title;
        ajaxCat(location.href);
    }, false);


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
                action: 'get_cat',
                link: linkCat
            },
            function (response) {
                $('.courses__item').remove();
                $mainBox
                    .html(response)
                    .animate({opacity: 1}, 300);
            });
    }
});
