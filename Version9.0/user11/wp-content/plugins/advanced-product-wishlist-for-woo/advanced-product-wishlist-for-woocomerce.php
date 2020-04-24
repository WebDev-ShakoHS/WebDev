<?php
/**
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://athemeart.com/
 * @since             1.0.1
 * @package           Advanced_Product_Wishlist_For_Woocomerce
 *
 * @wordpress-plugin
 * Plugin Name:       Advanced Product Wishlist for Woocomerce
 * Plugin URI:        https://athemeart.com/downloads/advanced-product-wishlist-for-woocomerce/
 * Description:       Advanced Product Wishlist add all Wishlist features to your website. Needs WooCommerce to work..
 * Version:           1.0.1
 * Author:            aThemeArt
 * Author URI:        https://athemeart.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       advanced-product-wishlist-for-woocomerce
 * Domain Path:       /languages
 * WC requires at least: 3.0.0
 * WC tested up to: 4.0.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ADVANCED_PRODUCT_WISHLIST_FOR_WOOCOMERCE_VERSION', '1.0.0' );
define( 'ADVANCED_PRODUCT_WISHLIST_FOR_WOOCOMERCE_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/'  );
define( 'ADVANCED_PRODUCT_WISHLIST_FOR_WOOCOMERCE_DIR',  plugin_dir_path( __FILE__ )  );
define( 'ADVANCED_PRODUCT_WISHLIST_FOR_WOOCOMERCE_FILE', plugin_basename( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-advanced-product-wishlist-for-woocomerce-activator.php
 */
function activate_advanced_product_wishlist_for_woocomerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-advanced-product-wishlist-for-woocomerce-activator.php';
	Advanced_Product_Wishlist_For_Woocomerce_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-advanced-product-wishlist-for-woocomerce-deactivator.php
 */
function deactivate_advanced_product_wishlist_for_woocomerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-advanced-product-wishlist-for-woocomerce-deactivator.php';
	Advanced_Product_Wishlist_For_Woocomerce_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_advanced_product_wishlist_for_woocomerce' );
register_deactivation_hook( __FILE__, 'deactivate_advanced_product_wishlist_for_woocomerce' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-advanced-product-wishlist-for-woocomerce.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_advanced_product_wishlist_for_woocomerce() {

	$plugin = new Advanced_Product_Wishlist_For_Woocomerce();
	$plugin->run();
	

}
run_advanced_product_wishlist_for_woocomerce();

//
add_filter( 'plugin_action_links', 'apww_go_pro', 999, 2 );
function apww_go_pro( $actions, $file ) {
	if ( $file == plugin_basename( __FILE__ )) {
		$actions['apww_go_pro'] = '<a href="https://athemeart.com/downloads/advanced-product-wishlist-for-woocomerce/" target="_blank" style="color: red; font-weight: bold">Go Pro!</a>';
		$action = $actions['apww_go_pro'];
		unset( $actions['apww_go_pro'] );
		array_unshift( $actions, $action );
	}
	return $actions;
}
