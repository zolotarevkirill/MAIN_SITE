$('document').ready(function(){
	// (function checkFilterContentHash() {
	// 	if(window.location.hash == "#filter-content") {
	// 		$('.new-catalog__category, .footer').hide();
	// 	} else {
	// 		$('.new-catalog__category, .footer').show();
	// 	}
	// })();

	const link = $('.new-catalog__filters > a');
	
	$(link).on('click', function(e) {

		var target = e.target;

		$(window).one('scroll', function () {
	        $("body").scrollTop(0);
	        document.documentElement.scrollTop = 0;
	    });

		// if ($(target).hasClass('open-filter-content')) {
		// 	$('.new-catalog__category, .footer').hide();
		// } else if ($(target).hasClass('close-filter-content')) {
		// 	$('.new-catalog__category, .footer').show();
		// }
	})
});