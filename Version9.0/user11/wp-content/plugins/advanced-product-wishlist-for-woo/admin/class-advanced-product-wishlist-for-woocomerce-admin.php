<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://athemeart.com/
 * @since      1.0.0
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/admin
 * @author     aThemeArt <athemeart.com@gmail.com>
 */
class Advanced_Product_Wishlist_For_Woocomerce_Admin {

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
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Advanced_Product_Wishlist_For_Woocomerce_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	public $loader;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		global $apww_loader;

		$this->plugin_name = $plugin_name;
		$this->version = $version;
			
		$this->loader = $apww_loader;
		
		$this->load_dependencies();	
	}
	
	/**
	 * Load the required dependencies for the Admin facing functionality.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Advanced_Product_Wishlist_For_Woocomerce/admin. Registers the admin settings and page.
	 *
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	public function load_dependencies() {
		
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		$this->loader->load_module('admin/sanitize');
		$this->loader->load_module('lib/class-advanced-product-wishlist-for-woocomerce-admin-settings-api');	
		$this->loader->load_module('admin/partials/advanced-product-wishlist-for-woocomerce-admin-display');	
		
		$settings_api = new Advanced_Product_Wishlist_For_Woocomerce_Admin_Display();
		
		
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
		 * defined in Advanced_Product_Wishlist_For_Woocomerce_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Advanced_Product_Wishlist_For_Woocomerce_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/advanced-product-wishlist-for-woocomerce-admin.css', array(), $this->version, 'all' );

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
		 * defined in Advanced_Product_Wishlist_For_Woocomerce_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Advanced_Product_Wishlist_For_Woocomerce_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_script('jquery-ui-accordion');
		wp_enqueue_script('jquery-ui-selectable');
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/advanced-product-wishlist-for-woocomerce-admin.js', array( 'jquery' ), $this->version, false );
		
		wp_localize_script($this->plugin_name, 'apww_object_admin', 
			array(
			
				'ajaxurl' 	 => admin_url( 'admin-ajax.php'),
				'nonce' => wp_create_nonce( $this->plugin_name ),
				
				
			)
		 );

	}

}
