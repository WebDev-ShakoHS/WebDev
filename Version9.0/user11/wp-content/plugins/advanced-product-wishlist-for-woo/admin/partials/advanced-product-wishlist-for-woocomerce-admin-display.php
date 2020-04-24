<?php
/**
 * WordPress settings API demo class
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://athemeart.com/
 * @since      1.0.0
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/admin/partials
 */
if ( !class_exists('Advanced_Product_Wishlist_For_Woocomerce_Admin_Display' ) ):
class Advanced_Product_Wishlist_For_Woocomerce_Admin_Display {
	
	/**
	 * The settings_api that's responsible for plugins options
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Advanced_Product_Wishlist_For_Woocomerce_Admin_Settings_API    $settings_api   
	 */
    private $settings_api;
	
	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Advanced_Product_Wishlist_For_Woocomerce_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;
	
	
	
	
	
	/**
	 * Define the core functionality of the plugin.
	 *
	 *
	 * @since    1.0.0
	 */
    function __construct() {
        $this->settings_api = new Advanced_Product_Wishlist_For_Woocomerce_Admin_Settings_API;
		
		$this->loader = new Advanced_Product_Wishlist_For_Woocomerce_Loader;
		
		
		$this->loader->add_action( 'admin_init', $this, 'admin_init' );
        $this->loader->add_action( 'admin_menu', $this, 'admin_menu' );
		
		$this->loader->run();
		
    }
	
	
	

	/**
	 * Define the core functionality of the plugin.
	 *
	 *
	 * @since    1.0.0
	 */
    function admin_init() {
        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );
        //initialize settings
        $this->settings_api->admin_init();
		
		global $product; 
		
