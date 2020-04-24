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



$checkbox = ( isset( $args['additional_settings'] ) && !empty( $args['additional_settings'] ) ) ? maybe_unserialize( $args['additional_settings'] ) : array();

?>

<tr <?php wc_product_class( 'appw-row-id'.$product->get_id(), $product ); ?>>
	<?php
    if( count( $layout ) > 0 ) :
	
		echo ( in_array( 'bulk_action', $checkbox  ) ) ? '<td><input type="checkbox" name="apww-bulk-action[]" value="'.$product->get_id().'" /></td>': '';
		
        foreach ( $layout as $key ):
		
        	echo '<td>';
            $action = 'apww_wc_product_loop_hook_'.wp_unslash( $key );
            
            do_action( $action );
            echo '</td>';
        endforeach;
		
		 echo '<td>';
		 do_action( 'apww_wc_product_loop_hook_wishlist' );
		 echo '</td>';
		
    endif;
    ?>
    

</tr>
