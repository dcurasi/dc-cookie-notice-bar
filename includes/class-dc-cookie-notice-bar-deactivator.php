<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Cookie_Notice_Bar
 * @subpackage Dc_Cookie_Notice_Bar/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Dc_Cookie_Notice_Bar
 * @subpackage Dc_Cookie_Notice_Bar/includes
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Cookie_Notice_Bar_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.3.0
	 */
	public static function deactivate() {
		delete_option('dc_cnb_activate');
	    delete_option('dc_cnb_message');
	    delete_option('dc_cnb_button_text');
	    delete_option('dc_cnb_time');
	    delete_option('dc_cnb_read_more_text');
	    delete_option('dc_cnb_read_more_link');
	    delete_option('dc_cnb_read_more_target');
	    delete_option('dc_cnb_position');
	    delete_option('dc_cnb_text_background');
	    delete_option('dc_cnb_text_color');
	    delete_option('dc_cnb_button_background');
	    delete_option('dc_cnb_button_color');
	    delete_option('dc_cnb_button_padding');
	    delete_option('dc_cnb_button_border_radius');
	    delete_option('dc_cnb_read_more_color');
	    delete_option('dc_cnb_read_more_hover_color');
	    delete_option('dc_cnb_debug_mode');
	    setcookie("dc_cnb_cookie", null, -1, "/");
	}

}
