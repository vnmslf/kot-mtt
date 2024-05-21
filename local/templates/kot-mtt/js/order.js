$(document).ready(function() {
	$('.masked__phone').mask('+7 (999) 999-99-99');
})
$(document).on('click', '.check', function() {
	var form = $(this).parents('form');
	if(form.hasClass('active')) {
		form.removeClass('active');
	} else {
		form.addClass('active');
	}
})