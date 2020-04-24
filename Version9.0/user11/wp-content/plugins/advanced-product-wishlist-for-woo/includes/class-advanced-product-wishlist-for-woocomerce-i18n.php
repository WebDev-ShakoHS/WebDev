<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://athemeart.com/
 * @since      1.0.0
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/includes
 * @author     aThemeArt <athemeart.com@gmail.com>
 */
class Advanced_Product_Wishlist_For_Woocomerce_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'advanced-product-wishlist-for-woocomerce',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}
	
	



}
