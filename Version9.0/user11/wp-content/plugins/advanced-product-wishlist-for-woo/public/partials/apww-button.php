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
if( empty( $args['apww_button'] ) ){ return false; }

$alert 			= isset( $args['apww_button']['alert_type'] ) 	? esc_attr( $args['apww_button']['alert_type'] ) : 'default_alert';

$css_class 		= isset($args['apww_button']['btn_type'] ) 		? esc_attr( $args['apww_button']['btn_type'] ) 	 : 'btn';

$icon			= ( isset( $args['apww_button']['action'] ) && $args['apww_button']['action'] == 'appw-remove' ) ? 'apww-icon icon-005-minus-heart' : ' apww-icon icon-003-add-heart' ;
	
$archive_remove =	get_query_var( 'apww-my-wishlist' ) ? get_query_var( 'apww-my-wishlist' ) : '';
?>

<?php 

switch ( $css_class ) {
    case 'btn':
		?>
		
		<button type="button" data-apww-button-id="<?php echo get_the_ID();?>"  data-alert="<?php echo esc_attr( $alert );?>" class="apww-wishlist-action apww-wishlist-button <?php esc_attr_e( $args['apww_button']['action'] );?>  <?php esc_attr_e( $args['apww_button']['css_class'] );?>  apww-error-<?php echo get_the_ID();?>" data-archive="<?php echo esc_attr( $archive_remove );?>">
		<?php esc_html_e( $args['apww_button']['btn_text'] );?>
		</button>
        
		<?php
        break;
    case 'icon_link':
		?>
        
		<a href="javascript:void(0)" data-alert="<?php echo esc_attr( $alert );?>" data-apww-button-id="<?php echo get_the_ID();?>" class="apww-wishlist-action  apww-wishlist-link <?php esc_attr_e( $args['apww_button']['action'] );?>  <?php esc_attr_e( $args['apww_button']['css_class'] );?> apww-error-<?php echo get_the_ID();?>" data-archive="<?php echo esc_attr( $archive_remove );?>"><span class="<?php echo esc_attr( $icon );?>"></span>
		<?php esc_html_e( $args['apww_button']['btn_text'] );?>
		</a>
        
		<?php
        break;
    case 'icon_btn_tx':
	?>
    
	<button type="button" data-apww-button-id="<?php echo get_the_ID();?>"  data-alert="<?php echo esc_attr( $alert );?>" class="apww-wishlist-action apww-wishlist-button <?php esc_attr_e( $args['apww_button']['action'] );?>  <?php esc_attr_e( $args['apww_button']['css_class'] );?>  apww-error-<?php echo get_the_ID();?>" data-archive="<?php echo esc_attr( $archive_remove );?>"> <span class="<?php echo esc_attr( $icon );?>"></span>
	<?php esc_html_e( $args['apww_button']['btn_text'] );?>
	</button>
    
	<?php
        break;
	 case 'icon_btn':
		?>
        
		<button type="button" data-apww-button-id="<?php echo get_the_ID();?>"  data-alert="<?php echo esc_attr( $alert );?>" class="apww-wishlist-action apww-wishlist-button <?php esc_attr_e( $args['apww_button']['action'] );?>  <?php esc_attr_e( $args['apww_button']['css_class'] );?>  apww-error-<?php echo get_the_ID();?>" data-archive="<?php echo esc_attr( $archive_remove );?>"> <span class="<?php echo esc_attr( $icon );?>"></span></button>
        
		<?php
        break;
	 case 'icon':
	?>
    
	<a href="javascript:void(0)" data-alert="<?php echo esc_attr( $alert );?>" data-apww-button-id="<?php echo get_the_ID();?>" class="apww-wishlist-action  apww-wishlist-link <?php esc_attr_e( $args['apww_button']['action'] );?>  <?php esc_attr_e( $args['apww_button']['css_class'] );?> apww-error-<?php echo get_the_ID();?>" data-archive="<?php echo esc_attr( $archive_remove );?>"><span class="<?php echo esc_attr( $icon );?>"></span>
	<?php esc_html_e( $args['apww_button']['btn_text'] );?>
	</a>
    
	<?php
        break;		
    default:
       ?>
       
    <a href="javascript:void(0)" data-alert="<?php echo esc_attr( $alert );?>" data-apww-button-id="<?php echo get_the_ID();?>" class="apww-wishlist-action  apww-wishlist-link <?php esc_attr_e( $args['apww_button']['action'] );?>  <?php esc_attr_e( $args['apww_button']['css_class'] );?> apww-error-<?php echo get_the_ID();?>"  data-archive="<?php echo esc_attr( $archive_remove );?>">
    <?php esc_html_e( $args['apww_button']['btn_text'] );?>
    </a>
    
    <?php
} 

?>
