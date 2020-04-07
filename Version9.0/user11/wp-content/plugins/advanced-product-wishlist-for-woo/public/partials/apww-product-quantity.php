<?php
/**
 * Wishlist Share BUtton view.
 *
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/public
 * @author     aThemeArt <athemeart.com@gmail.com>
 */

if( ! defined( 'ABSPATH' ) ) exit;
global $product;


if ( ! $product->is_purchasable() ) {
	return;
}

$args = apply_filters( 'woocommerce_quantity_input_args', array(
	'input_id'     => uniqid( 'quantity_' ),
	'input_name'   => 'quantity',
	'input_value'  => '1',
	'max_value'    => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
	'min_value'    => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
	'step'         => apply_filters( 'woocommerce_quantity_input_step', 1, $product ),
	'pattern'      => apply_filters( 'woocommerce_quantity_input_pattern', has_filter( 'woocommerce_stock_amount', 'intval' ) ? '[0-9]*' : '' ),
	'inputmode'    => apply_filters( 'woocommerce_quantity_input_inputmode', has_filter( 'woocommerce_stock_amount', 'intval' ) ? 'numeric' : '' ),
	'product_name' => $product ? $product->get_title() : '',
), $product );
extract( $args );

?>

<input 
			type="number" 
			id="<?php echo esc_attr( $input_id ); ?>" 
			class="input-text qty text" 
			<?php if( $product->get_sold_individually() ) echo 'disabled'; ?> 
			step="<?php echo esc_attr( $step ); ?>" 
			min="<?php echo esc_attr( $min_value ); ?>" 
			max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>" 
			name="apww-get-product-quantity-<?php echo esc_attr( $product->get_id() );?>" 
			value="<?php echo esc_attr( $input_value ); ?>" 
			title="<?php echo esc_attr_x( 'Quantity', 'Product quantity input tooltip', 'advanced-product-wishlist-for-woocomerce' ) ?>" 
			size="4" 
			pattern="<?php echo esc_attr( $pattern ); ?>" 
			inputmode="<?php echo esc_attr( $inputmode ); ?>" 
			aria-labelledby="<?php echo ! empty( $args['product_name'] ) ? sprintf( esc_attr__( '%s quantity', 'advanced-product-wishlist-for-woocomerce' ), $args['product_name'] ) : ''; ?>" 
			autocomplete="off"
		/>
