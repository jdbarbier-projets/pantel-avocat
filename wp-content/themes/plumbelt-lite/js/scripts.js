/*

** Limit menu number of lists

*/

var full_width = 0;



jQuery(".container ul:first > li").each(function( index ) {

	if((jQuery(this).width() + full_width) > 850) {

		jQuery(this).remove();

	}

	full_width = full_width + jQuery(this).width();

});



/*

** Masonry

*/

jQuery(document).ready(function($) {



	var $container = $('.gallery');



	$container.imagesLoaded( function(){

		$container.masonry({

			itemSelector : 'dl.gallery-item'

		});

	});

});



/*

** Responsive Menu

*/

jQuery(document).ready(function($) {

	$('.openresponsivemenu').click(function() {

		$('nav').toggleClass("responsivemenu");

	});

});