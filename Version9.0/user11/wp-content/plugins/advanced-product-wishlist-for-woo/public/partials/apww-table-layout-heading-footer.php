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

global $apww_option;

$layout		= ( isset( $args['appw-layout-elements'] ) && !empty( $args['appw-layout-elements'] ) ) ? maybe_unserialize( $args['appw-layout-elements'] ) : array();

$checkbox 	= ( isset( $args['additional_settings'] ) && !empty( $args['additional_settings'] ) ) ? maybe_unserialize( $args['additional_settings'] ) : array();

$colspan 	= count( $layout ) + 2;

?>
<thead>
<tr class="table100-head">
<?php
if( in_array( 'bulk_action',$checkbox ) ) echo '<th></th>';

 if( count( $layout ) > 0 ) :
	
        foreach ( $layout as $key ):
			echo '<th>'. esc_html( $apww_option->table_heading_localization( $key ) ) .'</th>';
		endforeach;
		
		echo '<th></th>';
endif;

?>
</tr>
</thead>
<?php if( !empty ( $args['additional_settings'] ) && ( in_array( 'bulk_action', $checkbox  ) || in_array( 'checkout', $checkbox  ) ) ) : ?>
<tfoot>
<tr>
  <td colspan="<?php echo absint( $colspan );?>">
    <button type="button"  class="apww-wishlist-button apww-wishlist-bulk-remove-action" data-alert="<?php echo esc_attr( $args['alert_type'] );?>"  />
   	 <?php echo esc_html( $args['remove_btn_text'] );?>
    </button>
    
      <button type="button"  class="apww-wishlist-button apww_wishlist_bulk_add_to_cart_action pull-right" data-alert="<?php echo esc_attr( $args['alert_type'] );?>"  />
      <?php echo esc_html__('Add to Cart','woocommerce');?> 
   	     </button>
  </td>
</tr>
</tfoot> 

<?php endif;?>