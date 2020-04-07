<?php
/**
 * healthexx themes Theme Customizer
 *
 * @package healthexx themes
 * @subpackage healthexx
 * @since healthexx 1.0.0
 */

/*Define Url for including css and js*/
if ( !defined( 'healthexx_CUSTOMIZER_URL' ) ) {
    define( 'healthexx_CUSTOMIZER_URL', trailingslashit( get_template_directory_uri() ) . 'inc/frameworks/healthexx-customizer/' );
}

/*Define path for including php files*/
if ( !defined( 'healthexx_CUSTOMIZER_PATH' ) ) {
    define( 'healthexx_CUSTOMIZER_PATH', trailingslashit( get_template_directory() ) . 'inc/frameworks/healthexx-customizer/' );
}


/*define constant for healthexx customizer name*/
if(!defined('healthexx_CUSTOMIZER_NAME') ){
    define( 'healthexx_CUSTOMIZER_NAME', 'healthexx_options' );
}

/**
 * reset options
 * @param  array $reset_options
 * @return void
 *
 * @since healthexx 1.0.0
 */
if ( ! function_exists( 'healthexx_reset_options' ) ) :
    function healthexx_reset_options( $reset_options ) {
        set_theme_mod( healthexx_CUSTOMIZER_NAME, $reset_options );
    }
endif;

require get_template_directory().'/inc/customizer/default.php';

/**
 * Customizer framework added.
 */
require get_template_directory() . '/inc/frameworks/healthexx-customizer/healthexx-customizer.php';
global $healthexx_panels;
global $healthexx_sections;
global $healthexx_settings_controls;
global $healthexx_repeated_settings_controls;
global $healthexx_customizer_defaults;
global $defaults;

$defaults =  healthexx_defauts_value();


/*mainhomepage panel*/
require get_template_directory().'/inc/customizer/main-homepage/all-option-panel.php';

/******************************************
Modify Theme Option Section Options
 *******************************************/

/*Resetting all Values*/
/**
 * Reset color settings to default
 *
 * @since healthexx 1.0.0
 */
global $healthexx_customizer_defaults;
/******************************************
Additional Css
 *******************************************/
$healthexx_sections['custom_css'] = array(
    'title'          => esc_html__( 'Additional CSS', 'healthexx' ),
    'priority'       => 400,
);

$healthexx_customizer_args = array(
    'panels'            => $healthexx_panels, /*always use key panels */
    'sections'          => $healthexx_sections,/*always use key sections*/
    'settings_controls' => $healthexx_settings_controls,/*always use key settings_controls*/
    'repeated_settings_controls' => $healthexx_repeated_settings_controls,/*always use key sections*/
);

/*registering panel section setting and control start*/
function healthexx_add_panels_sections_settings() {
    global $healthexx_customizer_args;
    return $healthexx_customizer_args;
}
add_filter( 'healthexx_customizer_panels_sections_settings', 'healthexx_add_panels_sections_settings' );
/*registering panel section setting and control end*/

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function healthexx_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
}
add_action( 'customize_register', 'healthexx_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function healthexx_customize_preview_js() {
    wp_enqueue_script( 'healthexx_customizer', get_template_directory_uri() . '/assets/src/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'healthexx_customize_preview_js' );


/**
 * get all saved options
 * @param  null
 * @return array saved options
 *
 * @since healthexx 1.0.0
 */
if ( ! function_exists( 'healthexx_get_all_options' ) ) :
    function healthexx_get_all_options( $merge_default = 0 ) {
        $healthexx_customizer_saved_values = healthexx_customizer_get_all_values( healthexx_CUSTOMIZER_NAME );
        if( 1 == $merge_default ){
            global $defaults;
            if(is_array( $healthexx_customizer_saved_values )){
                $healthexx_customizer_saved_values = array_merge($defaults, $healthexx_customizer_saved_values );
            }
            else{
                $healthexx_customizer_saved_values = $defaults;
            }
        }
        return $healthexx_customizer_saved_values;
    }
endif;


function healthexx_sanitize_dropdown_pages( $page_id, $setting ) {
    // Ensure $input is an absolute integer.
    $page_id = absint( $page_id );

    // If $page_id is an ID of a published page, return it; otherwise, return the default.
    return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function healthexx_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function healthexx_excerpt_length( $length ) {

    if ( is_admin() ) {
        return $length;
    }

    $excerpt = get_theme_mod('excerpt_length', '20');
    return $excerpt;
}
add_filter( 'excerpt_length', 'healthexx_excerpt_length', 999 );
