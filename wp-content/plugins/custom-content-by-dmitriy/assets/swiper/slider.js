jQuery(document).ready(function($) {
	$.fancybox.defaults.backFocus = false;
	$.fancybox.defaults.closeClickOutside = true;

	if ($('.swiper-works-slider').length > 0)
	{
		let swiper_works_slider = new Swiper('.swiper-works-slider', {
			spaceBetween: 30,
			slidesPerView: 2,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			breakpoints: {
				768: {
					slidesPerView: 1,
				},
			},
		});
	}
});