$(document).ready(function() {
	$('#wyszukaj').keyup(function() {
		var searchText = $(this).val().toLowerCase();
		$.ajax({
			url: 'window.location.pathname',
			method: 'GET',

			success: function() {
				$('.row .col-6').each(function() {
					var articleText = $(this).find('h3').text().toLowerCase();
					var parentArticle = $(this).closest('.col-6');

					if (articleText.indexOf(searchText) === -1) {
						parentArticle.hide();
					} else {
						parentArticle.show();
					}
				});
			}
		});
	});
});