<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
</div>

<?php
$layout = business_consultant_finder_get_option('page_layout');

/**
* Hook - business_consultant_finder_container_before 		- 5
* Hook - business_consultant_finder_content_column_start 	- 99.
*
* @hooked business_consultant_finder_container_before
*/
do_action( 'business_consultant_finder_container_after', esc_attr( $layout )  );