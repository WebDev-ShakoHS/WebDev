<?php
/**
 * Wishlist button view.
 *
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/public
 * @author     aThemeArt <athemeart.com@gmail.com>
 */

if( ! defined( 'ABSPATH' ) ) exit;


$action 	    = isset( $args['action'] ) 	 ? esc_attr( $args['action'] ) : '';

?>

<div class="apww-wishlist-modal apww-wishlist-action-receive">

  <div class="apww-modal-inner"> 
  
  	<span class="apww-icon icon-heart-mark-right"></span>
    
    <div class="apww-txt"></div>
    
    <div class="apww-buttons-group">
    	
    	<?php if ( $action  != "appw-remove" ) :?>
        
      <button class="button appw-onclick-action-url" data-url="<?php echo get_permalink( absint( $args['btn_url_id'] ) );?>" type="button"> <i class="ftinvwl ftinvwl-heart-o"></i>
      	<?php echo esc_html( $args['btn_text'] );?>
      
       </button>
       
       <?php endif;?>
      
      <button class="button appw-modal-close-button" type="button"><span class="apww-icon icon-close"></span><?php echo esc_html__('Close');?> </button>
    </div>
  
  </div>
  
</div>
