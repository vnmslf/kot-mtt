$(document).ready(function() {
	$('.team-carousel').owlCarousel({
		loop: true,
		margin: 32,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			768: {
				items: 3,
			},
		},
		autoHeight: true,
		nav: true,
		dots: true,
		navContainer: $('.reviews__block').find('.nav'),
		navText: ['<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.1407 4.26326V2.75349C14.1407 2.62263 13.9903 2.55036 13.8887 2.63044L5.08401 9.5074C5.0092 9.56557 4.94867 9.64007 4.90703 9.7252C4.8654 9.81032 4.84375 9.90384 4.84375 9.99861C4.84375 10.0934 4.8654 10.1869 4.90703 10.272C4.94867 10.3571 5.0092 10.4316 5.08401 10.4898L13.8887 17.3668C13.9922 17.4468 14.1407 17.3746 14.1407 17.2437V15.734C14.1407 15.6383 14.0957 15.5465 14.0215 15.4879L6.99026 9.99958L14.0215 4.50935C14.0957 4.45076 14.1407 4.35896 14.1407 4.26326Z" fill="#fff" /></svg>', '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.1407 4.26326V2.75349C14.1407 2.62263 13.9903 2.55036 13.8887 2.63044L5.08401 9.5074C5.0092 9.56557 4.94867 9.64007 4.90703 9.7252C4.8654 9.81032 4.84375 9.90384 4.84375 9.99861C4.84375 10.0934 4.8654 10.1869 4.90703 10.272C4.94867 10.3571 5.0092 10.4316 5.08401 10.4898L13.8887 17.3668C13.9922 17.4468 14.1407 17.3746 14.1407 17.2437V15.734C14.1407 15.6383 14.0957 15.5465 14.0215 15.4879L6.99026 9.99958L14.0215 4.50935C14.0957 4.45076 14.1407 4.35896 14.1407 4.26326Z" fill="#fff" /></svg>'],
		pagination: true,
	});
	var seeAll = $('.see-all'),
		counter;
	seeAll.each(function() {
		counter = $(this).parents('section').find('.not-active').length;
		$(this).text($(this).text().replace('{{numbers}}', counter));
	})
	seeAll.on('click', function() {
		$(this).parents('section').find('.not-active').removeClass('not-active');
		$(this).hide();
	})
});