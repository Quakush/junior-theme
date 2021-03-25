jQuery(document).ready(function ($) {

	$('#ask_questions').submit(function(event) {

		event.preventDefault();
		var endpoint = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
		var form = $('#ask_questions').serialize();
		var formdata = new FormData;

		formdata.append('action', 'ask_questions');
		formdata.append('ask_questions', form);

		$.ajax(endpoint, {

			type: 'POST',
			data: formdata,
			processData: false,
			contentType: false,

			success: function(response) {

				alert(response.data);

			},

			error: function(err) {

			}

		});

	});

});
