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

if( empty( $args['user_id'] ) ) return false;

$user_meta 	= maybe_unserialize ( $args['user_meta'] );


?>

<div class="apww-buttons-group apww-create-wishlist">
  <button class="appw-action-wishlist-load-modal button" type="button"><?php echo esc_html( $args['wishlist_btn_text'] );?></button>
</div>
<div class="apww-wishlist-modal apww-wishlist-create-wishlist-action">
	
  <div class="apww-modal-inner"> <span class="apww-icon icon-hearts"></span>
    <div class="apww-wishlist-info"><?php echo esc_html( $args['wishlist_save_success'] );?></div>
    <div class="apww-wishlist-save-wrap">
      <div class="form-group">
        <label for="apww-wishlist-input-<?php echo absint( $args['user_id'] );?>"><?php echo esc_html( $args['create_wishlist_text'] );?></label>
        <input type="text" class="form-control" id="apww-wishlist-input-<?php echo absint( $args['user_id'] );?>" placeholder="<?php echo esc_html( $args['write_wishlist_name_text'] );?>">
      </div>
      <?php if( !empty( $user_meta ) ) : ?>
      <div class="form-group">
        <label for="apww-choose-wishlit"><?php echo esc_html( $args['choose_wishlit'] );?> </label>
        <select class="form-control" id="apww-choose-wishlit-<?php echo absint( $args['user_id'] );?>">
          <option value="0"><?php echo esc_html( $args['choose_wishlit'] );?></option>
          <?php foreach ( $user_meta as $key => $val ) : ?>
          <option value="<?php echo esc_attr( $key );?>"><?php echo esc_html( $val['name'] );?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <?php endif;?>
    </div>
    
    <div class="apww-buttons-group">
    
      <button class="button appw-wishlist-archive-action" data-user_id="<?php echo absint( $args['user_id'] );?>" data-action="save" type="button"> <span class="apww-icon icon-heart-plus"></span> <?php echo esc_html( $args['wishlist_btn_text'], 'advanced-product-wishlist-for-woocomerce' );?> </button>
      
      <button class="button appw-modal-close-button" type="button"><span class="apww-icon icon-close"></span><?php echo esc_html__('Close', 'advanced-product-wishlist-for-woocomerce' );?> </button>
    </div>
  </div>
</div>
