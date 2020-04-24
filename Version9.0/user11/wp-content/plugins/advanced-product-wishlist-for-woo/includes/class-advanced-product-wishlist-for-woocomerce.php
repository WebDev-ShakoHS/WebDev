<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://athemeart.com/
 * @since      1.0.0
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/includes
 * @author     aThemeArt <athemeart.com@gmail.com>
 */
class Advanced_Product_Wishlist_For_Woocomerce {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Advanced_Product_Wishlist_For_Woocomerce_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;
	
	
	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'ADVANCED_PRODUCT_WISHLIST_FOR_WOOCOMERCE_VERSION' ) ) {
			$this->version = ADVANCED_PRODUCT_WISHLIST_FOR_WOOCOMERCE_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'advanced-product-wishlist-for-woocomerce';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();
		$this->wc_apww_hook();
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Advanced_Product_Wishlist_For_Woocomerce_Loader. Orchestrates the hooks of the plugin.
	 * - Advanced_Product_Wishlist_For_Woocomerce_i18n. Defines internationalization functionality.
	 * - Advanced_Product_Wishlist_For_Woocomerce_Admin. Defines all hooks for the admin area.
	 * - Advanced_Product_Wishlist_For_Woocomerce_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {
	
		
		/**
		 * The class responsible for the plugins default value
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-advanced-product-wishlist-for-woocomerce-options.php';
		
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-advanced-product-wishlist-for-woocomerce-loader.php';
		
		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-advanced-product-wishlist-for-woocomerce-i18n.php';
		
		/**
		 * The class responsible for the plugins widgets class
		 * 
		 */
		if( !class_exists('Predic_Widget') ){ 
		
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/predic-widget/predic-widget.php';
		
		}

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-advanced-product-wishlist-for-woocomerce-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-advanced-product-wishlist-for-woocomerce-public.php';

		$this->loader = $apww_loader;
		
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-advanced-product-wishlist-for-notices.php';

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Advanced_Product_Wishlist_For_Woocomerce_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Advanced_Product_Wishlist_For_Woocomerce_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Advanced_Product_Wishlist_For_Woocomerce_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		
		

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	public function define_public_hooks() {
		global $apww_option;
		$options		 = $apww_option->get_option('apw_general_settings');
		$layout_option	 = $apww_option->get_option('apw_layout');
		$plugin_public 	 = new Advanced_Product_Wishlist_For_Woocomerce_Public( $this->get_plugin_name(), $this->get_version() );
		
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		
		
		
		$where_load_on_archive  = !empty( $options['button_position'] ) 		? $options['button_position'] : 'legacy_mode';
		$show_on_archive	    = !empty( $options['show_single_archive'] )  	? $options['show_single_archive'] : '';
		$show_on_single			= !empty( $options['show_single_product'] ) 	? $options['show_single_product'] : '';
		
		
		if(  !empty ( $options['legacy_mode'] ) && $options['legacy_mode'] == 'on'  )
		{
			$where_load_on_archive		= wp_unslash ( 'legacy_mode_on' );
		}
		
		switch ( $where_load_on_archive ) {
			
			case 'before_add':
			
				if( $show_on_archive	== 'on' )
				{
					$this->loader->add_action( 'woocommerce_loop_add_to_cart_args', $plugin_public, 'get_wishlist_button' );
					
				}
				if( $show_on_single == 'on' )
				{
					$this->loader->add_action( 'woocommerce_single_product_summary', $plugin_public, 'get_wishlist_button',29 );	
				}
				
				if( $layout_option['layout_type'] != 'table' )
				{
					$this->loader->add_action( 'apww_wc_product_loop_hook_add_to_cart', $plugin_public, 'get_wishlist_button',5 );
				}
				
			break;
			case 'after_add':
			
				if( $show_on_archive	== 'on' )
				{
					$this->loader->add_action( 'woocommerce_after_shop_loop_item', $plugin_public, 'get_wishlist_button', 20 );
					
				}
				if( $show_on_single == 'on' )
				{
					$this->loader->add_action( 'woocommerce_single_product_summary', $plugin_public, 'get_wishlist_button',31 );	
				}	
				if( $layout_option['layout_type'] != 'table' )
				{
				$this->loader->add_action( 'apww_wc_product_loop_hook_add_to_cart', $plugin_public, 'get_wishlist_button', 20 );
				}
				
			break;
			case 'above_img_left':
			
				if( $show_on_archive	== 'on' )
				{
					$this->loader->add_action( 'woocommerce_before_shop_loop_item', $plugin_public, 'get_wishlist_button',5 );
					$this->loader->add_action( 'apww_wc_product_loop_hook_image', $plugin_public, 'get_wishlist_button', 5 );
					
				}
				if( $show_on_single == 'on' )
				{
					$this->loader->add_action( 'woocommerce_before_single_product_summary', $plugin_public, 'get_wishlist_button',5 );	
				}
					
			break;
			case 'above_img_right':
			
				if( $show_on_archive	== 'on' )
				{
					$this->loader->add_action( 'woocommerce_before_shop_loop_item', $plugin_public, 'get_wishlist_button', 5 );
					
				}
				if( $show_on_single == 'on' )
				{
					$this->loader->add_action( 'woocommerce_before_single_product_summary', $plugin_public, 'get_wishlist_button',5 );	
				}
				
				$this->loader->add_action( 'apww_wc_product_loop_hook_image', $plugin_public, 'get_wishlist_button', 5 );
					
			break;
			case 'before_title':
			
				if( $show_on_archive	== 'on' )
				{
					$this->loader->add_action( 'woocommerce_shop_loop_item_title', $plugin_public, 'get_wishlist_button', 5 );
					
				}
				if( $show_on_single == 'on' )
				{
					$this->loader->add_action( 'woocommerce_template_single_title', $plugin_public, 'get_wishlist_button',0 );	
				}	
				
				$this->loader->add_action( 'apww_wc_product_loop_hook_title', $plugin_public, 'get_wishlist_button', 5 );
				
			break;
			case 'after_title':
			
				if( $show_on_archive	== 'on' )
				{
					$this->loader->add_action( 'woocommerce_shop_loop_item_title', $plugin_public, 'get_wishlist_button', 20 );
				}
				if( $show_on_single == 'on' )
				{
					$this->loader->add_action( 'woocommerce_template_single_title', $plugin_public, 'get_wishlist_button',10 );	
				}	
					
				$this->loader->add_action( 'apww_wc_product_loop_hook_title', $plugin_public, 'get_wishlist_button', 20);
					
			break;
			
			default:
			
				if( $show_on_archive	== 'on' )
				{
					$this->loader->add_action( 'woocommerce_loop_add_to_cart_args', $plugin_public, 'get_wishlist_button' );
				}
				if( $show_on_single == 'on' )
				{
					$this->loader->add_action( 'woocommerce_product_meta_start', $plugin_public, 'get_wishlist_button',25 );	
				}
				if( $layout_option['layout_type'] != 'table' )
				{
				$this->loader->add_action( 'apww_wc_product_loop_hook_add_to_cart', $plugin_public, 'get_wishlist_button',5 );
				}
		} 
		
		
		/**
		* Run ajax for saving product.
		*/
		$this->loader->add_action( 'wp_ajax_nopriv_apww_save_wishlist', $plugin_public, 'save_wishlist_data' );
		$this->loader->add_action( 'wp_ajax_apww_save_wishlist', $plugin_public, 'save_wishlist_data' );
		/**
		* Run ajax for remove  product.
		*/
		$this->loader->add_action( 'wp_ajax_nopriv_apww_remove_wishlist', $plugin_public, 'remove_wishlist_data' );
		$this->loader->add_action( 'wp_ajax_apww_remove_wishlist', $plugin_public, 'remove_wishlist_data' );
		
		
		/**
		* Run To display wishlist.
		*/
		$this->loader->add_action( 'apww_display_wishlist', $plugin_public, 'display_wishlist_data' );
		 add_shortcode( 'apww_display_wishlist', array( $plugin_public, 'display_wishlist_data' ) );
		
		if( function_exists('predic_widget') )
		{
			$widget_config = $plugin_public->widget_map_and_init();
			predic_widget()->add_widget( $widget_config['_display_wishlist'] );
			predic_widget()->add_widget( $widget_config['_wishlist_counter'] );
		}
		/**
		* assign page.
		*/
		$this->loader->add_filter( 'the_content', $plugin_public, 'display_wishlist_assign_page' );
		
		/**
		* social share data create.
		*/
		$this->loader->add_action( 'wp_ajax_nopriv_apww_social_share_data_create', $plugin_public, 'apww_social_share_data_create' );
		$this->loader->add_action( 'wp_ajax_apww_social_share_data_create', $plugin_public, 'apww_social_share_data_create' );		
		$this->loader->add_action( 'init', $plugin_public, 'add_endpoints' );
		
		
		/**
		* Create new wishlist category / archive.
		*/
		$this->loader->add_action( 'wp_ajax_nopriv_apww_create_wishlist_category', $plugin_public, 'apww_create_wishlist_category' );
		$this->loader->add_action( 'wp_ajax_apww_create_wishlist_category', $plugin_public, 'apww_create_wishlist_category' );	
		
		/**
		* Create new wishlist category / archive.
		*/
		$this->loader->add_action( 'wp_ajax_nopriv_apww_delete_wishlist_archive', $plugin_public, 'apww_delete_wishlist_archive' );
		$this->loader->add_action( 'wp_ajax_apww_delete_wishlist_archive', $plugin_public, 'apww_delete_wishlist_archive' );	
		
		/**
		* Alert Style.
		*/
		$this->loader->add_action( 'wp_footer', $plugin_public, 'css_alert_html',5 );
		
		
		$this->loader->add_action( 'apww_wc_product_loop_hook_description', $plugin_public, 'apww_custom_layout_content' );
		$this->loader->add_action( 'apww_wc_product_loop_hook_stock', $plugin_public, 'apww_custom_layout_stock' );
		
		$this->loader->add_action( 'apww_wc_product_loop_hook_add_to_cart', $plugin_public, 'apww_custom_add_to_cart' );
		$this->loader->add_action( 'apww_wc_product_loop_hook_wishlist', $plugin_public, 'get_wishlist_button');
		
		$this->loader->add_action( 'apww_wc_product_loop_hook_quantity', $plugin_public, 'apww_custom_product_quantity');
		
		
		/**
		* Display wishlist Archive .
		*/
		$this->loader->add_action( 'apww_display_wishlist_archive', $plugin_public, 'apww_display_wishlist_archive' );
		 add_shortcode( 'apww_display_wishlist_archive', array( $plugin_public, 'apww_display_wishlist_archive' ) );
		 
		/* 
		 * Apww product loop start and end .
		*/
		$this->loader->add_action( 'appw_product_loop_start', $plugin_public, 'appw_product_loop_start' );
		$this->loader->add_action( 'apww_product_loop_end', $plugin_public, 'apww_product_loop_end' );
		
		/* 
		 * Ajax Add to cart .
		*/
		$this->loader->add_action( 'wp_ajax_nopriv_apww_woocommerce_ajax_add_to_cart', $plugin_public, 'apww_woocommerce_ajax_add_to_cart' );
		$this->loader->add_action( 'wp_ajax_apww_woocommerce_ajax_add_to_cart', $plugin_public, 'apww_woocommerce_ajax_add_to_cart' );	
		
	
	}
	
	/**
	 * Rebuild woocomerce hook for apww Cusom layout.
	 *
	 * @since    1.0.0
	 */
	public function wc_apww_hook() {
		
		add_action( 'apww_wc_product_loop_hook_image', 'woocommerce_template_loop_product_link_open' );
		add_action( 'apww_wc_product_loop_hook_image', 'woocommerce_template_loop_product_thumbnail' );
		add_action( 'apww_wc_product_loop_hook_image', 'woocommerce_template_loop_product_link_close' );
		
		add_action( 'apww_wc_product_loop_hook_title', 'woocommerce_template_loop_product_link_open' );
		add_action( 'apww_wc_product_loop_hook_title', 'woocommerce_template_loop_product_title' );
		add_action( 'apww_wc_product_loop_hook_title', 'woocommerce_template_loop_product_link_close' );
		
		add_action( 'apww_wc_product_loop_hook_price', 'woocommerce_template_loop_price' );
		
		
		
		add_action( 'apww_wc_product_loop_hook_rating', 'woocommerce_template_loop_rating' );
		add_action( 'apww_wc_product_loop_hook_on_sale', 'woocommerce_show_product_sale_flash' );
		add_action( 'apww_wc_product_loop_hook_on_meta', 'woocommerce_template_single_meta' );
		
		add_action( 'apww_wc_product_loop_hook_excerpt', 'woocommerce_template_single_excerpt' );
		
	
	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Advanced_Product_Wishlist_For_Woocomerce_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