		// Get product attributes
		
    }
	
	
    public function admin_menu() {
        
		add_submenu_page( 'woocommerce', 'Advanced Product Wishlist', 'Advanced Product Wishlist', 'manage_options', 'advanced-product-wishlist-for-woocomerce', array($this, 'plugin_page') );
		 
    }
    public function get_settings_sections() {
        $sections = array(
			array(
                'id'    => 'apw_general_settings',
                'title' => esc_attr__( 'General Settings', 'advanced-product-wishlist-for-woocomerce' )
            ),
			array(
                'id'    => 'apw_social_share',
                'title' => esc_attr__( 'Social Networks & Share', 'advanced-product-wishlist-for-woocomerce' )
            ),
			array(
                'id'    => 'apw_layout',
                'title' => esc_attr__( 'Layout', 'advanced-product-wishlist-for-woocomerce' )
            ),
			array(
                'id'    => 'apw_wishtlist_achive',
                'title' => esc_attr__( 'Wishlist Archive', 'advanced-product-wishlist-for-woocomerce' )
            ),
			array(
                'id'    => 'apww_color_scheme',
                'title' => esc_attr__( 'Color Scheme', 'advanced-product-wishlist-for-woocomerce' )
            ),
			array(
                'id'    => 'apww_license',
                'title' => esc_html__( 'License', 'advanced-product-wishlist-for-woocomerce' )
            ),
           
        );
        return $sections;
    }
    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    public function get_settings_fields() {
		
		global $apww_option;
		$default = $apww_option->get_default();
		
		
		$general = ( !empty( $default['apw_general_settings'] ) && is_array( $default['apw_general_settings'] ) ) ? wp_parse_args( $default['apw_general_settings'] ) : array();
		$socail  = ( !empty( $default['apw_social_share'] ) && is_array( $default['apw_social_share'] ) ) 		  ? wp_parse_args( $default['apw_social_share'] ) : array();
		
		$layout  = ( !empty( $default['apw_layout'] ) && is_array( $default['apw_layout'] ) ) 					  ? wp_parse_args( $default['apw_layout'] ) : array();
		
		
		$customer = ( !empty( $default['apw_wishtlist_achive'] ) && is_array( $default['apw_wishtlist_achive'] ) ) 					  ? wp_parse_args( $default['apw_wishtlist_achive'] ) : array();
		
		$color	  = ( !empty( $default['apww_color_scheme'] ) && is_array( $default['apww_color_scheme'] ) ) 					  ? wp_parse_args( $default['apww_color_scheme'] ) : array();
		
			
        $settings_fields = array(
			'apw_general_settings' => array(
			
				 array(
                    'name'    => 'wishlist_page',
                    'label'   => __( 'Wishlist Page', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'Page contents: [apww_display_wishlist]', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'select',
                    'options' => $this->get_pages(),
					'sanitize_callback' => 'sanitize_text_field'
                ),
				array(
					'name'  			=> 'wishlist_menu',
					'label' 			=> __( 'Wishlist Menu', 'advanced-product-wishlist-for-woocomerce' ),
					'desc'  			=> __( ' Show the wishlist menu with woocomerce My Account Menu', 'advanced-product-wishlist-for-woocomerce' ),
					'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $general['wishlist_menu']  ),
				),
				 array(
                    'name'    => 'apww_wishlist_order_by',
                    'label'   => __( 'Wishlist order by', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'Choose order for the wishlist display', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'select',
                    'default' =>  esc_attr ( $general['apww_wishlist_order_by']  ),
                    'options' => array(
                        'asc' 		 	  => __( 'ASC', 'advanced-product-wishlist-for-woocomerce' ),
                        'desc'  		  => __( 'DESC', 'advanced-product-wishlist-for-woocomerce' ),
						
                    ),
					'sanitize_callback' => 'sanitize_text_field'
                ),	
				array(
                    'name'        => 'html',
                    'desc'        => __( 'Button.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'        => 'html'
                ),
				 array(
                    'name'    => 'btn_type',
                    'label'   => __( 'Link or Button', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'Choose if you want to use a link or a button for the wishlist', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'select',
                    'default' =>  esc_attr ( $general['btn_type']  ),
                    'options' => array(
                        'link' 		  => __( 'Link', 'advanced-product-wishlist-for-woocomerce' ),
                        'btn'  		  => __( 'Button', 'advanced-product-wishlist-for-woocomerce' ),
						'icon_link'   => __( 'Icon link', 'advanced-product-wishlist-for-woocomerce' ),
						'icon_btn_tx' => __( 'Icon button / text', 'advanced-product-wishlist-for-woocomerce' ),
						'icon_btn' 	  => __( 'Icon button', 'advanced-product-wishlist-for-woocomerce' ),
						'icon' 		  => __( 'Icon', 'advanced-product-wishlist-for-woocomerce' ),
                    ),
					'sanitize_callback' => 'sanitize_text_field'
                ),
				array(
                    'name'  			=> 'show_single_product',
                    'label' 			=> __( 'Show button in single product page', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'  			=> __( 'Say if you want to show the button in the single product page. ', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $general['show_single_product']  ),
                ),
				
				array(
                    'name'  			=> 'show_single_archive',
                    'label' 			=> __( 'Show button in products shop / archive ', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'  			=> __( 'Say if you want to show the button in the products list', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $general['show_single_archive']  ),
                ),
		
				array(
                    'name'    => 'button_position',
                    'label'   => __( 'Position', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'Choose a position where will load the wishlist button.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'select',
                    'default' =>  esc_attr ( $general['button_position']  ),
                    'options' => array(
                        'before_add' 		=> __( 'Before "Add to Cart" button', 'advanced-product-wishlist-for-woocomerce' ),
                        'after_add' 		=> __( 'After "Add to Cart" button', 'advanced-product-wishlist-for-woocomerce' ),
						'above_img_left' 	=> __( 'Above product image ( left )', 'advanced-product-wishlist-for-woocomerce' ),
						'above_img_right' 	=> __( 'Above product image ( Right )', 'advanced-product-wishlist-for-woocomerce' ),
						'before_title' 		=> __( 'Before "Title" button', 'advanced-product-wishlist-for-woocomerce' ),
                        'after_title' 		=> __( 'After "Title" button', 'advanced-product-wishlist-for-woocomerce' ),
                    ),
					'sanitize_callback' => 'sanitize_text_field'
                ),
				
				array(
                    'name'  			=> 'legacy_mode',
                    'label' 			=> __( 'Active legacy mode ', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'  			=> __( "Don't You see the wishlist button , Active the legacy mode", 'advanced-product-wishlist-for-woocomerce' ),
                    'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $general['legacy_mode']  ),
                ),
			
					array(
                    'name'  			=> 'show_preloader',
                    'label' 			=> __( 'Show preloader', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'  			=> __( "Don't You see the wishlist button , Active the legacy mode", 'advanced-product-wishlist-for-woocomerce' ),
                    'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $general['show_preloader']  ),
                ),
				
				array(
                    'name'    => 'alert_type',
                    'label'   => __( 'Alert type', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'Choose a alert type .after added wishlist the alert will be appear', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'select',
                    'default' =>  esc_attr ( $general['alert_type']  ),
                    'options' => array(
					
                        'default_alert' 		=> __( 'Default', 'advanced-product-wishlist-for-woocomerce' ),
                        'css_modal_alert' 		=> __( 'CSS Modal', 'advanced-product-wishlist-for-woocomerce' ),
						'javascript_popup_alert'=> __( 'Javascript Popup', 'advanced-product-wishlist-for-woocomerce' ),
						'no_alert' 				=> __( 'None', 'advanced-product-wishlist-for-woocomerce' ),
						
                    ),
					'sanitize_callback' => 'sanitize_text_field'
                ),

				
				array(
                    'name'        => 'localization',
                    'desc'        => __( 'Localization Text.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'        => 'html'
                ),
				array(
						'name'              => 'btn_text',
						'label'             => __( 'Link/Button text', 'advanced-product-wishlist-for-woocomerce' ),
						'desc'              => __( 'Type the text to use for the button or the link of the wishlist.', 'advanced-product-wishlist-for-woocomerce' ),
						'placeholder'       => esc_attr ( $general['btn_text']  ),
						'type'              => 'text',
						'default'           => esc_attr ( $general['btn_text']  ),
						'sanitize_callback' => 'sanitize_text_field'
					),
				array(
						'name'              => 'added_wishlist',
						'label'             => __( 'Added wishlist text', 'advanced-product-wishlist-for-woocomerce' ),
						'desc'              => __( 'leave empty to hide', 'advanced-product-wishlist-for-woocomerce' ),
						'placeholder'       => esc_attr ( $general['added_wishlist']  ),
						'type'              => 'text',
						'default'           => esc_attr ( $general['added_wishlist']  ),
						'sanitize_callback' => 'sanitize_text_field'
					),
					
				array(
						'name'              => 'already_wishlist',
						'label'             => __( 'Product already in wishlist text', 'advanced-product-wishlist-for-woocomerce' ),
						'desc'              => __( 'leave empty to hide', 'advanced-product-wishlist-for-woocomerce' ),
						'placeholder'       => esc_attr ( $general['already_wishlist']  ),
						'type'              => 'text',
						'default'           => esc_attr ( $general['already_wishlist']  ),
						'sanitize_callback' => 'sanitize_text_field'
					),		
                array(
						'name'              => 'remove_wishlist',
						'label'             => __( 'Remove text', 'advanced-product-wishlist-for-woocomerce' ),
						'desc'              => __( 'leave empty to hide', 'advanced-product-wishlist-for-woocomerce' ),
						'placeholder'       => esc_attr ( $general['remove_wishlist']  ),
						'type'              => 'text',
						'default'           => esc_attr ( $general['remove_wishlist']  ),
						'sanitize_callback' => 'sanitize_text_field'
					),	
					
				array(
						'name'              => 'after_remove',
						'label'             => __( 'After Remove text', 'advanced-product-wishlist-for-woocomerce' ),
						'desc'              => __( 'leave empty to hide', 'advanced-product-wishlist-for-woocomerce' ),
						'placeholder'       => esc_attr ( $general['after_remove']  ),
						'type'              => 'text',
						'default'           => esc_attr ( $general['after_remove']  ),
						'sanitize_callback' => 'sanitize_text_field'
					),	
					
				array(
						'name'              => 'total_number_of_text',
						'label'             => __( 'Wishlist counter text', 'advanced-product-wishlist-for-woocomerce' ),
						'desc'              => __( 'leave empty to hide', 'advanced-product-wishlist-for-woocomerce' ),
						'placeholder'       => esc_attr ( $general['total_number_of_text']  ),
						'type'              => 'text',
						'default'           => esc_attr ( $general['total_number_of_text']  ),
						'sanitize_callback' => 'sanitize_text_field'
					),	
				array(
                    'name'  			=> 'wishlist_btn_text',
                    'label' 			=> __( 'Social text  ', 'advanced-product-wishlist-for-woocomerce' ),
                   	'desc'              => __( 'leave empty to hide', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'  			=> 'text',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $general['wishlist_btn_text']  ),
                ),	
				array(
                    'name'  			=> 'wishlist_menu_txt',
                    'label' 			=> __( 'Wishlist', 'advanced-product-wishlist-for-woocomerce' ),
                   	'desc'              => __( 'leave empty to hide', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'  			=> 'text',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $general['wishlist_menu_txt']  ),
                ),	
				
				
			),// end array
			'apw_social_share' => array(
			
				array(
					'name'  			=> 'facebook',
					'label' 			=> __( 'Share on Facebook', 'advanced-product-wishlist-for-woocomerce' ),
					'desc'  			=> __( ' Show "Share on Facebook" button . ', 'advanced-product-wishlist-for-woocomerce' ),
					'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $socail['facebook']  ),
				),
				array(
					'name'  			=> 'twitter',
					'label' 			=> __( 'Tweet on Twitter', 'advanced-product-wishlist-for-woocomerce' ),
					'desc'  			=> __( ' Show "Tweet on Twitter" button ', 'advanced-product-wishlist-for-woocomerce' ),
					'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $socail['twitter']  ),
				),
				
				array(
					'name'  			=> 'pinterest',
					'label' 			=> __( ' Show "Pin on Pinterest" button ', 'advanced-product-wishlist-for-woocomerce' ),
					'desc'  			=> __( ' Show "Pin on Pinterest" button ', 'advanced-product-wishlist-for-woocomerce' ),
					'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $socail['pinterest']  ),
				),
				
				array(
					'name'  			=> 'linkedin',
					'label' 			=> __( 'LinkedIn', 'advanced-product-wishlist-for-woocomerce' ),
					'desc'  			=> __( ' Show "Share by LinkedIn" button ( only on phones ) ', 'advanced-product-wishlist-for-woocomerce' ),
					'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $socail['linkedin']  ),
				),
				
				array(
					'name'  			=> 'stumbleupon',
					'label' 			=> __( 'Stumbleupon', 'advanced-product-wishlist-for-woocomerce' ),
					'desc'  			=> __( ' Show "Share by Stumbleupon" button ( only on phones ) ', 'advanced-product-wishlist-for-woocomerce' ),
					'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $socail['stumbleupon']  ),
				),
				
				
				array(
					'name'  			=> 'email',
					'label' 			=> __( 'Share by Email', 'advanced-product-wishlist-for-woocomerce' ),
					'desc'  			=> __( ' Show "Share by Email" button ', 'advanced-product-wishlist-for-woocomerce' ),
					'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $socail['email']  ),
				),	
				
				
				
				array(
                    'name'  			=> 'social_title',
                    'label' 			=> __( 'Social title ', 'advanced-product-wishlist-for-woocomerce' ),
                   
                    'type'  			=> 'text',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $socail['social_title']  ),
                ),
				
				array(
                    'name'  			=> 'social_text',
                    'label' 			=> __( 'Social text  ', 'advanced-product-wishlist-for-woocomerce' ),
                   'desc'  			=> __( ' It will be used by Twitter and Pinterest. Use %wishlist_url% where you want to show the URL of your wishlist.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'  			=> 'textarea',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $socail['social_text']  ),
                ),
				
				
							
			),	// end array
			'apw_layout' => array(
			
				array(
                    'name'  			=> 'layout_type',
                    'label' 			=> __( 'Wishlist Layout', 'advanced-product-wishlist-for-woocomerce' ),
                     'desc'   			=> __( 'Choose a layout for wishlist page', 'advanced-product-wishlist-for-woocomerce' ),
					'sanitize_callback' => 'sanitize_text_field',
					'type'    => 'select',
                    'default' =>  esc_attr ( $layout['layout_type']  ),
                    'options' => array(
					
                        'woocommerce' 			=> __( 'WooCommerce Grids', 'advanced-product-wishlist-for-woocomerce' ),
						'table'					=> __( 'Table', 'advanced-product-wishlist-for-woocomerce' ),
						
						
                    ),
					
					
                ),
				
				array(
                    'name'  			=> 'additional_settings',
                    'label' 			=> __( 'Additional', 'advanced-product-wishlist-for-woocomerce' ),
					'sanitize_callback' => 'advanced_product_wishlist_for_woocomerce_sanitize_array',
					'type'    => 'multicheck',
                    'default' =>  wp_unslash ( $layout['additional_settings']  ),
                    'options' => array(
					
                        'bulk_action' 			=> __( 'Bulk Remove', 'advanced-product-wishlist-for-woocomerce' ),
                        'checkout' 				=> __( 'Bulk Checkout', 'advanced-product-wishlist-for-woocomerce' ),
						
                    ),
                ),
				
				array(
					'name'    => 'product_elements',
					'sanitize_callback' => 'advanced_product_wishlist_for_woocomerce_sanitize_array',
					'label'   => __( 'Product elements', 'advanced-product-wishlist-for-woocomerce' ),
					'desc'    => __( 'Select the fields to show in the comparison table and order them by drag&drop (are included also the woocommerce attributes)', 'advanced-product-wishlist-for-woocomerce' ),
					'type'    => 'sortablecheckbox',
					'default' =>  wp_unslash ( $layout['product_elements']  ),
					'options' =>   array(
						'image' 		=> __( 'Image', 'advanced-product-wishlist-for-woocomerce' ),
						'title' 		=> __( 'Title', 'advanced-product-wishlist-for-woocomerce' ),
						'price' 		=> __( 'Price', 'advanced-product-wishlist-for-woocomerce' ),
						'add_to_cart'	=> __( 'Add to cart', 'advanced-product-wishlist-for-woocomerce' ),
						'excerpt' 		=> __( 'Excerpt', 'advanced-product-wishlist-for-woocomerce' ),
						'description' 	=> __( 'Description', 'advanced-product-wishlist-for-woocomerce' ),
						'stock' 		=> __( 'Stock Status ', 'advanced-product-wishlist-for-woocomerce' ),
						'rating' 		=> __( 'Rating', 'advanced-product-wishlist-for-woocomerce' ),
						'quantity' 		=> __( 'Quantity', 'advanced-product-wishlist-for-woocomerce' ),
						'on_sale' 		=> __( 'On Sale', 'advanced-product-wishlist-for-woocomerce' ),
						'meta' 			=> __( 'Product Meta ( SKU, Category, Tag as woocomerce settings )', 'advanced-product-wishlist-for-woocomerce' ),
						'additional' 	=> __( 'Additional information ( Weight, Dimensions, Tag as woocomerce settings )', 'advanced-product-wishlist-for-woocomerce' ),
					) ,
					'sanitize_callback' => 'maybe_serialize'
				),
				
			),
			'apw_wishtlist_achive' => array(
			
				array(
                    'name'  			=> 'Wishlist_save',
                    'label' 			=> __( 'wishlist Archive', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'  			=> __( 'check if you want to enable.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $customer['wishlist_category']  ),
                ),
				/* array(
                    'name'    => 'apww_archive_order_by',
                    'label'   => __( 'Archive order by', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'Choose order for archive display', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'select',
                    'default' =>  esc_attr ( $customer['apww_archive_order_by']  ),
                    'options' => array(
                        'asc' 		 	  => __( 'ASC', 'advanced-product-wishlist-for-woocomerce' ),
                        'desc'  		  => __( 'DESC', 'advanced-product-wishlist-for-woocomerce' ),
						
                    ),
					'sanitize_callback' => 'sanitize_text_field'
                ),*/
				array(
                    'name'  			=> 'wishlist_btn_text',
                    'label' 			=> __( 'Save the wishlist text ', 'advanced-product-wishlist-for-woocomerce' ),
					'sanitize_callback' => 'sanitize_text_field',
					'type'              => 'text',
					'default'           => esc_attr ( $customer['wishlist_btn_text']  ),
                ),
				
				array(
                    'name'  			=> 'create_wishlist_text',
                    'label' 			=> __( 'Create New Wishlist text ', 'advanced-product-wishlist-for-woocomerce' ),
					'sanitize_callback' => 'sanitize_text_field',
					'type'              => 'text',
					'default'           => esc_attr ( $customer['create_wishlist_text']  ),
                ),
				array(
                    'name'  			=> 'write_wishlist_name_text',
                    'label' 			=> __( 'Write a wishlist name text ', 'advanced-product-wishlist-for-woocomerce' ),
					'sanitize_callback' => 'sanitize_text_field',
					'type'              => 'text',
					'default'           => esc_attr ( $customer['write_wishlist_name_text']  ),
                ),
				array(
                    'name'  			=> 'choose_wishlit',
                    'label' 			=> __( 'Choose Wishlist text ', 'advanced-product-wishlist-for-woocomerce' ),
					'sanitize_callback' => 'sanitize_text_field',
					'type'              => 'text',
					'default'           => esc_attr ( $customer['choose_wishlit']  ),
                ),
				
				array(
                    'name'  			=> 'wishlist_save_success',
                    'label' 			=> __( 'Wishlist save success text ', 'advanced-product-wishlist-for-woocomerce' ),
					'sanitize_callback' => 'sanitize_text_field',
					'type'              => 'text',
					'default'           => esc_attr ( $customer['wishlist_save_success']  ),
                ),
				
				array(
					'name'  			=> 'apww_archive_menu',
					'label' 			=> __( 'Wishlist archive menu', 'advanced-product-wishlist-for-woocomerce' ),
					'desc'  			=> __( ' Show the wishlist acrchive naviagtion with woocomerce My Account Menu ', 'advanced-product-wishlist-for-woocomerce' ),
					'type'  			=> 'checkbox',
					'sanitize_callback' => 'sanitize_text_field',
					'default'			=>  esc_attr ( $customer['apww_archive_menu']  ),
				),	
				
				array(
                    'name'  			=> 'apww_archive_menu_txt',
                    'label' 			=> __( 'Achive menu text ', 'advanced-product-wishlist-for-woocomerce' ),
					'sanitize_callback' => 'sanitize_text_field',
					'type'              => 'text',
					'default'           => esc_attr ( $customer['apww_archive_menu_txt']  ),
                ),
				
				array(
                    'name'  			=> 'apww_archive_col_txt_1',
                    'label' 			=> __( 'Achive Columns - 1', 'advanced-product-wishlist-for-woocomerce' ),
					'sanitize_callback' => 'sanitize_text_field',
					'type'              => 'text',
					'default'           => esc_attr ( $customer['apww_archive_col_txt_1']  ),
                ),
				array(
                    'name'  			=> 'apww_archive_col_txt_2',
                    'label' 			=> __( 'Achive Columns - 2', 'advanced-product-wishlist-for-woocomerce' ),
					'sanitize_callback' => 'sanitize_text_field',
					'type'              => 'text',
					'default'           => esc_attr ( $customer['apww_archive_col_txt_2']  ),
                ),
				array(
                    'name'  			=> 'apww_archive_col_txt_3',
                    'label' 			=> __( 'Achive Columns - 3', 'advanced-product-wishlist-for-woocomerce' ),
					'sanitize_callback' => 'sanitize_text_field',
					'type'              => 'text',
					'default'           => esc_attr ( $customer['apww_archive_col_txt_3']  ),
                ),
				
				
			),
			
			'apww_color_scheme' => array(
			
				array(
                    'name'    => 'apww_btn_color',
                    'label'   => __( 'Wishlist Button Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_btn_color']  ),
                ),
				
				array(
                     'name'    => 'apww_btn_bg',
                    'label'   => __( 'Wishlist Button Background Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_btn_bg']  ),
                ),
				
				
				array(
                    'name'    => 'apww_btn_hover_color',
                    'label'   => __( 'Wishlist Button Hover Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_btn_hover_color']  ),
                ),
				
				array(
                     'name'    => 'apww_btn_hover_bg',
                    'label'   => __( 'Wishlist Button Hover Background Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_btn_hover_bg']  ),
                ),
				array(
                    'name'        => 'html',
                    'type'        => 'html'
                ),
				
				array(
                    'name'              => 'apww_btn_min_width',
                    'label'             => __( 'Button MIN width', 'advanced-product-wishlist-for-woocomerce' ),
                    'min'               => 1,
                    'max'               => 5000,
                    'step'              => '1',
                    'type'              => 'number',
                    'default'			=>  esc_attr ( $color['apww_btn_min_width']  ),
                    'sanitize_callback' => 'floatval',
					 'desc'  			 => __( 'the value will be PX.', 'advanced-product-wishlist-for-woocomerce' ),
					
                ),
				array(
                    'name'              => 'apww_btn_min_height',
                    'label'             => __( 'Button Height', 'advanced-product-wishlist-for-woocomerce' ),
                    'min'               => 1,
                    'max'               => 5000,
                    'step'              => '1',
                    'type'              => 'number',
                    'default'			=>  esc_attr ( $color['apww_btn_min_height']  ),
                    'sanitize_callback' => 'floatval',
					 'desc'  			 => __( 'the value will be PX.', 'advanced-product-wishlist-for-woocomerce' ),
                ),
				array(
                    'name'              => 'apww_btn_border_radius',
                    'label'             => __( 'Button Border radius', 'advanced-product-wishlist-for-woocomerce' ),
                    'min'               => 1,
                    'max'               => 5000,
                    'step'              => '1',
                    'type'              => 'number',
                    'default'			=>  esc_attr ( $color['apww_btn_border_radius']  ),
                    'sanitize_callback' => 'floatval',
					 'desc'  			 => __( 'the value will be PX.', 'advanced-product-wishlist-for-woocomerce' ),
                ),
				
				array(
                    'name'        => 'apww_table',
                    'type'        => 'html'
                ),
				array(
                    'name'    => 'apww_table_heading_color',
                    'label'   => __( 'Table heading color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_table_heading_color']  ),
                ),
				array(
                     'name'    => 'apww_table_heading_bg',
                    'label'   => __( 'Table heading Background', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_table_heading_bg']  ),
                ),
				
				array(
                    'name'    => 'apww_table_text_color',
                    'label'   => __( 'Table heading text color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_table_text_color']  ),
                ),
				
				array(
                    'name'        => 'apww_archive_html',
                    'type'        => 'html'
                ),
				
				
				array(
                    'name'    => 'apww_arch_btn_color',
                    'label'   => __( 'Archive Button Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_arch_btn_color']  ),
                ),
				
				array(
                     'name'    => 'apww_arch_btn_bg',
                    'label'   => __( 'Archive Button Background Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                   'default'			=>  esc_attr ( $color['apww_arch_btn_bg']  ),
                ),
				
				
				array(
                    'name'    => 'apww_btn_arch_hover_color',
                    'label'   => __( 'Archive Button Hover Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_btn_arch_hover_color']  ),
                ),
				
				array(
                     'name'    => 'apww_btn_arch_hover_bg',
                    'label'   => __( 'Archive Button Hover Background Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                   'default'			=>  esc_attr ( $color['apww_btn_arch_hover_bg']  ),
                ),
				
				array(
                    'name'        => 'apww_modal_html',
                    'type'        => 'html'
                ),
				
				array(
                     'name'    => 'apww_modal_color',
                    'label'   => __( 'Modal window color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                   'default'			=>  esc_attr ( $color['apww_modal_color']  ),
                ),
				
				array(
                     'name'    => 'apww_modal_bg',
                    'label'   => __( 'Modal window background color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                   'default'			=>  esc_attr ( $color['apww_modal_bg']  ),
                ),
				
				array(
                    'name'    => 'apww_modal_btn_color',
                    'label'   => __( 'Modal Button Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_btn_color']  ),
                ),
				
				array(
                     'name'    => 'apww_modal_btn_bg',
                    'label'   => __( 'Modal Button Background Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_modal_btn_bg']  ),
                ),
				
				
				array(
                    'name'    => 'apww_modal_h_btn_color',
                    'label'   => __( 'Modal Button hover Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_modal_h_btn_color']  ),
                ),
				
				array(
                     'name'    => 'apww_modal_h_btn_bg',
                    'label'   => __( 'Modal Button hover Background Color', 'advanced-product-wishlist-for-woocomerce' ),
                    'desc'    => __( 'The Plugins comes with unlimited color schemes for your theme\'s styling.', 'advanced-product-wishlist-for-woocomerce' ),
                    'type'    => 'color',
					'sanitize_callback' => 'sanitize_text_field',
                    'default'			=>  esc_attr ( $color['apww_modal_h_btn_bg']  ),
                ),
				
			),
			// end array
			'apww_license' => array(
				
				array(
                    'name'    => 'apww_license_key',
                    'label'   => esc_attr__( 'license key:', 'wedevs' ),
                    'desc'    => esc_html__( 'Please activate Your licensed with purchased email address : ', 'apsw-lang' ),
                    'type'    => 'text',
					'sanitize_callback' => 'sanitize_text_field'
                ),
				
				array(
                    'name'    => 'apsw_license_status',
                    'label'   => esc_attr__( 'license status', 'wedevs' ),
                    'desc'    => esc_html__( 'In order to receive all benefits of Advanced Product Search For WooCommerce, you need to activate your copy of the plugin, Please activate Your licensed with purchased email address : ', 'apsw-lang' ),
                    'type'    => 'license',
					
                ),
			)
							
        );
		
		
		
		
        return $settings_fields;
    }
	
  
	/**
     * Create all settions options
     *
     * @return array page names with key value pairs
     */
   public function plugin_page() {
        echo '<div class="wrap apsw_settings_wrap">';
        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();
        echo '</div>';
    }
    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    public function get_pages() {
        $pages = get_pages();
        $pages_options = array();
		$pages_options[0] = esc_html__( 'Select a page', 'advanced-product-wishlist-for-woocomerce' );
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }
        return $pages_options;
    }
	
}
endif;


//var_dump( get_terms( 'product_attributes') );