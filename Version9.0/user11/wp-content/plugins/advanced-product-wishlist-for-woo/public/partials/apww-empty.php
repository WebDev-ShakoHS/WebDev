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

?>
<div class="apww-wishlist-empty">

<span class="apww-icon icon-001-like-1"></span>
<p class="cart-empty">

<?php echo esc_html__( 'Your Wishlist is currently empty.','advanced-product-wishlist-for-woocomerce' );?>
</p>

<a class="button appw-back-button wc-backward" href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) );?>"><span class="apww-icon icon-mail-reply"></span><?php echo esc_html__( 'Return To Shop','advanced-product-wishlist-for-woocomerce' );?></a>

</div>