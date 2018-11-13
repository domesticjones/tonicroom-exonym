require('jquery-visible');
require('slick-carousel');
require('drawsvg');

jQuery(document).ready(() => {
	// Wrap embedded objects and force them into 16:9
	$('#container iframe, #container embed, #container video').not('.ignore-ratio').wrap('<div class="video-container" />');

	// HEADER: Responsive Nav Toggle
	$('#responsive-nav-toggle').click(e => {
		const $this = $(e.currentTarget);
		$this.toggleClass('is-active');
	});

	// MODULE: Background Transparency
	let scrollDistance = 0;
	let w_height = '';
	let b_height = '';
	$(window).on('load resize', () => {
		w_height = $(window).height();
		b_height = $('body').height();
	});
	$(window).on('scroll', () => {
		const scroll = $(window).scrollTop();
		const diff = b_height - w_height;
		scrollDistance = ((diff - scroll) / diff) + 0.25;
		$('#background-container').css('opacity', scrollDistance);
	});

	// MODULES: Animate onScreen
	$(window).on('load resize scroll', () => {
		$('.animate-on-enter').each((i, el) => {
			const $this = $(el);
			if ($this.visible(true)) {
				$this.addClass('is-visible');
			}
		});
		$('.animate-on-leave').each((i, el) => {
			const $this = $(el);
			if (!$this.visible(true)) {
				$this.removeClass('is-visible');
			}
		});
	});

	// MODULE: Home Page Logo Animation
	const homeLogo = $('#logo-home').drawsvg();
	homeLogo.drawsvg('animate');

	// MODULE: Tab Gallery
	$('#tabgallery-images').slick({
		arrows: false,
		dots: true,
		autoplay: true,
	});

	// MODULE: Tabbed Content
	$('.tabgallery-tab').click(e => {
		e.preventDefault();
		const $this = $(e.currentTarget);
		const target = $this.attr('href');
		$('.tabgallery-tab, .tabgallery-data-single').removeClass('is-active');
		$(`.tabgallery-data-single[data-tab="${target}"]`).addClass('is-active');
		$this.addClass('is-active');
	});
});
