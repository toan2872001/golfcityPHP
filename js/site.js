jQuery(function($) {
	
	/*--------------------
	Mobile nav
	--------------------*/
	$('.mobile-nav-toggler').on('click', function() {
		$('html').toggleClass('active');
	});
	$('.mobile-nav-toggler, .mobile-nav').on('click', function(e) {
		e.stopPropagation();
	});
	$('html, body').on('click', function(e) {
		if( $('html').hasClass('active') ) {
			e.preventDefault();
			$('html').removeClass('active');
		}
	});
	
	/*--------------------
	Login
	--------------------*/
	$('.toggle-module-login').on('click', function() {
		$('.module-login').fadeToggle(100);
	});
	
	/*--------------------
	Site navigation scroll
	--------------------*/
	$(window).scroll(function() {
		if( $(window).scrollTop() > $('#site-nav').offset().top ) {
			$('#site-nav-clone').fadeIn(0);
		} else {
			$('#site-nav-clone').fadeOut(0);
		}
	});
	
	/*--------------------
	Site slider
	--------------------*/
	$('.site-slider .owl-carousel').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed: 800,
		dots: false,
		nav: true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
	});
	
	/*--------------------
	Mobile products
	--------------------*/
	var mobileProducts = function() {
		$('.mobile-products').each(function() {
			if( $(window).width() < 768 ) {
				$(this).owlCarousel({
					loop: true,
					dots: false,
					nav: true,
					navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
					smartSpeed: 400,
					margin: 10,
					autoWidth: true
				});
			}
		});
	}
	mobileProducts();
	$(window).resize(function() {
		 mobileProducts();
	});
	
	/*--------------------
	Filter toggler
	--------------------*/
	$('.filter-toggler').on('click', function() {
		$('.filter').toggle(0, 'swing', function() {
			$('html, body').animate({
				scrollTop: 0
			}, 400);
		});
	});
	
	/*--------------------
	Fancybox
	--------------------*/
	$('.fancybox').fancybox({
		openEffect	: 'elastic',
		closeEffect	: 'elastic',
	});
	
	/*--------------------
	Tooltip
	--------------------*/
	$('[data-toggle="tooltip"]').tooltip();
	
	/**
	 * Add scrollspy
	 */
	$('body').scrollspy({target: '#scrollspy'});
	$('#scrollspy a').on('click', function(event){
		event.preventDefault();		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 400);
	});
	
	/**
	 * Scroll top
	 */
	if( $(window).scrollTop() > 200 ) {
		$('.scroll-top').fadeIn(200);
	} else {
		$('.scroll-top').fadeOut(200);
	}
	$(window).scroll(function() {
		if( $(window).scrollTop() > 200 ) {
			$('.scroll-top').fadeIn(200);
		} else {
			$('.scroll-top').fadeOut(200);
		}
	});
	$('.scroll-top').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ 
			scrollTop: '0', 
		}, 400);
	});
	
	/*--------------------
	Range slider
	--------------------*/
	$filterPrice = $('#filter-price');
	$filterPrice.ionRangeSlider({
		hide_min_max: true,
		keyboard: true,
		min: $filterPrice.data('min-price'),
		max: $filterPrice.data('max-price'),
		from: $filterPrice.data('from-price'),
		to: $filterPrice.data('to-price'),
		step: 1000,
		type: 'double',
		postfix: 'đ'
	});
	
	/*--------------------
	Single product gallery
	--------------------*/
	var sync1 = $('.single-product-images'),
		sync2 = $('.single-product-thumbs'),
		duration = 300,
		thumbs = 5;
	sync1.on('click', '.owl-next', function () {
		sync2.trigger('next.owl.carousel')
	});
	sync1.on('click', '.owl-prev', function () {
		sync2.trigger('prev.owl.carousel')
	});
	sync1.owlCarousel({
		center : true,
		loop: true,
		items: 1,
		dots: false,
		nav: false,
	})
	.on('dragged.owl.carousel', function (e) {
		if (e.relatedTarget.state.direction == 'left') {
			sync2.trigger('next.owl.carousel')
		} else {
			sync2.trigger('prev.owl.carousel')
		}
	});
	sync2.on('click', '.owl-next', function () {
		sync1.trigger('next.owl.carousel')
	});
	sync2.on('click', '.owl-prev', function () {
		sync1.trigger('prev.owl.carousel')
	});
	sync2.owlCarousel({
		center: true,
		loop: true,
		items : thumbs,
		margin: 10,
		dots: false,
		nav : true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
	})
	.on('click', '.owl-item', function() {
		var i = $(this).index()-(thumbs);
		sync2.trigger('to.owl.carousel', [i, duration, true]);
		sync1.trigger('to.owl.carousel', [i, duration, true]);
	});
	
	/*--------------------
	Rating
	--------------------*/
	$('input.rating').rating();
	
	/*--------------------
	Birthdate
	--------------------*/
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth() + 1;
	var yyyy = today.getFullYear() + 1;
	if( dd < 10 ) {
		dd = '0' + dd;
	} 
	if( mm < 10 ) {
		mm = '0' + mm;
	} 
	var today = dd + '/' + mm + '/' + yyyy;
	$('input[name="birthdate"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
		locale: {
			'format': 'DD/MM/YYYY',
			'daysOfWeek': [
				"CN",
				"T2",
				"T3",
				"T4",
				"T5",
				"T6",
				"T7"
			],
			"monthNames": [
				"Tháng 1",
				"Tháng 2",
				"Tháng 3",
				"Tháng 4",
				"Tháng 5",
				"Tháng 6",
				"Tháng 7",
				"Tháng 8",
				"Tháng 9",
				"Tháng 10",
				"Tháng 11",
				"Tháng 12"
			],
		},
		minDate: '01-01-1930',
		maxDate: today
		
    });
	
	/*--------------------
	Widget scroll
	--------------------*/
	$(window).load(function() {
		var $scroll = $('.widget-scroll');
		if ( $scroll.length ) {
			var offsetTop = $scroll.offset().top - $('.site-nav-clone').height() - 10;
			$(window).scroll(function () {	
				var offsetBottom = $('.content-area').offset().top + $('.content-area').height() - $scroll.height() - $('.site-nav-clone').height() - 40;
				scrollTop = $(this).scrollTop();
				if ( scrollTop > offsetTop && scrollTop < offsetBottom ) {
					$scroll.css({
						'top': scrollTop - offsetTop,
					});
				} else if ( scrollTop > offsetBottom ) {
					$scroll.css({
						'top': offsetBottom - offsetTop,
					});
				} else {
					$scroll.css({
						'top': '0',
					});
				}
			});
		}
	});
});