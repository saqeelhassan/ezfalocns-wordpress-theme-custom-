/**
 * Hero background slider – cycles through .hero-bg-slide elements.
 */
(function($) {
	'use strict';

	var INTERVAL_MS = 5000;

	function init() {
		var $slider = $('.hero-bg-slider');
		var $slides = $slider.find('.hero-bg-slide');
		if ($slides.length < 2) return;

		function next() {
			var $active = $slides.filter('.active');
			var $next = $active.next('.hero-bg-slide');
			if (!$next.length) $next = $slides.first();
			$active.removeClass('active');
			$next.addClass('active');
		}

		setInterval(next, INTERVAL_MS);
	}

	$(function() {
		init();
	});
})(jQuery);
