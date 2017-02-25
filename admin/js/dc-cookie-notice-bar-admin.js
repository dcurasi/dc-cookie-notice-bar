(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	 jQuery(document).ready(function($){
	    $('#dc_cnb_text_background').wpColorPicker();
	    $('#dc_cnb_text_color').wpColorPicker();
	    $('#dc_cnb_button_background').wpColorPicker();
	    $('#dc_cnb_button_color').wpColorPicker();
	    $('#dc_cnb_read_more_color').wpColorPicker();
	    $('#dc_cnb_read_more_hover_color').wpColorPicker();
	});
})( jQuery );
