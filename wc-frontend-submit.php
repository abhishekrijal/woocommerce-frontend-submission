<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://laratweets.com
 * @since             1.0.0
 * @package           Wc_Frontend_Submit
 *
 * @wordpress-plugin
 * Plugin Name:       Woocommerce Frontend Submission
 * Plugin URI:        http://laratweets.com
 * Description:       Manage your WooCommerce store from the frontend. Manage Users / Users roles with a custom User Friendly Dashboard.
 * Version:           1.0.0
 * Author:            Abhishek Rijal
 * Author URI:        http://laratweets.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wc-frontend-submit
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wc-frontend-submit-activator.php
 */
function activate_wc_frontend_submit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-frontend-submit-activator.php';
	Wc_Frontend_Submit_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wc-frontend-submit-deactivator.php
 */
function deactivate_wc_frontend_submit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-frontend-submit-deactivator.php';
	Wc_Frontend_Submit_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wc_frontend_submit' );
register_deactivation_hook( __FILE__, 'deactivate_wc_frontend_submit' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wc-frontend-submit.php';

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wc_frontend_submit() {

	$plugin = new Wc_Frontend_Submit();

	if( is_plugin_active('woocommerce/woocommerce.php') ) :

		$plugin->run();

	else :

		$plugin->show_error();

		deactivate_plugins(plugin_basename(__FILE__));

		unset($_GET['activate']);

	endif;

}
run_wc_frontend_submit();
