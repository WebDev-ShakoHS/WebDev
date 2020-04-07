<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 * @package healthexx themes
 * @subpackage healthexx
 * @since healthexx 1.0.0
 */


/**
 * healthexx_action_after_content hook
 * @since healthexx 1.0.0
 *
 * @hooked null
 */
do_action( 'healthexx_action_after_content' );

/**
 * healthexx_action_before_footer hook
 * @since healthexx 1.0.0
 *
 * @hooked healthexx_before_footer - 10
 */
do_action( 'healthexx_action_before_footer' );

/**
 * healthexx_action_widget_before_footer hook
 * @since healthexx 1.0.0
 *
 * @hooked healthexx_widget_before_footer - 10
 */
do_action( 'healthexx_action_widget_before_footer' );

	

/**
 * healthexx_action_footer hook
 * @since healthexx 1.0.0
 *
 * @hooked healthexx_footer - 10
 */
do_action( 'healthexx_action_footer' );

/**
 * healthexx_action_after_footer hook
 * @since healthexx 1.0.0
 *
 * @hooked null
 */
do_action( 'healthexx_action_after_footer' );

/**
 * healthexx_action_after hook
 * @since healthexx 1.0.0
 *
 * @hooked healthexx_page_end - 10
 */
do_action( 'healthexx_action_after' );
?>
<?php wp_footer(); ?>
</body>
</html>