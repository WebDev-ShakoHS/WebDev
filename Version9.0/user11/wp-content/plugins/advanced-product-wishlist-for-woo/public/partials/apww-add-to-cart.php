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

if( $product->is_type( 'variable' )) {
	
	



	if ( !empty( $product->get_available_variations() ) && true == $product->get_available_variations() ) : 
		
	
	/* $array_create = array(
	 	'attribute_pa_brands' => 'all-ayna',
		'attribute_pa_color'  => 'blue'
	 );
	 foreach ( $product->get_available_variations() as $options ) {
		 
		 if( $array_create == $options['attributes'] ){
			echo $options['variation_id'];
			
		 }
		 
	 }*/
	 
	 
		foreach ( $product->get_variation_attributes() as $attribute_name => $options ) : 
		
		?>
        <label for="<?php echo sanitize_title( $attribute_name ); ?>">
        	<span><?php echo wc_attribute_label( $attribute_name ); ?></span>
            
			<?php
				wc_dropdown_variation_attribute_options( array(
					'options'   => $options,
					'attribute' => $attribute_name,
					'product'   => $product,
					'name'      => 'apww-get-variation-attribute-'. esc_attr( $product->get_id() ).'[]',
				) );
			 ?>
            
        </label>
        <?php
		endforeach;
		
		
			
	endif;

}

//echo $product->get_id();
?>
<?php if( $args['apww-quantity'] == 1 ):?>
	<input type="hidden" name="apww-get-product-quantity-<?php echo esc_attr( $product->get_id() );?>" value="1" >
<?php endif;?>
<button type="submit" name="add-to-cart" data-alert="<?php echo esc_attr( $args['alert_type'] );?>" value="<?php echo esc_attr( $product->get_id() ); ?>" class="apww_single_add_to_cart_button button alt appw-error-<?php echo esc_attr( $product->get_id() );?>"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>