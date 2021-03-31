// подгрузить больше новостей на страницу

jQuery(document).ready(function ($) {
	
	$(document).on('click', '#news', function(){
		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadMoreNews',
			'query': posts,
			'page' : current_page
		};
		$.ajax({
			url: myPlugin.ajaxurl, // обработчик
			data: data, // данные
			type:'POST', // тип запроса
			success: function(data){
				if (data) { 
					$('#news').text('Загрузить ещё').before(data);
					
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#news").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#news').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});
});
