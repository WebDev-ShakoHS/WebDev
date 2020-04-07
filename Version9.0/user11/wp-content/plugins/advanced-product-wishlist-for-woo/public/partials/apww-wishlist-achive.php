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

$options  = ( !empty( $args['options'] ) ) ? wp_unslash( $args['options'] ) : array();

$products = $args['products'];
$alert 	  =  ( !empty( $args['alert'] ) ) ? wp_unslash( $args['alert'] ) : '';

if( !empty( $products ) ) :
?>

<div class="limiter">
  <div class="apww-table-container">
    <div class="apww-wrap-table">
      <table class="apww-table apww-wishlist-achive has-background">
        <thead>
          <tr class="table100-head">
            <th class="column1"><?php echo esc_html( $options['apww_archive_col_txt_1'] );?></th>
            <th class="column2"><?php echo esc_html( $options['apww_archive_col_txt_2'] );?></th>
            <th class="column3"><?php echo esc_html( $options['apww_archive_col_txt_3'] );?></th>
          </tr>
        </thead>
        <tbody>
			 <?php
			if( !empty( $args['products'] ) ) : 
			
			
            foreach( $products as $key => $product ) :
            
				if( get_option( 'permalink_structure' ) && ! defined( 'ICL_PLUGIN_PATH' ) && ! defined( 'POLYLANG_VERSION' ) ) {
					$url = trailingslashit( esc_url_raw( $args['apww-achive-url'] ) .'/apww-my-wishlist/'. wp_unslash( $key ) );
				}else{
					$url = esc_url_raw( add_query_arg( 'apww-my-wishlist', wp_unslash( $key ),  esc_url_raw( $args['apww-achive-url'] )  ) ) ;
				}

            echo '<tr>
                <td class="column1">'.esc_attr( $product['name'] ).'</td>
                <td class="column2"><a href="'.esc_url( $url ).'">'.esc_html__( 'Wiew the wishlist' ).'</a></td>
                <td class="column3"><button data-alert="'. esc_attr( $alert ) .'" type="button" class="appw-wishlist-archive-action-delete" data-user_id="'.absint( $args['user_id'] ).'" data-key="'.wp_unslash( $key ).'" >'.esc_html__( 'Delete' ).'</button>
				</td>
            </tr>
			';
			
            endforeach;
            endif;
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php else: ?>
<div class="apww-wishlist-empty">

<span class="apww-icon icon-001-like-1"></span>
<p class="cart-empty">

<?php echo esc_html__( 'Your Wishlist Archive is currently empty.','advanced-product-wishlist-for-woocomerce' );?>
</p>

</div>
<?php endif;?>