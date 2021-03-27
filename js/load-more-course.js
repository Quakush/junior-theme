// подгрузить больше курсов на страницу

jQuery(document).ready(function ($) {
	$(document).on('click', '#courses', function(){
		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': posts,
			'page' : current_page
		};
		$.ajax({
			url: myPlugin.ajaxurl, // обработчик
			data: data, // данные
			type: 'POST', // тип запроса
			success:function(data){
				if ( data ) { 
					$('#courses').text('Загрузить ещё').before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#courses").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#courses').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});
});
