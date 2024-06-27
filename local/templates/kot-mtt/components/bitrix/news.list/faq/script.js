$(document).ready(function() {
	$('body').on('click', '.faq__element', function() {
		$(this).parents('.faq__block').find('.faq__element').removeClass('open');
		$(this).addClass('open');
	})
})