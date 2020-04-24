<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package healthexx
 */

/**
 * healthexx_action_before_head hook
 * @since healthexx 1.0.0
 *
 * @hooked healthexx_set_global -  0
 * @hooked healthexx_doctype -  10
 */

do_action( 'healthexx_action_before_head' );?>

<head>

	<?php
	/**
	 * healthexx_action_before_wp_head hook
	 * @since healthexx 1.0.0
	 *
	 * @hooked healthexx_before_wp_head -  10
	 */
	do_action( 'healthexx_action_before_wp_head' );

	wp_head();

	/**
	 * healthexx_action_after_wp_head hook
	 * @since healthexx 1.0.0
	 *
	 * @hooked null
	 */
	do_action( 'healthexx_action_after_wp_head' );
	?>
</head>

<body <?php body_class(); ?>>
<?php
if ( ! function_exists( 'wp_body_open' ) ) {
function wp_body_open() {
	do_action( 'wp_body_open' );
}
} ?>

<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'healthexx' ); ?></a>

<?php
/**
 * healthexx_action_before hook
 * @since healthexx 1.0.0
 *
 * @hooked healthexx_page_start - 15
 */
do_action( 'healthexx_action_before' );

/**
 * healthexx_action_before_header hook
 * @since healthexx 1.0.0
 *
 * @hooked healthexx_skip_to_content - 10
 */
do_action( 'healthexx_action_before_header' );

/**
 * healthexx_action_header hook
 * @since healthexx 1.0.0
 *
 * @hooked healthexx_after_header - 10
 */
do_action( 'healthexx_action_header' );

/**
 * healthexx_action_nav_page_start hook
 * @since healthexx 1.0.0
 *
 * @hooked page start and navigations - 10
 */
do_action( 'healthexx_action_nav_page_start' );

/**
 * healthexx_action_on_header hook
 * @since healthexx 1.0.0
 *
 * @hooked page start and navigations - 10
 */
do_action( 'healthexx_action_on_header' );

/**
 * healthexx_action_before_content hook
 * @since healthexx 1.0.0
 *
 * @hooked null
 */
do_action( 'healthexx_action_before_content' );

?>