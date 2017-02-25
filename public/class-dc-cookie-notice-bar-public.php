<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Cookie_Notice_Bar
 * @subpackage Dc_Cookie_Notice_Bar/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dc_Cookie_Notice_Bar
 * @subpackage Dc_Cookie_Notice_Bar/public
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Cookie_Notice_Bar_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.3.0
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dc-cookie-notice-bar-public.css', array(), $this->version, 'all' );
		
		$option_css = '#dc-cnb-container {
					    	'.get_option('dc_cnb_position').': 0;
						    background-color: '.get_option('dc_cnb_text_background').';
						    color: '.get_option('dc_cnb_text_color').';
						}

						#dc-cnb-button {
						    background-color: '.get_option('dc_cnb_button_background').';
						    color: '.get_option('dc_cnb_button_color').';
						    padding: '.get_option('dc_cnb_button_padding').';
						    border-radius: '.get_option('dc_cnb_button_border_radius').';
						}

						#dc-cnb-read-more {
							color: '.get_option('dc_cnb_read_more_color').';
						}

						#dc-cnb-read-more:hover {
							color: '.get_option('dc_cnb_read_more_hover_color').';
						}';
		/*
		if(isset($_COOKIE['dc_cnb_cookie'])) {
			$option_css.= '#dc-cnb-container {display: none !important}';
		}
		*/

		wp_add_inline_style( $this->plugin_name, $option_css );
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dc-cookie-notice-bar-public.js', array( 'jquery' ), $this->version, false );
		//passo la variabile php var al js. ajax_url per chiamare una funzione php in ajax
		wp_localize_script( $this->plugin_name, 'php_var', array(
				'ajax_url' => admin_url( 'admin-ajax.php' )
		));
	}

	/**
	 * Callback function for the public page.
	 *
	 * @since    1.0.0
	 */
	public function create_public_interface(){
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/dc-cookie-notice-bar-public-display.php';
	}

	public function dc_cnb_cookie() {
		switch (get_option('dc_cnb_time')) {
		    case 'day':
		        $cookie_time = 86400;
		        break;
		    case 'week':
		        $cookie_time = 604800;
		        break;
		    case 'month':
		        $cookie_time = 86400 * 30;
		        break;
		    case '3months':
		        $cookie_time = 86400 * 90;
		        break;
		    case '6months':
		        $cookie_time = 86400 * 180;
		        break;
		    case 'year':
		        $cookie_time = 86400 * 365;
		        break;
		    case 'infinity':
		        $cookie_time = 86400 * 36500;
		        break;
		}
	    setcookie("dc_cnb_cookie", 'true', time()+$cookie_time, "/");
	    die();
	}
}
