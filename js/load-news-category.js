// подгрузка курсов по категориям

jQuery(document).ready(function ($) {

	// Контейнер с контентом
	var $mainBox = $('.news-content__list');

	// Отправка ajax запроса по клику на категорию в бредкрамблес меню

	$('.news-links-list .news-links-list__item a').click(function (e) {
		e.preventDefault();

		var linkCat = $(this).attr('data-cat');
		var titleCat = $(this).text();

		document.title = titleCat;
		//history.pushState({page_title: titleCat}, titleCat, linkCat);

		ajaxCat(linkCat);
	});
   
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
    
});
