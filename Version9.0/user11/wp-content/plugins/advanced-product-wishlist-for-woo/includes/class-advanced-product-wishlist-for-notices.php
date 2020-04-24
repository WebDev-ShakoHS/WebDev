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
class Advanced_Product_Wishlist_For_Notices {

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

		add_action( 'admin_notices', array( $this, 'admin_notice__success' ) );
		add_action( 'wp_ajax_apww_dismiss_notice', array( $this, 'dismiss_nux' ) );
		
		add_action( 'wp_dashboard_setup', array( $this, 'apww_dashboard_widgets' ) );
		
		add_action( 'admin_notices', array( $this, 'apww_admin_notice__success' ) );
	   
	}
	
	
  
	public function apww_dashboard_widgets() {
		
		global $wp_meta_boxes;
		wp_add_dashboard_widget('athemeart_blog_rss', 'Beginner\'s Guide for WordPress by aThemeArt', array( $this, 'athemeart_blog_rss' ));
		
		wp_add_dashboard_widget('athemeart_product_rss', 'Latest Products  by aThemeArt', array( $this, 'athemeart_product_rss' ));
	}
	
	
	public function athemeart_product_rss() {
		
		$response = wp_remote_post( 'https://athemeart.com/json.php?post=download', array(
			'method' => 'POST',
			'timeout' => 45,
			'redirection' => 5,
			'httpversion' => '1.0',
			'blocking' => true,
			'headers' => array(),
			'cookies' => array()
			)
		);
		
		if ( is_wp_error( $response ) ) {
		   $error_message = $response->get_error_message();
		   echo "Something went wrong: $error_message";
		} else {
		   echo '<div class="rss-widget ata-rss-widgets"><ul>';
		   $data = json_decode( wp_remote_retrieve_body( $response ) );
		   foreach ( $data  as $row ) :
		 
			echo ' <li><a class="rsswidget" href="'.esc_url( $row->url ).'" target="_blank">'.esc_html( $row->title).'</a></li>';
		   endforeach;
		   echo '</ul></div>';
		 
		}
					
		echo '<p class="community-events-footer"><a href="https://athemeart.com/downloads/category/wordpress/" target="_blank">See All  <span class="screen-reader-text">(opens in a new tab)</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>';
			
		
	}
	public function athemeart_blog_rss() {
		
		
		$response = wp_remote_post( 'https://athemeart.com/json.php', array(
			'method' => 'POST',
			'timeout' => 45,
			'redirection' => 5,
			'httpversion' => '1.0',
			'blocking' => true,
			'headers' => array(),
			'cookies' => array()
			)
		);
		
		if ( is_wp_error( $response ) ) {
		   $error_message = $response->get_error_message();
		   echo "Something went wrong: $error_message";
		} else {
		   echo '<div class="rss-widget ata-rss-widgets"><ul>';
		   $data = json_decode( wp_remote_retrieve_body( $response ) );
		   foreach ( $data  as $row ) :
		 
			echo ' <li><a class="rsswidget" href="'.esc_url( $row->url ).'" target="_blank">'.esc_html( $row->title).'</a></li>';
		   endforeach;
		   echo '</ul></div>';
		 
		}
					
			echo '<p class="community-events-footer"><a href="https://athemeart.com/blog-athemeart/" target="_blank">See All  <span class="screen-reader-text">(opens in a new tab)</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>';
	}

	public function admin_notice__success() {
		if( get_option( 'apww_notice_dismiss' ) != "" ){ return false;}
	?>
	<div class="notice notice-success apww-notice-nux is-dismissible">
    	
		<p><?php _e( 'Thank you for installing Advanced Product Wishlist for WooCommerce', 'advanced-product-wishlist-for-woocomerce' ); ?>
        	<a href="<?php echo esc_url( admin_url( 'admin.php?page=advanced-product-wishlist-for-woocomerce' ) ); ?>"><?php _e( 'Get started ', 'advanced-product-wishlist-for-woocomerce' ); ?></a>
        </p> 
	</div>
	<?php
		
	}
	
	public function dismiss_nux() {
		
			if( !check_ajax_referer( $this->plugin_name, 'nonce' ) ){ return false; }
			
			update_option( 'apww_notice_dismiss', true );
			die();
	}	
	
	function apww_admin_notice__success() {
	if ( $_REQUEST['page'] == 'advanced-product-wishlist-for-woocomerce' ) :
    ?>
   <div class="apw_premium_version">

    <div class="apww-wishlist-pro" >
    <p>Upgrade to the <span class="highlight">premium version</span><br>of <span class="highlight">Advanced Product Wishlist</span> To hide all promotional text / notice and premium custom support!</p>
    <a href="https://athemeart.com/downloads/advanced-product-wishlist-for-woocomerce/" target="_blank" class="wishlist-cta-button button btn">
    <span class="highlight">UPGRADE</span><span> to the premium version</span>                </a>
    </div>
    
</div>
    <?php
	endif;
	}		

}

new Advanced_Product_Wishlist_For_Notices();
