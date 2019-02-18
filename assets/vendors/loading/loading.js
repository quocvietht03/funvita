!(function($){
	"use strict";
	jQuery(document).ready(function($) {
		function ld_SiteLoading() {
			if ($('.bt-site-loading').length) {
				$('.bt-site-loading').hide();
			}
		}
		ld_SiteLoading();
	});
})(jQuery);