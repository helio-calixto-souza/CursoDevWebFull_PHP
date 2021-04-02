$(document).ready(function() {

	$('.rotaModal').on( "click", function() {
		//prevent the anchor tag from actually sending a request

		//fetch url from anchor tag's href attribute and make a GET request
		fetch($(this).attr('rota'))
		.then(response => response.text())
		.then(html => {
			$('span[tipo=rota_modal]').empty();
			$('span[tipo=rota_modal]').append(html);
			$('#'+$(this).attr('idModal')).modal('show');
		})	
	});

});