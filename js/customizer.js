/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	$('*[data-background-image]').each(function() {
		$(this).css({
			'background-image': 'url(' + $(this).data('background-image') + ')'
		});
	});
}( jQuery ) );
