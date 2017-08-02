<?php

/**
 * The Dependencies File
 * 
 * @link              http://laratweets.com
 * @since             1.0.0
 * @package           Wc_Frontend_Submit
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class Wc_Frontend_Submit_Check_Dependencies {
	/**
	 * [is_woo_active Check dependncies]
	 * @return boolean [Check dependncies]
	 *
	 * @since 1.0.0
	 */
	

	public function is_woo_active(){

		if (!is_plugin_active('woocommerce/woocommerce.php')) {
	        
	       return false;
	    
	    }

	    return true;

	}
	/**
	 * [get_woo_version get woocommerce version ]
	 * @return [type] [get woocommerce version ]
	 */
	public function get_woo_version(){

		if( ! $this->is_woo_active() ) {

			return "woocommece plugin is not active";
		}

		else {


		}


	}

}
