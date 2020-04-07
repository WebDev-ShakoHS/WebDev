<?php

/**
 * healthexx functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package healthexx
 */

require get_template_directory() . '/inc/init.php';

if ( ! function_exists( 'healthexx_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function healthexx_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on healthexx, use a find and replace
		 * to change 'healthexx' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'healthexx', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' 	=> esc_html__( 'Primary', 'healthexx' ),
			'menu-2'  => esc_html__('Social',  'healthexx'),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'healthexx_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'flex-width'  => true,
			'flex-height' => true,
		) );	
	}
endif;
add_action( 'after_setup_theme', 'healthexx_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function healthexx_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'healthexx_content_width', 640 );
}
add_action( 'after_setup_theme', 'healthexx_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
function healthexx_scripts() {
	global $healthexx_customizer_all_values;

	/*google font*/
	wp_enqueue_style( 'healthexx-google-fonts','https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Poppins:300,400,500,600,700' );
	
	// thirdparty style file
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/src/css/bootstrap.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/src/css/font-awesome.css' );
	wp_enqueue_style( 'jQuery-owl-carousal-css', get_template_directory_uri() . '/assets/src/css/owl.carousel.css' );
	wp_enqueue_style( 'jQuery-owl-theme-default', get_template_directory_uri() . '/assets/src/css/owl.theme.default.css' );
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/src/css/animate.css' );
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/src/css/slicknav.css' );
	wp_enqueue_style( 'healthexx-header', get_template_directory_uri() . '/assets/src/css/header-slick.css' );


    //theme
	wp_enqueue_style( 'healthexx-style', get_stylesheet_uri() );
	wp_add_inline_style( 'healthexx-responsive-style', get_template_directory_uri() . '/assets/src/css/responsive.css' );
	

	// thirdparty assets
	wp_enqueue_script( 'jquery-bootstrap', get_template_directory_uri() . '/assets/src/js/bootstrap.js', array('jquery'), true );
	wp_enqueue_script( 'jquery-owl-carousal', get_template_directory_uri() . '/assets/src/js/owl.carousel.js', array('jquery'), true );
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/src/js/jquery.slicknav.js', array('jquery'), true );
	wp_enqueue_script( 'healthexx-custom', get_template_directory_uri() . '/assets/src/js/custom.js', array('jquery'), true );
	wp_localize_script( 'healthexx-main', 'customzier_values', $healthexx_customizer_all_values);
	wp_enqueue_script( 'healthexx-skip-link-focus-fix', get_template_directory_uri() . '/assets/src/js/skip-link-focus-fix.js', array(), true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'healthexx_scripts', 99 );
 
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';



if( !function_exists('healthexx_primary_menu_mobile_callback') ) :
	/**
	 * Fallback menu to primary menu 
	 * 
	 * @since healthexx 1.0.0
	 */

function healthexx_primary_menu_mobile_callback() {
	?>
		<ul id="mobile-menu" class="d-md-inline-flex">
			<li class="menuu"><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php esc_html_e('Home','healthexx');?></a></li>
			<li class="menuu"><a href="<?php echo esc_url( admin_url( '/nav-menus.php' ) );?>"><?php esc_html_e('Set Primary Menu','healthexx');?></a></li>
		</ul>
	<?php
}
endif;

/*breadcrum function*/
if ( ! function_exists( 'healthexx_simple_breadcrumb' ) ) :

	/**
	 * Simple breadcrumb.
	 *
	 * @since 1.0.0
	 */
	function healthexx_simple_breadcrumb() {

		if ( ! function_exists( 'healthexx_breadcrumb_trail' ) ) {
			require_once get_template_directory() . '/assets/breadcrumbs/breadcrumbs.php';
		}

		$breadcrumb_args = array(
			'container'   => 'div',
			'show_browse' => false,
		);
		healthexx_breadcrumb_trail( $breadcrumb_args );

	}

endif;

// theme name
if ( ! function_exists ( 'healthexx_theme_name' ) ) {
	function healthexx_theme_name() {
		return esc_html__(' healthexx','healthexx');
	}
}


/**
 *  Theme Page
 */
require_once( trailingslashit(get_template_directory()) . 'inc/admin/dashboard.php' );

// customize the catgory title author
function healthexx_customizer_remove_defualt_cat_author($title)
{
    if( is_category() ) {

        $title = single_cat_title( '', false );

    } 
    elseif ( is_tag() ) {

        $title = single_tag_title( '', false );
    }        
    else if (is_author()){
    	$title = '<span class="vcard">' . esc_html(get_the_author()) . '</span>' ;
    }

    return $title;

}
add_filter( 'get_the_archive_title', 'healthexx_customizer_remove_defualt_cat_author' );

// Check if theme variable is set
if (!function_exists('healthexx_storage_isset')) {
	function healthexx_storage_isset($var_name, $key='', $key2='') {
		global $healthexx_STORAGE;
		if (!empty($key) && !empty($key2))
			return isset($healthexx_STORAGE[$var_name][$key][$key2]);
		else if (!empty($key))
			return isset($healthexx_STORAGE[$var_name][$key]);
		else
			return isset($healthexx_STORAGE[$var_name]);
	}
}
if (!defined("healthexx_THEME_FREE"))		define("healthexx_THEME_FREE", true);
if (!defined("healthexx_THEME_FREE_WP"))	define("healthexx_THEME_FREE_WP", true);


/**
 * Load Upsell Button In Customizer
 * 2016 &copy; [Justin Tadlock](http://justintadlock.com).
 */


require_once( trailingslashit( get_template_directory() ) . '/inc/upgrade/class-customize.php' );