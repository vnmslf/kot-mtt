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
$(document).on('click', '.approve', function() {
	var _this = $('.approve');
	if(_this.find('input').attr('checked') == 'checked') {
		_this.removeClass('yes');
		_this.find('input').attr('checked', '');
	} else {
		_this.addClass('yes');
		_this.find('input').checked('checked');
	}
})
$(document).on('click', '.approve', function() {
	var _this = $('.approve');
	_this.toggleClass('lolo');
})