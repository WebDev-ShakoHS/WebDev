<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$layout = ( isset( $args['appw-layout-elements'] ) && !empty( $args['appw-layout-elements'] ) ) ? maybe_unserialize( $args['appw-layout-elements'] ) : array();

?>
<li <?php wc_product_class( '', $product ); ?>>
	<?php
		if( count( $layout ) > 0 ) :
			foreach ( $layout as $key ):
			
				$action = 'apww_wc_product_loop_hook_'.wp_unslash( $key );
				
				do_action( $action );
				
			endforeach;
		endif;
	?>
    
    
<?php //do_action( 'woocommerce_product_additional_information', $product ); ?>
</li>
