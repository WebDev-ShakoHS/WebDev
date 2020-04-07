<?php
/*This file is part of bcf-shop, business-consultant-finder child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/


remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
add_filter( 'woocommerce_show_page_title', '__return_false' );


remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );


function bcf_shop_theme_setup(){
	// Make theme available for translation.
	
	load_theme_textdomain( 'bcf-shop', get_stylesheet_directory_uri() . '/languages' );
	
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'bcf_shop_theme_setup' );


function bcf_shop_enqueue_child_styles() {
	
	$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
		
		
		wp_enqueue_script( 'bcf-shop-customselect', get_stylesheet_directory_uri().'/js/customselect.js', 0, '1.1', true );
		wp_enqueue_script( 'bcf-shop-woocommerce', get_stylesheet_directory_uri().'/js/woocommerce.js', 0, '1.1', true );
}
add_action( 'wp_enqueue_scripts', 'bcf_shop_enqueue_child_styles',9999 );






/*Write here your own functions */

/*
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function bcf_shop_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';
	$classes[] = 'woocommerce';
	$classes[] = 'woocommerce-js';
	$classes[] = 'woocommerce-js';
	return $classes;
}
add_filter( 'body_class', 'bcf_shop_active_body_class' );


/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function bcf_shop_woocommerce_thumbnail_columns() {
	return 3;
}
add_filter( 'woocommerce_product_thumbnails_columns', 'bcf_shop_woocommerce_thumbnail_columns' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function bcf_shop_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 9,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'bcf_shop_woocommerce_related_products_args' );


/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function bcf_shop_woocommerce_loop_columns() {
	return 3;
}
add_filter( 'loop_shop_columns', 'bcf_shop_woocommerce_loop_columns' );


/* 
 TOOL BAR
*/

remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);

if ( ! function_exists( 'bcf_shop_header_toolbar_start' ) ) {
	/**
	 * Insert the opening anchor tag for products in the loop.
	 */
	function bcf_shop_header_toolbar_start() {
		echo '<div class="bcf-shop-toolbar clearfix">';
	}
	
	add_action('woocommerce_before_shop_loop','bcf_shop_header_toolbar_start',20);
}


function bcf_shop_result_count() {
	get_template_part( 'woocommerce/result-count' );
}
add_action('woocommerce_before_shop_loop','bcf_shop_result_count',30);

//remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


if ( ! function_exists( 'bcf_shop_header_toolbar_end' ) ) {
	/**
	 * Insert the opening anchor tag for products in the loop.
	 */
	function bcf_shop_header_toolbar_end() {
		echo '<div class="clearfix"></div></div>';
	}
	
	add_action('woocommerce_before_shop_loop','bcf_shop_header_toolbar_end',30);
}


if ( ! function_exists( 'bcf_shop_loop_shop_per_page' ) ) :
	/**
	 * Returns correct posts per page for the shop
	 *
	 * @since 1.0.0
	 */
	function bcf_shop_loop_shop_per_page() {
		
		$posts_per_page = ( isset( $_GET['products-per-page'] ) ) ? sanitize_text_field( wp_unslash( $_GET['products-per-page'] ) ) : get_theme_mod( 'shopstore_woo_shop_posts_per_page',12 );

		if ( $posts_per_page == 'all' ) {
			$posts_per_page = wp_count_posts( 'product' )->publish;
		}
		
		return $posts_per_page;
	}
	add_filter( 'loop_shop_per_page', 'bcf_shop_loop_shop_per_page', 20 );
endif;

/**
*  loop  product after div add.
*
* @return integer products per row.
*/

function bcf_shop_loop_item_before() {
	echo '<div class="product-loop-wrp">';
}
add_action( 'woocommerce_before_shop_loop_item', 'bcf_shop_loop_item_before',5 );



function bcf_shop_loop_item_after() {
	echo '</div>';
}
add_action( 'woocommerce_after_shop_loop_item', 'bcf_shop_loop_item_after',999 );



if ( ! function_exists( 'bcf_shop_template_loop_product_title' ) ) {

	/**
	 * Show the product title in the product loop. By default this is an H2.
	 */
	function bcf_shop_template_loop_product_title() {
		global $product;
		
		$link = apply_filters( 'business_consultant_finder_woocommerce_loop_product_link', get_the_permalink(), $product );
		echo '<h5 class="product-name">';
			echo '<a href="' . esc_url( $link ) . '">';
				echo  get_the_title();
			echo '</a>';
		echo '</h5>';
		
	}
}
add_action( 'woocommerce_after_shop_loop_item', 'bcf_shop_template_loop_product_title', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_rating', 20 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 30 );
add_action( 'woocommerce_after_shop_loop_item', 'bcf_shop_woocommerce_loop_price', 40 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 50 );

if ( ! function_exists( 'bcf_shop_woocommerce_loop_price' ) ) {

	/**
	 * Show the product title in the product loop. By default this is an H2.
	 */
	function bcf_shop_woocommerce_loop_price() {
	
		wc_get_template( 'single-product/short-description.php' );
		
	}
}


add_action( 'tgmpa_register', 'bcf_shop_recommended_plugins',999 );


function bcf_shop_recommended_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

	

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Advanced Product Search For WooCommerce',
			'slug'      => 'advanced-product-search-for-woo',
			'required'  => false,
		),
		array(
			'name'      => 'Advanced Product Wishlist for Woocommerce',
			'slug'      => 'advanced-product-wishlist-for-woo',
			'required'  => false,
		),
		array(
			'name'      => 'Smart Variation Swatches for WooCommerce',
			'slug'      => 'variation-swatches-style',
			'required'  => false,
		),
		array(
			'name'      => 'WooCommerce Modal Fly Cart + Ajax add to cart',
			'slug'      => 'woocomm-popup-cart-ajax',
			'required'  => false,
		),
		
		

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'bcf-shop',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);
	
	tgmpa( $plugins, $config );
}
