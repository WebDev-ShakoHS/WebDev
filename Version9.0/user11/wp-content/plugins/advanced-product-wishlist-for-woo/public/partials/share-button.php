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

if( empty( $args ) ){ return false; }

?>

<div class="apww-share-button-wrap">     
		<h6 class="share-text"><?php echo esc_html( $args['share_title'] );?> </h6> 
          
        <?php if( isset( $args['twitter'] ) && $args['twitter'] == "on" ) :?> 
                    
        <a data-unique_id="<?php echo esc_attr ( $args['unique_id'] ) ;?>" href="https://twitter.com/share?url=<?php echo urlencode( $args[ 'base_url' ] );?>&amp;text=<?php echo esc_html( $args[ 'share_text' ] );?>" title="<?php echo esc_html__( 'tweet on twitter','advanced-product-wishlist-for-woocomerce' );?>" target="_blank" class="pure-button button-twitter"><span class="apww-icon icon-014-twitter-logo-silhouette"></span> <?php echo esc_html__( 'Twitter','advanced-product-wishlist-for-woocomerce' );?></a>
        
        <?php endif;?>
        <?php if( isset( $args['facebook'] ) && $args['facebook'] == "on" ) :?> 
        
         <!-- Facebook -->
        <a data-unique_id="<?php echo esc_attr ( $args['unique_id'] ) ;?>"  href="http://www.facebook.com/sharer.php?u=<?php echo urlencode( $args[ 'base_url' ] );?>&amp;title=<?php echo esc_html( $args[ 'share_text' ] );?>" title=" <?php echo esc_html__( 'Share on Facebook','advanced-product-wishlist-for-woocomerce' );?>" target="_blank" class="pure-button button-facebook"><span class="apww-icon icon-013-facebook-logo"></span> <?php echo esc_html__( 'Facebook','advanced-product-wishlist-for-woocomerce' );?></a>
        
        <?php endif;?>
        <?php if( isset( $args['stumbleupon'] ) && $args['stumbleupon'] == "on" ) :?> 
        
        <!-- StumbleUpon -->
        <a data-unique_id="<?php echo esc_attr ( $args['unique_id'] ) ;?>"  href="http://www.stumbleupon.com/submit?url=<?php echo urlencode( $args[ 'base_url' ] );?>&amp;title=<?php echo esc_html( $args[ 'share_text' ] );?>" title="<?php echo esc_html__( 'Share on Stumbleupon','advanced-product-wishlist-for-woocomerce' );?>" target="_blank" class="pure-button button-stumbleupon"><span class="apww-icon icon-017-stumbleupon"></span> <?php echo esc_html__( 'Stumbleupon','advanced-product-wishlist-for-woocomerce' );?></a>
        
        <?php endif;?>
        <?php if( isset( $args['linkedin'] ) && $args['linkedin'] == "on" ) :?> 
        
        <!-- LinkedIn --> 
        <a data-unique_id="<?php echo esc_attr ( $args['unique_id'] ) ;?>"  href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( $args[ 'base_url' ] );?>" title="<?php echo esc_html__( 'Share on LinkedIn','advanced-product-wishlist-for-woocomerce' );?>" target="_blank" class="pure-button button-linkedin"><span class="apww-icon icon-016-linkedin-logo"></span> <?php echo esc_html__( 'LinkedIn','advanced-product-wishlist-for-woocomerce' );?> </a>
        
        <?php endif;?>
        <?php if( isset( $args['pinterest'] ) && $args['pinterest'] == "on" ) :?> 
        
        <a data-unique_id="<?php echo esc_attr ( $args['unique_id'] ) ;?>"  href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode( $args[ 'base_url' ] );?>&amp;media=<?php echo esc_url( $args[ 'image' ] );?>&amp;description=<?php echo esc_html( $args[ 'share_text' ] );?>" class="pure-button button-google-plus" target="_blank" title="<?php echo esc_html__( 'Pin on Pinterest','advanced-product-wishlist-for-woocomerce' );?> ">
           <span class="apww-icon icon-015-pinterest"></span> <?php echo esc_html__( 'Pinterest','advanced-product-wishlist-for-woocomerce' );?>    </a>
        <?php endif;?>
        
</div>