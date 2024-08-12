$(document).ready(function() {
	var seeAll = $('.see-all'),
		counter;
	seeAll.each(function() {
		counter = $(this).parents('.section').find('.not-active').length;
		$(this).text($(this).text().replace('{{numbers}}', counter));
	})
	seeAll.on('click', function() {
		$(this).parents('.section').find('.not-active').removeClass('not-active');
		$(this).hide();
	})
});