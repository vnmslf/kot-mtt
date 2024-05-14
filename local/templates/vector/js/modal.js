$('body').on('click', '[data-max]', function() {
	var modal = $('.modal');
	modal.addClass('opened');
	modal.find('.portfolio__item').find('img').attr('src', $(this).attr('data-max'));
})
$('body').on('click', '[data-exit]', function() {
	$('.modal').removeClass('opened');
})