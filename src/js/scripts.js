// requires: modernizr-2.7.1.min.js
// requires: conditionizr-4.3.0.min.js


(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready.... FIGHT!!

		$('.banner').slick({
			dots: false,
			autoplay: true,
			arrows: false,
		  infinite: true,
			autoplaySpeed: 10000,
		  speed: 5000,
			pauseOnFocus: false,
			pauseOnHover: false,
			draggable: false,
		  fade: true,
		  cssEase: 'linear'
		});

	});

})(jQuery, this);
