// requires: modernizr-2.7.1.min.js
// requires: conditionizr-4.3.0.min.js


(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready.... FIGHT!!


		// Slick Slider for Banner faaaaaaaaade :herb: :smoking:
		$('.banner').slick({
			dots: false,
			autoplay: true,
			arrows: false,
		  infinite: true,
			autoplaySpeed: 10000,
		  speed: 7000,
			pauseOnFocus: false,
			pauseOnHover: false,
			draggable: false,
		  fade: true,
		  cssEase: 'linear'
		});


		// Shows modal via MagnificPopup :ok_hand:
		$('.modal-trigger').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});




	});

})(jQuery, this);
