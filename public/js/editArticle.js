$(function () {

	console.log("DOM chargé");

	//var form = $('form');
	$('form').on('submit', function (event) {
		console.log('submit');

		console.log($('select[name=category_id]').val());

		if ( ! $('select[name=category_id]').val()) {
			// LE CHAMP EST VIDE

			$('select[name=category_id]').css('border', '1px solid red');
			
			event.preventDefault();
		}

		if ( ! $('select[name=author_id]').val()) {
			// LE CHAMP EST VIDE
			alert('veuillez renseigner le auteur)');
			event.preventDefault();
		}
		
	});

});