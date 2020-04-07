<?php

/**
 * All Options & default value of the plugins 
 *
 * @link       https://athemeart.com/
 * @since      1.0.0
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/includes
 * @author     aThemeArt <athemeart.com@gmail.com>
 */
class Advanced_Product_Wishlist_For_Woocomerce_Options {
	
	
	/***
	 * Get theme option.
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function get_option( $key ) {
	
		if ( empty( $key ) ) {
			return;
		}
		$value = '';
		$default = $this->get_default();
		$default_value = '';
	
		if ( is_array( $default ) && isset( $default[ $key ] ) ) {
			$default_value = $default[ $key ];
		}
	
		if ( null !== $default_value ) {
			$value = get_option( $key, $default_value );
		}
		else {
			$value = get_option( $key );
		}
		
		if( is_array( $value ) && !empty( $value ) && is_array( $default_value ) ){
			$value = array_merge( $default_value,$value);
		}else{
			$value = $default_value;
		}
		
		
	
		return maybe_unserialize( $value );
	}
	
	/**
	 *
	 * get_default.
	 *
	 * @since    1.0.0
	 */
	public function get_default() {
		
		$defaults = array();
		
		/*Global Layout*/
		$defaults['apw_general_settings']  =  array(
				'btn_text'				=> esc_html__( 'Add to Wishlist', 'advanced-product-wishlist-for-woocomerce' ),
				'btn_type' 				=> 'link-btn',
				'show_single_product'	=> 'on',
				'show_single_archive'	=> 'on',
				'open_type'				=> 'sidebar',
				'button_position'		=> 'before_add',
				'product_elements'		=> array( 'image' => 'image','title' => 'title','price'=> 'price','add_to_cart'=> 'add_to_cart' ),
				'apww_wishlist_order_by'=> 'desc',
				'added_wishlist'		=>  esc_html__( 'Added wishlist', 'advanced-product-wishlist-for-woocomerce' ),
				'already_wishlist'		=>  esc_html__( 'Product already in wishlist', 'advanced-product-wishlist-for-woocomerce' ),
				'remove_wishlist'		=>  esc_html__( 'Remove', 'advanced-product-wishlist-for-woocomerce' ),
				'legacy_mode'			=> '',
				'after_remove'			=>  esc_html__( 'Product Removed', 'advanced-product-wishlist-for-woocomerce' ),
				'total_number_of_text'	=>  esc_html__( 'Number of product in wishlist', 'advanced-product-wishlist-for-woocomerce' ),
				'show_preloader'		=> 'on',
				'alert_type'			=> 'css_modal_alert',
				'wishlist_btn_text'		=>  esc_html__( 'View Wishlist', 'advanced-product-wishlist-for-woocomerce' ),
				'wishlist_menu'			=> 'on',
				'wishlist_menu_txt'		=> esc_html__( 'Wishlist', 'advanced-product-wishlist-for-woocomerce' ),
				
		);
		
		$defaults['apw_social_share']  =  array(
		
				'facebook'				=> 'on',
				'twitter'				=> 'on',
				'pinterest'				=> 'on',
				'email'					=> 'on',
				'linkedin'				=> 'on',
				'stumbleupon'			=> 'on',
				'social_title'			=>  esc_html__( 'My wishlist on admin', 'advanced-product-wishlist-for-woocomerce' ),
				'social_text'			=>  '',
				'button_position'		=> 'before_add',
		);
		
		$defaults['apw_layout']  =  array(
		
				'layout_type'			=> 'woocommerce',
				'product_elements'		=> array( 'image' => 'image','title' => 'title','price'=> 'price','add_to_cart'=> 'add_to_cart' ),
				'product_element_src'	=> 'woocommerce',
				'additional_settings'	=> array( 'bulkaction' => 'bulkaction', 'checkout' => 'checkout' ),
			
		);
		
		$defaults['apw_wishtlist_achive']  =  array(
		
				'wishlist_category'		=> 'on',
				'wishlist_btn_text'		=>  esc_html__( 'Save The Wishlist', 'advanced-product-wishlist-for-woocomerce' ),
				'create_wishlist_text'	=>  esc_html__( 'Create New Wishlist', 'advanced-product-wishlist-for-woocomerce' ),
				'write_wishlist_name_text' =>  esc_html__( 'Write a wishlist name', 'advanced-product-wishlist-for-woocomerce' ),
				'choose_wishlit'		=>  esc_html__( 'Choose Wishlist', 'advanced-product-wishlist-for-woocomerce' ),
				'wishlist_save_success'	=>  esc_html__( 'successfully save the wishlist', 'advanced-product-wishlist-for-woocomerce' ),				'apww_archive_menu'		=> 'on',
				'apww_archive_menu_txt'	=>  esc_html__( 'Wishlist Archive', 'advanced-product-wishlist-for-woocomerce' ),
				'apww_archive_col_txt_1'=>  esc_html__( 'Wishlist name', 'advanced-product-wishlist-for-woocomerce' ),
				'apww_archive_col_txt_2'=>  esc_html__( 'Wishlist Archive', 'advanced-product-wishlist-for-woocomerce' ),
				'apww_archive_col_txt_3'=>  esc_html__( 'Action', 'advanced-product-wishlist-for-woocomerce' ),
				'apww_archive_order_by' => 'desc',
				
				
			
		);
		
		$defaults['apww_color_scheme']  =  array(
		
				'apww_btn_color'		=> esc_attr('#fff'),
				'apww_btn_bg'			=> esc_attr('#748590'),
				'apww_btn_hover_color'	=> esc_attr('#fff'),
				'apww_btn_hover_bg'		=> esc_attr('#37BF91'),
				
				'apww_btn_min_width'	=> esc_attr('150'),
				'apww_btn_min_height'	=> esc_attr('38'),
				'apww_btn_border_radius'=> esc_attr('15'),
				
				'apww_table_heading_color'=> esc_attr('#fff'),
				'apww_table_heading_bg'	=> esc_attr('#36304a'),
				'apww_table_text_color'	=> esc_attr('#808080'),
				
				'apww_arch_btn_color'	=> esc_attr('#3a4e61'),
				'apww_arch_btn_bg'		=> esc_attr('#748590'),
				'apww_btn_arch_hover_color'	=> esc_attr('#fff'),
				'apww_btn_arch_hover_bg'=> esc_attr('#37BF91'),
				
				
				'apww_modal_color'		=> esc_attr('#000'),
				'apww_modal_bg'			=> esc_attr('#fff'),
				
				'apww_modal_btn_color'	=> esc_attr('#fff'),
				'apww_modal_btn_bg'		=> esc_attr('#748590'),
				'apww_modal_h_btn_color'=> esc_attr('#fff'),
				'apww_modal_h_btn_bg'	=> esc_attr('#37BF91'),
				
			
		);
		
		
		return $defaults;
	}
	
