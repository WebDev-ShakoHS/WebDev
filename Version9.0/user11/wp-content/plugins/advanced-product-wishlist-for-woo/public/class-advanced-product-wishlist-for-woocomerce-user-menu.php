<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://athemeart.com/
 * @since      1.0.0
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/public
 * @author     aThemeArt <athemeart.com@gmail.com>
 */
class Advanced_Product_Wishlist_For_Woocomerce_User_Menu {
	
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
	 * The option 
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Advanced_Product_Wishlist_For_Woocomerce_Options    $get_option .
	 */
	private $option;
	
	

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct(  ) {
			
		$this->loader = new Advanced_Product_Wishlist_For_Woocomerce_Loader;
		
		$this->option = new Advanced_Product_Wishlist_For_Woocomerce_Options;
		$this->load_dependencies_hook();	
	}
		
	/**
	 * Load the required dependencies for the public page facing functionality.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	public function load_dependencies_hook() {
		
		
		add_filter ( 'woocommerce_account_menu_items', array( $this,'wishlist_archive_link' ), 40 );
		add_action( 'init', array( $this,'wishlist_archive_add_endpoint' ));
		add_action( 'woocommerce_account_apww-wishlist-archive_endpoint', array( $this,'wishlist_archive_add_endpoint_content' ));
		add_action( 'woocommerce_account_apww-my-wishlist_endpoint', array( $this,'wishlist_page_add_endpoint_content' ));
	}
	
	/*
	* Step 1. Add Link (Tab) to My Account menu
	*/
	public function wishlist_archive_link( $menu_links ){
		
		$options 	= $this->option->get_option('apw_general_settings');
		$achive 	= $this->option->get_option('apw_wishtlist_achive');
		
		$nav 		= array();
		
		if( isset( $options['wishlist_menu'] ) && $options['wishlist_menu'] == 'on' ){
			$nav['apww-my-wishlist']	 = esc_html( $options['wishlist_menu_txt'] );
		}
		if( isset( $achive['apww_archive_menu'] ) && $achive['apww_archive_menu'] == 'on' ){
			$nav['apww-wishlist-archive']	 = esc_html( $achive['apww_archive_menu_txt'] );
		}
		
		if( empty( $nav  ) ) return false;	
		//wishlist_menu
		$menu_links = array_slice( $menu_links, 0, 5, true ) 
		+ $nav
		+ array_slice( $menu_links, 5, NULL, true );
		
		return $menu_links;
	
	}
	/*
	* Step 2. Register Permalink Endpoint
	*/
	public function wishlist_archive_add_endpoint() {
	
		// WP_Rewrite is my Achilles' heel, so please do not ask me for detailed explanation
		add_rewrite_endpoint( 'apww-wishlist-archive', EP_PAGES );
		add_rewrite_endpoint( 'apww-my-wishlist', EP_PAGES );
	
	}
	
	public function wishlist_page_add_endpoint_content(){
		
		do_action('apww_display_wishlist');
		
	}
	/*
	* Step 3. Content for the new page in My Account, woocommerce_account_{ENDPOINT NAME}_endpoint
	*/
	public function wishlist_archive_add_endpoint_content() {
		do_action('apww_display_wishlist_archive');
	
	
	}
	

}
