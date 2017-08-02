<?php

/**
 * The Form Shortcode for product submission.
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

class Wc_Frontend_Submit_Shortcode_Class {
	/**
	 * Initialize Shortcodes
	 *
	 * @since    1.0.0
	 */
	public function init_shortcode() {

		add_shortcode( 'WC_FRONTEND_SUBMIT_FORM', array( $this, 'wc_frontend_submit_product_submission_form_callback' ) );

	}
	/**
	 * [wc_frontend_submit_product_submission_form_callback Shortcode callback]
	 * @return [type] [Shortcode callback]
	 */
	public function wc_frontend_submit_product_submission_form_callback() {

		$dependencies = new Wc_Frontend_Submit_Check_Dependencies();

		$dependencies->is_woo_active();

		if( ! $dependencies ) :

			return "Woo not active";

		else : return "Woo is active";

		endif;


	}

}
