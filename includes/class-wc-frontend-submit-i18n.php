<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://laratweets.com
 * @since      1.0.0
 *
 * @package    Wc_Frontend_Submit
 * @subpackage Wc_Frontend_Submit/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wc_Frontend_Submit
 * @subpackage Wc_Frontend_Submit/includes
 * @author     Abhishek Rijal <xqluzxwise@gmail.com>
 */
class Wc_Frontend_Submit_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wc-frontend-submit',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
