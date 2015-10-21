/*
 * No Spam (1.3.2)
 * by Mike Branski <mikebranski@gmail.com>
 * https://github.com/mikebranski/jquery-nospam
 *
 * Copyright (c) 2008-2015 Mike Branski (https://github.com/mikebranski)
 * Licensed under LGPL version 3 (http://www.gnu.org/licenses/lgpl-3.0.txt)
 *
 * NOTE: This script requires jQuery to work.  Download jQuery at jquery.com
 *
 * Thanks to Bill on the jQuery mailing list for the double slash idea!
 *
 */
(function($){
	$.fn.nospam = function(settings) {
		settings = $.extend({
			replaceText: false, 	// optional, accepts true or false
			filterLevel: 'normal' 	// optional, accepts 'low' or 'normal'
		}, settings);

		return this.each(function(){
			e = null;
			if(settings.filterLevel == 'low') { // Can be a switch() if more levels added
				if($(this).is('a[rel]')) {
					e = $(this).attr('rel').replace('//', '@').replace(/\//g, '.');
				} else {
					e = $(this).text().replace('//', '@').replace(/\//g, '.');
				}
			} else { // 'normal'
				if($(this).is('a[rel]')) {
					e = $(this).attr('rel').split('').reverse().join('').replace('//', '@').replace(/\//g, '.');
				} else {
					e = $(this).text().split('').reverse().join('').replace('//', '@').replace(/\//g, '.');
				}
			}
			if(e) {
				if($(this).is('a[rel]')) {
					$(this).attr('href', 'mailto:' + e);
					if(settings.replaceText) {
						$(this).text(e);
					}
				} else {
					$(this).text(e);
				}
			}
		});
	};
})(jQuery);
