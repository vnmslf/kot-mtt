$(document).ready(function() {
	var pictures = $('.pictures');
	pictures.each(function() {
		$(this).find('.pp').css('width', $(this).find('.dp').innerWidth() + 'px');
	})
})