	public function table_heading_localization( $key ){
		
		switch ( $key  ) {
		case 'image':
			return esc_html__( 'Image', 'advanced-product-wishlist-for-woocomerce' );
		break;
		case 'title':
			return esc_html__( 'Product Title', 'advanced-product-wishlist-for-woocomerce' );
		break;
		case 'price':
			return esc_html__( 'Price', 'advanced-product-wishlist-for-woocomerce' );
		break;
		case 'add_to_cart':
			return esc_html__( 'Action', 'advanced-product-wishlist-for-woocomerce' );
		break;
		case 'excerpt':
			return esc_html__( 'Sort Description', 'advanced-product-wishlist-for-woocomerce' );
		break;
		case 'description':
			return esc_html__( 'Description', 'advanced-product-wishlist-for-woocomerce' );
		break;
		case 'stock':
			return esc_html__( 'Stock Status', 'advanced-product-wishlist-for-woocomerce' );
		break;
		case 'rating':
			return esc_html__( 'Rating', 'advanced-product-wishlist-for-woocomerce' );
		break;
		case 'quantity':
			return esc_html__( 'Quantity', 'advanced-product-wishlist-for-woocomerce' );
		break;
		case 'meta':
			return esc_html__( 'Additional information', 'advanced-product-wishlist-for-woocomerce' );
		break;
		case 'additional':
			return esc_html__( 'Additional information', 'advanced-product-wishlist-for-woocomerce' );
		break;
		default:
		
		} 
	}
	
}

global $apww_option;

$apww_option = new Advanced_Product_Wishlist_For_Woocomerce_Options();