<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://laratweets.com
 * @since      1.0.0
 *
 * @package    Wc_Frontend_Submit
 * @subpackage Wc_Frontend_Submit/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wc_Frontend_Submit
 * @subpackage Wc_Frontend_Submit/admin
 * @author     Abhishek Rijal <xqluzxwise@gmail.com>
 */
class Wc_Frontend_Submit_Admin {

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
		 * defined in Wc_Frontend_Submit_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_Frontend_Submit_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wc-frontend-submit-admin.css', array(), $this->version, 'all' );

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
		 * defined in Wc_Frontend_Submit_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_Frontend_Submit_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wc-frontend-submit-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * [wc_frontend_check_dependebcies Check Dependency : Woocommerce]
	 * 
	 * @return [type] [Check Dependency : Woocommerce]
	 *
	 * @since 1.0.0
	 */
	public function wc_frontend_check_dependebcies() {

		$dependencies = new Wc_Frontend_Submit_Check_Dependencies();
	    
	    if ( ! $dependencies->is_woo_active() ) :
	        
	        echo sprintf("<div class='error'><p><strong>%1s</strong> <a target='_blank' href='http://wordpress.org/plugins/woocommerce/'>%2s</a>%3s</p></div>",__( 'WC Frontend Submission :', 'wc-frontend-submit'), __( 'woocommerce', 'wc-frontend-submit') , __( ' needs to be installed and activated to use the plugin.', 'wc-frontend-submit') );
	    
	    endif;
	}

	/**
	 * [wc_frontend_add_menu_page description]
	 * 
	 * @return [type] [description]
	 *
	 * @since 1.0.0
	 */
	public function wc_frontend_add_menu_page() {

		$dependencies = new Wc_Frontend_Submit_Check_Dependencies();

		if( $dependencies->is_woo_active() ) :

			add_menu_page(
			    __( 'WC Frontend Submit', 'wc-frontend-submit' ),
			    __( 'WC Frontend Submit', 'wc-frontend-submit' ),
			    'manage_options',
			    'wc-frontend-submit',
			    array( $this, 'menu_page_callback' ),
				'dashicons-cart',
				26
			);

		endif;

	}
	
	/**
	 * [menu_page_callback Callback for mnu page]
	 * @return [type] [Callback for mnu page]
	 *
	 * @since 1.0.0
	 */
	
	public function menu_page_callback(){

	?>
		<div class="wc-frontend-submit-admin-dashboard wrap">
			
			<div id="heading">
				
				<h2><?php esc_html_e('Woocommerce Frontend Submission : Settings', 'wc-frontend-submit'); ?></h2>

			</div>

			<div id="primary">
				
				<form method="post">
					
					<div class="field-group">
						<label for="enable-submit"><?php esc_html_e('Enable Frontend Product Submission', 'wc-frontend-submit'); ?></label><input type="checkbox" name="enable-submit">
					</div>

				</form>

			</div>

			<div id="sidebar">
				

			</div>

		</div>

	<?php

	}



}
