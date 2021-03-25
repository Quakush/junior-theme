// пдгрузить больше курсов на страницу

jQuery(function($){
	$(document).on('click', '#true_loadmore', function(){
		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#true_loadmore').text('Загрузить ещё').before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#true_loadmore").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#true_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});
});

// jQuery(function($){
// 	$('#true_loadcat').click(function(){
// 		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
// 		var data = {
// 			'action': 'loadmore',
// 			'query': posts,
// 			'page' : current_page
// 		};
// 		$.ajax({
// 			url:ajaxurl, // обработчик
// 			data:data, // данные
// 			type:'POST', // тип запроса
// 			success:function(data){
// 				if( data ) { 
// 					$('#true_loadcat').text('Загрузить ещё').before(data); // вставляем новые посты
// 					current_page++; // увеличиваем номер страницы на единицу
// 					if (current_page == max_pages) $("#true_loadcat").remove(); // если последняя страница, удаляем кнопку
// 				} else {
// 					$('#true_loadcat').remove(); // если мы дошли до последней страницы постов, скроем кнопку
// 				}
// 			}
// 		});
// 	});
// });
