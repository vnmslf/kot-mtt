$('body').on('click', '.modal__close', function() {
	console.log('lol');
	$(this).parents('.modal').removeClass('open');
})