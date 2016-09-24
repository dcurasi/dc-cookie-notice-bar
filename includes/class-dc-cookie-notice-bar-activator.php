<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Cookie_Notice_Bar
 * @subpackage Dc_Cookie_Notice_Bar/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Dc_Cookie_Notice_Bar
 * @subpackage Dc_Cookie_Notice_Bar/includes
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Cookie_Notice_Bar_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		add_option('dc_cnb_activate', 1);
	    add_option('dc_cnb_message', 'We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.');
	    add_option('dc_cnb_button_text', 'Ok');
	    add_option('dc_cnb_time', '3months');
	    add_option('dc_cnb_read_more_text', 'Read More');
	    add_option('dc_cnb_read_more_link', '#');
	    add_option('dc_cnb_read_more_target', '_blank');
	    add_option('dc_cnb_position', 'bottom');
	    add_option('dc_cnb_text_background', '#000000');
	    add_option('dc_cnb_text_color', '#ffffff');
	    add_option('dc_cnb_button_background', '#e24545');
	    add_option('dc_cnb_button_color', '#ffffff');
	}

}
