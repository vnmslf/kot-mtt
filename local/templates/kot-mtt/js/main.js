$(document).ready(function() {
	var body = $('body'),
		header = $('header');
	body.css('padding-top', header.outerHeight());

})
$(document).on('click', '.menu__button', function() {
	var menu__block = $(this).parents('.menu__block');
	if(menu__block.hasClass('open')) {
		$(this).parents('.menu__block').removeClass('open');
	} else {
		$(this).parents('.menu__block').addClass('open');
	}
})