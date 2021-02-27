jQuery(function($){
	$(document).on('click', '#true_loadmore_blog', function(){
		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmoreblog',
			'query': posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#true_loadmore_blog').text('Загрузить ещё').before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#true_loadmore_blog").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#true_loadmore_blog').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});
});
