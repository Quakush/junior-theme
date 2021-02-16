/*AJAX*/

var page = 2;
jQuery(document).ready(function($){
	$('body').on('click', '#more_posts', function() {
		var template = $(this).data('template');
		var data = {
			'action': 'load_posts_by_ajax',
			'page': page,
			'security': blog.security,
			'template': template
		};
		$.post(blog.ajaxurl, data, function(response) {
			if($.trim(response) != '') {
				$('.courses__list').append(response);
				page++;
			} else {
				$('#more_posts').hide();
			}
		});
	});
});

var page1 = 2;
jQuery(document).ready(function($){
	$('body').on('click', '.cat_button', function() {
		var id = $(this).data('id');
		var template = 'very';
		var mayThis = $(this);
		var link = $(this).data('link');
		$('#go_to_rz').attr('href', link);
		var data = {
			'action': 'load_posts_by_ajax',
			'page': page1,
			'security': blog.security,
			'id': id,
			'template': template
		};
		$.post(blog.ajaxurl, data, function(response) {
			if($.trim(response) != '') {
				$(".courses__list").empty()
				$('.courses__list').append(response);
				page++;
				$(mayThis).addClass('active');
				$('.cat_button').not(mayThis).removeClass('active');
			}
		});
	});
});
