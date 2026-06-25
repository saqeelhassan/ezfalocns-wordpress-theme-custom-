/**
 * Request Quote calendar (date-only picker) for home page.
 * Syncs selected date to Contact Form 7 field named "preferred-date".
 */
(function($) {
	'use strict';

	var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	var DOW = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

	function pad(n) {
		return n < 10 ? '0' + n : String(n);
	}

	function formatDate(d) {
		return d.getFullYear() + '-' + pad(d.getMonth() + 1) + '-' + pad(d.getDate());
	}

	function formatDisplay(d) {
		return DOW[d.getDay()] + ', ' + MONTHS[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear();
	}

	function isSameDay(a, b) {
		return a.getFullYear() === b.getFullYear() && a.getMonth() === b.getMonth() && a.getDate() === b.getDate();
	}

	function isPast(d) {
		var today = new Date();
		today.setHours(0, 0, 0, 0);
		d.setHours(0, 0, 0, 0);
		return d < today;
	}

	function setCf7PreferredDate(value) {
		// CF7 may use name "preferred-date" or with prefix in actual HTML
		var $form = $('.fz-request-quote-wrapper').find('.wpcf7-form');
		if (!$form.length) return;
		var $input = $form.find('input[name="preferred-date"], input[name*="preferred-date"]');
		if ($input.length) {
			$input.val(value);
		}
	}

	function renderCalendar($wrap, year, month, selectedDate, onSelect) {
		var grid = $wrap.find('.fz-quote-calendar-grid');
		var monthYearEl = $wrap.find('.fz-quote-calendar-month-year');
		if (!grid.length || !monthYearEl.length) return;

		monthYearEl.text(MONTHS[month] + ' ' + year);

		var first = new Date(year, month, 1);
		var last = new Date(year, month + 1, 0);
		var startPad = first.getDay();
		var daysInMonth = last.getDate();

		var prevMonth = month === 0 ? 11 : month - 1;
		var prevYear = month === 0 ? year - 1 : year;
		var prevLast = new Date(prevYear, prevMonth + 1, 0);
		var prevDays = prevLast.getDate();

		grid.empty();
		// Leading prev-month days
		for (var i = 0; i < startPad; i++) {
			var d = prevDays - startPad + i + 1;
			var date = new Date(prevYear, prevMonth, d);
			var $cell = $('<div class="fz-quote-calendar-cell other-month">' + d + '</div>');
			$cell.data('date', formatDate(date));
			$cell.data('dateObj', date);
			grid.append($cell);
		}
		// Current month
		for (var day = 1; day <= daysInMonth; day++) {
			var date = new Date(year, month, day);
			var past = isPast(new Date(year, month, day));
			var selected = selectedDate && isSameDay(date, selectedDate);
			var cls = 'fz-quote-calendar-cell';
			if (past) cls += ' past';
			else cls += ' available';
			if (selected) cls += ' selected';
			var $cell = $('<div class="' + cls + '">' + day + '</div>');
			$cell.data('date', formatDate(date));
			$cell.data('dateObj', date);
			if (!past && typeof onSelect === 'function') {
				$cell.on('click', function() {
					var dateObj = $(this).data('dateObj');
					var val = $(this).data('date');
					onSelect(dateObj, val);
				});
			}
			grid.append($cell);
		}
		// Trailing next-month days
		var total = startPad + daysInMonth;
		var rest = total % 7;
		var nextCount = rest === 0 ? 0 : 7 - rest;
		for (var j = 1; j <= nextCount; j++) {
			var nextDate = new Date(year, month + 1, j);
			var $cell = $('<div class="fz-quote-calendar-cell other-month">' + j + '</div>');
			$cell.data('date', formatDate(nextDate));
			$cell.data('dateObj', nextDate);
			grid.append($cell);
		}
	}

	function init() {
		var $wrap = $('.fz-request-quote-wrapper').find('.fz-quote-calendar-wrap');
		if (!$wrap.length) return;

		var now = new Date();
		var today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
		var state = { year: now.getFullYear(), month: now.getMonth(), selectedDate: today };

		function onDateSelect(dateObj, value) {
			state.selectedDate = dateObj;
			$wrap.find('.fz-quote-calendar-cell.selected').removeClass('selected');
			$wrap.find('.fz-quote-calendar-grid .fz-quote-calendar-cell').each(function() {
				if ($(this).data('dateObj') && isSameDay($(this).data('dateObj'), dateObj)) {
					$(this).addClass('selected');
				}
			});
			$('.fz-request-quote-wrapper').find('.fz-discovery-call-date').text(' \u2022 ' + formatDisplay(dateObj));
			setCf7PreferredDate(value);
		}

		function goPrev() {
			state.month--;
			if (state.month < 0) {
				state.month = 11;
				state.year--;
			}
			renderCalendar($wrap, state.year, state.month, state.selectedDate, onDateSelect);
		}

		function goNext() {
			state.month++;
			if (state.month > 11) {
				state.month = 0;
				state.year++;
			}
			renderCalendar($wrap, state.year, state.month, state.selectedDate, onDateSelect);
		}

		$wrap.find('.fz-quote-calendar-prev').on('click', goPrev);
		$wrap.find('.fz-quote-calendar-next').on('click', goNext);

		renderCalendar($wrap, state.year, state.month, state.selectedDate, onDateSelect);
		// Pre-select today and sync to form
		onDateSelect(today, formatDate(today));
	}

	$(function() {
		init();
	});
})(jQuery);
