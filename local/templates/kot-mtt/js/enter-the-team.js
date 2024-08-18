$(document).ready(function() {
	$('.masked__phone').mask('+7 (999) 999-99-99');
})
$(document).ready(function() {
	$('.masked__birthday').mask('99/99/99');
})
$(document).on('click', '.check', function() {
	var form = $(this).parents('form');
	if(form.hasClass('active')) {
		form.removeClass('active');
	} else {
		form.addClass('active');
	}
})
$(document).on('click', '.approve', function() {
	var _this = $('.approve'),
		anketa = $('.anketa')
	if(_this.hasClass('yes')) {
		_this.removeClass('yes');
		anketa.removeClass('yes');
	} else {
		_this.addClass('yes');
		anketa.addClass('yes');
	}
})