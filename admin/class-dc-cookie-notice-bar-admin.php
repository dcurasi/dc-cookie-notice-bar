<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Cookie_Notice_Bar
 * @subpackage Dc_Cookie_Notice_Bar/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dc_Cookie_Notice_Bar
 * @subpackage Dc_Cookie_Notice_Bar/admin
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Cookie_Notice_Bar_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dc_Cookie_Notice_Bar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dc_Cookie_Notice_Bar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dc-cookie-notice-bar-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dc_Cookie_Notice_Bar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dc_Cookie_Notice_Bar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		// Add the color picker css file       
        wp_enqueue_style( 'wp-color-picker' ); 
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dc-cookie-notice-bar-admin.js', array( 'jquery', 'wp-color-picker' ), $this->version, false );

	}

	//inizializzazione menu di amministrazione
	function add_menu_page()
	{
	    add_menu_page('Cookie Notice Bar','Cookie Notice Bar', 'manage_options', 'dc-cnb-menu-page', array( $this,'create_admin_interface' ), 'dashicons-smiley');
	}

	/**
	 * Callback function for the admin settings page.
	 *
	 * @since    1.0.0
	 */
	public function create_admin_interface(){

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/dc-cookie-notice-bar-admin-display.php';

	}

	/**
	 * Creates our settings sections with fields etc.
	 *
	 * @since    1.3.0
	 */
	public function settings_api_init(){
		register_setting('dc_cnb_options_group', 'dc_cnb_activate');
	    register_setting('dc_cnb_options_group', 'dc_cnb_message');
	    register_setting('dc_cnb_options_group', 'dc_cnb_button_text');
	    register_setting('dc_cnb_options_group', 'dc_cnb_time');
	    register_setting('dc_cnb_options_group', 'dc_cnb_read_more_text');
	    register_setting('dc_cnb_options_group', 'dc_cnb_read_more_link');
	    register_setting('dc_cnb_options_group', 'dc_cnb_read_more_target');
	    register_setting('dc_cnb_options_group', 'dc_cnb_position');
	    register_setting('dc_cnb_options_group', 'dc_cnb_text_background');
	    register_setting('dc_cnb_options_group', 'dc_cnb_text_color');
	    register_setting('dc_cnb_options_group', 'dc_cnb_button_background');
	    register_setting('dc_cnb_options_group', 'dc_cnb_button_color');
	    register_setting('dc_cnb_options_group', 'dc_cnb_button_padding');
	    register_setting('dc_cnb_options_group', 'dc_cnb_button_border_radius');
	    register_setting('dc_cnb_options_group', 'dc_cnb_read_more_color');
	    register_setting('dc_cnb_options_group', 'dc_cnb_read_more_hover_color');
	    register_setting('dc_cnb_options_group', 'dc_cnb_debug_mode');
	}

	/**
	 * shortcode
	 *
	 * @since    1.3.0
	 */
	public function dc_read_more_link() {
		if ( in_array( 'polylang/polylang.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && function_exists('pll__') ) {
	    	return '<a id="dc-cnb-read-more" href="'.get_option('dc_cnb_read_more_link').'" target="'.get_option('dc_cnb_read_more_target').'">'.pll__(get_option('dc_cnb_read_more_text')).'</a>';
	    }
	    else {
	    	return '<a id="dc-cnb-read-more" href="'.get_option('dc_cnb_read_more_link').'" target="'.get_option('dc_cnb_read_more_target').'">'.get_option('dc_cnb_read_more_text').'</a>';
	    }
	}

	/**
	 * register string in polylang
	 *
	 * @since    1.2.0
	 */
	public function dc_register_string_polylang() {
		if (function_exists('pll_register_string')) {
			pll_register_string('dc-cookie-notice-bar', get_option('dc_cnb_message'));
			pll_register_string('dc-cookie-notice-bar', get_option('dc_cnb_button_text'));
			pll_register_string('dc-cookie-notice-bar', get_option('dc_cnb_read_more_text'));
		}
	}

}
