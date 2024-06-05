$(document).on('click', '.menu__button', function() {
	var menu__block = $(this).parents('.menu__block');
	if(menu__block.hasClass('open')) {
		$(this).parents('.menu__block').removeClass('open');
	} else {
		$(this).parents('.menu__block').addClass('open');
	}
})
$(document).on('click', '.order__btn', function() {
	var modal = $('.modal');
	modal.addClass('open');
})
$(document).on('click', '.modal__close', function() {
	var modal = $('.modal');
	modal.removeClass('open');
})