<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://athemeart.com/
 * @since      1.0.0
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/public
 * @author     aThemeArt <athemeart.com@gmail.com>
 */
class Advanced_Product_Wishlist_For_Woocomerce_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;
	
	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Advanced_Product_Wishlist_For_Woocomerce_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	public $loader;
	
	
	/**
	 * The option 
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Advanced_Product_Wishlist_For_Woocomerce_Options    $get_option .
	 */
	private $option;
	
	

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version 	   = $version;
		
		$this->loader = new Advanced_Product_Wishlist_For_Woocomerce_Loader;
		
		$this->option = new Advanced_Product_Wishlist_For_Woocomerce_Options;
		
		$this->load_dependencies();
		
	}
	
	/**
	 * Load the wishlist on assign page
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function display_wishlist_assign_page( $content ){
		
		$options 	= $this->option->get_option('apw_general_settings');
		
		if( !empty( $options['wishlist_page'] ) && absint( $options['wishlist_page'] )  == get_the_ID() ){
			$content = $this->display_wishlist_data();	
			
		}
		
		return $content;
	}
		
	/**
	 * Load the required dependencies for the public page facing functionality.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	public function load_dependencies() {
	
		$this->loader->load_module('public/class-advanced-product-wishlist-for-woocomerce-user-menu');
		new Advanced_Product_Wishlist_For_Woocomerce_User_Menu();
	}
	
	/**
	 * Map and init blog posts widget widget 
	 *
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function widget_map_and_init() {
		
		 $config = array();
		 $config['_display_wishlist'] = array(
			 /**
             * Unique widget id
             * @var string (required)
             */
            'base_id' => 'apww_display_wishlist_widget',
			/**
             * Widget name
             * @var string (required)
             */
            'name' => esc_html__('+ APWW Display Wishlist', 'advanced-product-wishlist-for-woocomerce'),
			/**
             * Widger callback function to render frontend html
             * @var string|array String if function name is passed, if using class method than it will be array (required)
             */
            'callback' => array( $this, 'wishlist_widget_display_render_view' ),
			/**
             * Widget Options
             * Option array passed to wp_register_sidebar_widget() using $options.
             * @see https://codex.wordpress.org/Function_Reference/wp_register_sidebar_widget
             * @var array|string (optional)
             */
            'widget_ops' => array(
                'classname' => 'apww-wishlist-widget-css-class',
                'description' => esc_html__( 'Add the widget to display wishlist', 'advanced-product-wishlist-for-woocomerce' ),
                'customize_selective_refresh' => false,
            ),
			/**
             * Field arguments
             * @see field reference for supported field types
             */
            'form_fields' => array(
				'title' => array(
					'type' => 'text', // Required  // Input type: text, password, search, tel, button
					'label' => esc_html__( 'Title:', 'advanced-product-wishlist-for-woocomerce' ), // Optional
				),
			)
			
		 );
		 
		 $config['_wishlist_counter'] = array(
			 /**
             * Unique widget id
             * @var string (required)
             */
            'base_id' => 'apww_wishlist_counter_widget',
			/**
             * Widget name
             * @var string (required)
             */
            'name' => esc_html__('+ APWW Wishlist Total Product Counter', 'advanced-product-wishlist-for-woocomerce'),
			/**
             * Widger callback function to render frontend html
             * @var string|array String if function name is passed, if using class method than it will be array (required)
             */
            'callback' => array( $this, 'wishlist_counter_widgets_render_view' ),
			/**
             * Widget Options
             * Option array passed to wp_register_sidebar_widget() using $options.
             * @see https://codex.wordpress.org/Function_Reference/wp_register_sidebar_widget
             * @var array|string (optional)
             */
            'widget_ops' => array(
                'classname' => 'apww-wishlist-counter-widget-css-class',
                'description' => esc_html__( 'Add the widget to display total product in wishlist', 'advanced-product-wishlist-for-woocomerce' ),
                'customize_selective_refresh' => false,
            ),
			/**
             * Field arguments
             * @see field reference for supported field types
             */
            'form_fields' => array(
				'title' => array(
					'type' => 'text', // Required  // Input type: text, password, search, tel, button
					'label' => esc_html__( 'Title:', 'advanced-product-wishlist-for-woocomerce' ), // Optional
				),
				'wishlist_btn_text' => array(
					'type' => 'text', // Required  // Input type: text, password, search, tel, button
					'label' => esc_html__( 'View Wishlist Button Text:', 'advanced-product-wishlist-for-woocomerce' ), // Optional
				),
				'wishlist_btn_url' => array(
					'type' => 'text', // Required  // Input type: text, password, search, tel, button
					'label' => esc_html__( 'View Wishlist Button URL:', 'advanced-product-wishlist-for-woocomerce' ), // Optional
				),
			)
			
		 );
		 return $config;
	}
	/**
	 * Wishlist Counter Widget  view
	 *
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function wishlist_counter_widgets_render_view(  $args, $instance, $form_fields, $widget_id ){
		
		$options 			= $this->option->get_option('apw_general_settings');
		
		// Set widget title
        $widget_title = isset( $instance['title'] ) ? $instance['title'] : '';
		$btn_text	  = isset( $instance['wishlist_btn_text'] ) ? $instance['wishlist_btn_text'] : '';
		$btn_url 	  = isset( $instance['wishlist_btn_url'] ) ? $instance['wishlist_btn_url'] : 0;
		
        $wishlist_permalink = get_permalink( absint( $options['wishlist_page'] ) );
		
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        
        if ( ! empty( $widget_title ) ) {
            echo $args['before_title'] . esc_html( $widget_title ) . $args['after_title'];
        }
		
		
		$product = $this->get_product_query();
		
		if( !empty( $product )  ){
			echo count( $product ) .' '. esc_html( $options['total_number_of_text'] ) ;
		}
		if( !empty( $btn_text ) && !empty( $btn_url )  )
		{
			echo '<a href="'. esc_url(  $wishlist_permalink ) .'" class="apww_wishlist_counter">'. esc_html( $btn_text ) .'</a>';	
		}

		// before and after widget arguments are defined by themes
        echo $args['after_widget'];
			
	}
	
	/**
	 * Wishlist widget display render view
	 *
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function wishlist_widget_display_render_view(  $args, $instance, $form_fields, $widget_id ){
		
		
		// Set widget title
        $widget_title = isset( $instance['title'] ) ? $instance['title'] : '';
        
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        
        if ( ! empty( $widget_title ) ) {
            echo $args['before_title'] . esc_html( $widget_title ) . $args['after_title'];
        }

		
		 echo $this->display_wishlist_data();	

		// before and after widget arguments are defined by themes
        echo $args['after_widget'];
		
			
	}
	/**
	 * Css Pop up alert
	 *
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function css_alert_html(){
		$html 				= '';
		$options 			= $this->option->get_option('apw_general_settings');
	
		$args = array(
		
			'btn_text' 		=> isset( $options['wishlist_btn_text'] ) ? $options['wishlist_btn_text'] : '',
			'btn_url_id' 	=> isset( $options['wishlist_page'] )     ? $options['wishlist_page'] : '',
			
		);
		
		if( get_query_var( 'appw-action-type' ) ){
			$args ['action'] 	= 'appw-remove';
		}
		
		$args  = apply_filters( 'apww_css_alert_html', $args );
		
	
		if( !empty( $options['alert_type'] ) ){
			
			$html .= $this->loader->apww_get_template( 'apww-alert.php', wp_unslash( $args ) );
		}
		
	}
	/**
	 * Ajax Save wishlist data
	 *
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function display_wishlist_data( $params = array() ){
		global $woocommerce;
		
		extract( shortcode_atts(array(
			'layout_src' => ''
		), $params) );	
		
		
		$html	 			 = '';
		$product  			 = $this->get_product_query();
		$current_user 		 = ( function_exists('is_user_logged_in') && is_user_logged_in() == true ) ? wp_get_current_user() : '';
		$options 			 = $this->option->get_option('apw_general_settings');
		$layout_option		 = $this->option->get_option('apw_layout');
		$customer			 = $this->option->get_option('apw_wishtlist_achive');
	
		/*if( !empty( $options['apww_wishlist_order_by'] ) && $options['apww_wishlist_order_by'] == 'desc' && is_array( $product ) ){
			$product = rsort( $product );
		}*/

		$user_meta 			 = (  function_exists('is_user_logged_in') && is_user_logged_in() == true  ) ?  get_user_meta( absint( $current_user->data->ID ) , 'appw_wishlist_achive_product_info' , true ) : array() ;
	
	
		if( !empty( $product ) ) {
			
			if( $customer['wishlist_category']  == 'on' && !empty( $current_user->data->ID ) && empty( get_query_var( 'apww-my-wishlist' ) ) ){
				
				$customer['user_id'] = absint( $current_user->data->ID );
				
				$customer['user_meta'] = wp_unslash( $user_meta );
				
				$html .= $this->loader->apww_get_template( 'apww-create-wishlist.php', wp_unslash( $customer ) );
				
			}
			
			$ids = ( !empty( $product ) && is_array( $product ) ) ? $product : array(); 
			
			$args = array(
			'post_type' => 'product',
			'post__in' => $ids
			);
			
			$args['appw-layout-elements'] 	= !empty( $layout_option['product_elements'] ) ? wp_unslash( $layout_option['product_elements'] ) : array();
			
			$args['layout-type'] 			= !empty( $layout_option['layout_type'] ) ? wp_unslash( $layout_option['layout_type'] ) : '';
			
			$args['additional_settings']= !empty( $layout_option['additional_settings'] ) ? wp_unslash( $layout_option['additional_settings'] ) : array();
			
			$args ['remove_btn_text'] 		= esc_html( $options ['remove_wishlist'] );
			$args ['alert_type'] 			= esc_html( $options ['alert_type'] );
			
			
			
			$_products = new WP_Query( $args );
			
			if ( $_products->have_posts() ) : 
			
			ob_start();
			
			echo '<div class="woocommerce">';
			
			
			do_action('appw_product_loop_start',$args);
			
			
			if( !get_query_var( 'apww-wishlist-share' ) )
			set_query_var( 'appw-action-type','remove');
			
			while ( $_products->have_posts() ) {  $_products->the_post();
				$id = get_the_ID();
			/**
			 * Hook: woocommerce_shop_loop.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
				do_action( 'woocommerce_shop_loop' );
				
				if( $layout_option['layout_type'] == 'woocommerce' )
				{
					wc_get_template_part( 'content', 'product' );
				
				}else if( $layout_option['layout_type'] == 'table' )
				{
					echo $this->loader->apww_get_template( 'apww-table-layout.php' , $args );
					
				}else{
					
					wc_get_template_part( 'content', 'product' );
					
				}
				
			}
			
			do_action('apww_product_loop_end',$args);
			
			
			echo '</div>';
			
			if( isset( $id ) )
			echo $this->share_wishlist_fn( absint( $id ) );
			
			
			 $html .= ob_get_contents();
  			 ob_end_clean();
			
			endif;
			
			wp_reset_postdata();
			
		}
		else
		{
			
			$html .= $this->loader->apww_get_template( 'apww-empty.php' );
		}
		if ( has_action('apww_display_wishlist') ) {
			
			echo $html;
			
		}else{
			return $html;
		}
		
	}
	/**
	 * Apww product loop start
	 *
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function appw_product_loop_start( $args = array() ){
		
		if( $args['layout-type'] == 'table' ){
			
			echo '<div class="limiter">
			<div class="apww-table-container">
			<div class="apww-wrap-table">
			<table class="apww-table apww-wishlist-achive has-background">';
			
			echo $this->loader->apww_get_template( 'apww-table-layout-heading-footer.php' , $args );
			
			echo '<tbody>';
			
		}else{
			
		woocommerce_product_loop_start();
		
		}
		
	}
	/**
	 * Apww product loop end
	 *
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function apww_product_loop_end( $args = array() ){
		
		if( $args['layout-type'] == 'table' ){
			echo '</tbody>
			</table>
			</div>
			</div>
			</div>';
			
		}else{
			
		woocommerce_product_loop_start();
		
		}
		
	}
	/**
	 * Ajax Save wishlist data
	 *
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function save_wishlist_data(){
		
		global $woocommerce;
		
		if( !check_ajax_referer( $this->plugin_name, 'security' ) ){ return false; }
		
		$products	=	array();
		$json		=	array();
		
		if( isset( $_POST['id']  ) && absint( $_POST['id'] ) ){
			
			$options 			= $this->option->get_option('apw_general_settings');
			$current_user 		= ( function_exists('is_user_logged_in') && is_user_logged_in() == true ) ? wp_get_current_user() : '';
			
			$products 	= $this->get_product_query();
			
			$products = maybe_unserialize( $products );
			
			
			
			if( !empty( $products ) )
			{
				
				if(	in_array( absint( $_POST['id'] ) ,$products) ){
					
					$json['success']= esc_html( $options['already_wishlist'] );
					
				}else{
					
					$products[] = absint( $_POST['id'] );
					
					$products 	= array_unique( $products );
					
					$this->apww_set_cookie(  'appw_session_wishlist', maybe_serialize( $products ) );	
					 
					$json['success']= esc_html( $options['added_wishlist'] );
				}
				
				
			}else{
				$products	=	array();
				$products[] = absint( $_POST['id'] );
				
				$this->apww_set_cookie(  'appw_session_wishlist', maybe_serialize( $products ) );	
				 
				$json['success']= esc_html( $options['added_wishlist'] );
				
				
			}
			
			if(!empty($current_user->data->ID))
			{
				$user_id = $current_user->data->ID;
				update_user_meta( $user_id, 'appw_meta_wishlist', maybe_serialize( $products ) );
			}
			
		}
		
		echo json_encode( $json  );
		
		wp_die();
	}
	
	
	
	/**
	 * Ajax remove wishlist data
	 *
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function remove_wishlist_data(){
		global $woocommerce;
		
		if( !check_ajax_referer( $this->plugin_name, 'security' ) ){ return false; }
		
		$products	  =	array();
		$json		  =	array();
		$options 	  = $this->option->get_option('apw_general_settings');
		$current_user = ( function_exists('is_user_logged_in') && is_user_logged_in() == true ) ? wp_get_current_user() : '';	
		$products	  = $this->get_product_query();
		
		
		if( isset( $_POST['id']  ) && absint( $_POST['id'] ) ){
			
			$key		 = array_search( absint( $_POST['id'] ) , $products);
			unset( $products[$key] );	
			
			$products 	 = array_unique( $products );
			
		}
		
		if( !empty( $_POST['id']  ) && is_array( $_POST['id'] ) ){
			
			$products 		    = array_diff ( $products, $_POST['id'] );
			$json['success']	= $products;
		}
		if( isset( $_POST['archive'] ) && !empty( $_POST['archive'] ) ) :
			
			$my_wishlist   =  get_option('appw_wishlist_achive_product_list_'.wp_unslash( $_POST['archive'] ));
			$products 	   = maybe_unserialize ( $my_wishlist );
			
			$key		 = array_search( absint( $_POST['id'] ) , $products);
			
			unset( $products[$key] );	
			
			$products 	 = array_unique( $products );
			
			update_option( 'appw_wishlist_achive_product_list_'.wp_unslash( $_POST['archive'] ), maybe_serialize( $products ) );
		
			$json['success']	=   esc_html( $options['after_remove'] );
			
		else:
		
			$this->apww_set_cookie( 'appw_session_wishlist' , maybe_serialize( $products ) );
			
			if(!empty( $current_user->data->ID ))
			{
				$user_id  =$current_user->data->ID;
				update_user_meta( $user_id, 'appw_meta_wishlist', maybe_serialize( $products ) );
			}
			
			$json['success']	=   esc_html( $options['after_remove'] );
		
		endif;
		echo json_encode( $json );
		
		wp_die();
	}
	
	/**
	 * Load Wishlist Share options
	 *
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function share_wishlist_fn( $product_id ){
		
		global $woocommerce;
		$options 	= $this->option->get_option('apw_social_share');
		$page_id 	= $this->option->get_option('apw_general_settings');
		$text 		= '';
		$image 		= '';
		$unique_id 	= substr( wp_generate_uuid4(),0,8);
		
		
		if( isset( $product_id ) && $product_id != "" )
		{
			$product 	= wc_get_product( $product_id );	
			$text 		= $product->get_name();
			$image	    = get_the_post_thumbnail_url($product_id, 'full');
		}
		
		if( !empty( $page_id['wishlist_page'] ) && absint( $page_id['wishlist_page'] )  )
		{
			$wishlist_permalink = get_permalink( absint( $page_id['wishlist_page'] ) );
		}else
		{
			$wishlist_permalink = get_permalink( get_the_ID() );
		}
		
		if( get_option( 'permalink_structure' ) && ! defined( 'ICL_PLUGIN_PATH' ) && ! defined( 'POLYLANG_VERSION' ) ) {
		
			$base_url = trailingslashit( $wishlist_permalink .'/apww-wishlist-share/'. esc_attr( $unique_id ) );
			
		}else{
			
			$base_url = esc_url_raw( add_query_arg( 'apww-wishlist-share', esc_attr( $unique_id ),  $wishlist_permalink ) ) ;
		}
		
		
		$args = array(
			'share_title'	=> ( isset( $options['social_title'] ) ) ? esc_html( $options['social_title'] ) : '',
			'share_text'	=> ( isset( $options['social_text'] ) )  ? esc_html( $options['social_text'] ) : esc_html( $text ),
			'facebook'		=> ( isset( $options['facebook'] ) )  	 ? esc_html( $options['facebook'] ) : '',
			'twitter'		=> ( isset( $options['twitter'] ) )  	 ? esc_html( $options['twitter'] ) : '',
			'pinterest'		=> ( isset( $options['pinterest'] ) )    ? esc_html( $options['pinterest'] ) : '',
			'linkedin'		=> ( isset( $options['linkedin'] ) )     ? esc_html( $options['linkedin'] ) : '',
			'stumbleupon'	=> ( isset( $options['stumbleupon'] ) )  ? esc_html( $options['stumbleupon'] ) : '',
			'email'			=> ( isset( $options['email'] ) )  		 ? esc_html( $options['email'] ) : '',
			'image'			=> esc_url( $image ),
			'unique_id'		=> wp_unslash( $unique_id ),
			'base_url'		=> esc_url_raw( $base_url )
			);
		
		$args  = apply_filters( 'apww_sahre_button_args_filters', $args );
		
		$this->loader->apww_get_template('share-button.php', wp_unslash( $args ) );
	}
	
	/**
	 * Create Permalink for socail share.
	 *
	 * @since    1.0.0
	 */
	public function add_endpoints(){
		
		global $wp_rewrite; 
		add_rewrite_endpoint('apww-wishlist-share', EP_PAGES);
		add_rewrite_endpoint('apww-my-wishlist-view', EP_PAGES);
		$wp_rewrite->flush_rules();
		
		
	}
	
	/**
	 * Create data for social share link.
	 *
	 * @since    1.0.0
	 */
	public function apww_social_share_data_create(){
		
		global $woocommerce;
		
		if( !check_ajax_referer( $this->plugin_name, 'security' ) ){ return false; }
		
		if( isset( $_POST['unique_id']  ) && wp_unslash( $_POST['unique_id'] ) ) :
			
			$share_product_list = get_option( wp_unslash( '__apww_'. $_POST['unique_id'] ) );
			$current_user 		= wp_get_current_user();
			
			
			$product_ids  	= $this->get_product_query();
			
			
			if( empty( $share_product_list ) ){
				
		   		 add_option( wp_unslash( '__apww_'.$_POST['unique_id'] ), maybe_serialize( $product_ids ),false );
				
			}else{
				
				 update_option( wp_unslash( '__apww_'.$_POST['unique_id'] ), maybe_serialize( $product_ids ),false );
			}
			
			
		endif;
		
		wp_die();
	}
	/**
	 * Load Wishlist button
	 *
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function get_wishlist_button( $args = array() ){
		
		$options 			 = $this->option->get_option('apw_general_settings');
		$layout				 = $this->option->get_option('apw_layout');
		
		//if( isset( $layout['layout_type'] ) && $layout['layout_type'] == 'table'  ){ return false; }
		
		$options = array(
			'btn_text'         => ( isset( $options['btn_text'] ) ) 		? esc_html( $options['btn_text'] ) : '',
			'action'    	   =>  'appw-add',
			'css_class'    	   => ( isset( $options['button_position'] ) )  ? '  appw-common-wishlist  '.esc_attr( $options['button_position'] )  : 'appw-common-wishlist',
			'btn_type'    	   => ( isset( $options['btn_type'] ) )  		? esc_html( $options['btn_type'] ) : $position_css_class,
			'open_type'        => ( isset( $options['open_type'] ) ) 		? esc_html( $options['open_type'] ) : '',
			'remove'     	   => ( isset( $options['remove_wishlist'] ) )  ? esc_html( $options['remove_wishlist'] ) : '',
			'alert_type'   	   => ( isset( $options['alert_type'] ) ) 		? esc_html( $options['alert_type'] ) : '',
			
		);	
			
	
		if( get_query_var('appw-action-type') == 'remove' ){
			$options ['btn_text'] 	= esc_html( $options ['remove'] );
			$options ['action'] 	= 'appw-remove';
			
		}
		
		$args['apww_button'] = apply_filters( 'apww_filters_get_button', $options );
		
		$this->loader->apww_get_template('apww-button.php', $args );
		
		return $args;
	}
	
	
	/**
	 * Get the content for custom layout.
	 *
	 * @since    1.0.0
	 */
	 
	public function apww_custom_layout_content(){
		
		echo get_the_content();	
		
	}
	
	/**
	 * Get Stock for custom layout.
	 *
	 * @since    1.0.0
	 */
	 
	public function apww_custom_layout_stock(){
		global $product;
		
		if(  $availability = $product->get_availability() ) {
		?>
		<p class="stock <?php echo esc_attr( $availability['class'] ); ?>"><?php echo wp_kses_post( $availability['availability'] ); ?></p>
		<?php
		
		}
	}
	/**
	 * Create Custom add to cart button.
	 *
	 * @since    1.0.0
	 */
	 
	public function apww_custom_add_to_cart( ){
		
		global $product;
		
		$layout_option	= $this->option->get_option('apw_layout');
		$elements		= maybe_unserialize( $layout_option['product_elements'] );
		$options 		= $this->option->get_option('apw_general_settings');
		
		$args 			= array(
			'apww-quantity'		=> empty( $elements['quantity'] ) ? 1 : 0 ,
			'alert_type'		=> esc_attr( $options ['alert_type'] )
		
		);
		
		$args 			= apply_filters( 'apww_custom_add_to_cart', $args );
		
		$this->loader->apww_get_template('apww-add-to-cart.php', wp_unslash ( $args ) );
	}
	
	
	
	/**
	 * Create Custom product Quantity.
	 *
	 * @since    1.0.0
	 */
	 
	public function apww_custom_product_quantity(){
		
		$this->loader->apww_get_template('apww-product-quantity.php');
	}
	
	
	/**
	* Display wishlist category
	*
	* @since    1.0.0
	*/
	public function apww_display_wishlist_archive( $params = array() ){
		global $woocommerce;
		
		extract( shortcode_atts(array(
			'layout_src' => '',
			'layout_style' => ''
		), $params) );	
		
			
		$product  = array();
		$options_gn			 = $this->option->get_option('apw_general_settings');
		
		$current_user 		 = ( function_exists('is_user_logged_in') && is_user_logged_in() == true ) ? wp_get_current_user() : '';
		$options			 = $this->option->get_option('apw_wishtlist_achive');
		
		if(!empty($current_user->data->ID))
		{
			$products 	= get_user_meta( $current_user->ID, 'appw_wishlist_achive_product_info' , true );
			$products   = maybe_unserialize ( $products );
		}
		
		
		$args = array(
			'products'			=> $products,
			'apww-achive-url'	=> get_permalink( get_option('woocommerce_myaccount_page_id') ),
			'user_id'			=> absint( $current_user->data->ID ),
			'options'			=> wp_unslash( $options ),
			'alert'			    => esc_html( $options_gn ['alert_type'] ),
		
			);
		
		$args  = apply_filters( 'apww_display_wishlist_archive_args_filters', $args );
		
		

		
		$html = $this->loader->apww_get_template('apww-wishlist-achive.php', $args );
			
		
		
		echo $html;
	}
	/**
	 * Create wishlist category / achive
	 *
	 * @since    1.0.0
	 */
	public function apww_create_wishlist_category(){
		
		if( !check_ajax_referer( $this->plugin_name, 'security' ) ) return false;  
		
		if( !isset( $_POST['user_id']  ) && absint( $_POST['user_id'] ) ) return false;
		
		if( !isset( $_POST['name']  )    &&  $_POST['name'] == '' ) return false;
		
	
		
		
		$user_id 	= absint( $_POST['user_id'] );
		$array 		= array();
		
		
		$products_info 		= get_user_meta( absint( $user_id ) , 'appw_wishlist_achive_product_info' , true );
		$products_info 		= maybe_unserialize( $products_info );
		
		
		$unique_id 			= substr( md5( sanitize_text_field ( $_POST['name'] ) ),0,8);
		$unique_id 			= ( isset( $_POST['pre_name']  )  &&   !empty( $_POST['pre_name'] ) ) ? sanitize_text_field ( $_POST['pre_name'] ) : $unique_id;
		
		
		$products =  get_option('appw_wishlist_achive_product_list_'.$unique_id);
		
		
		if( ! empty( $products_info ) ){
			
			if( empty( $products_info[$unique_id] ) ){
				
				$array[ $unique_id ]  = array(
					'product_id' => $unique_id,
					'name'		 => sanitize_text_field ( $_POST['name'] ),
				);
				$array_merge 	 = array_merge( maybe_unserialize( $products_info ) , $array );
				$products_info 	 = array_unique( $array_merge, SORT_REGULAR );
				
				$products 		 =  $this->get_product_query();
				
			}else{
				$new_product	 = maybe_unserialize( $this->get_product_query() );
				if( !empty( $products ) ){
					$product_merge 	 = array_merge( maybe_unserialize( $products ) , $new_product );
				}else{
					$product_merge 	 = $new_product;
				}
				$products 	 	     = array_unique( $product_merge, SORT_REGULAR );
				
			}
			
			
		}else{
			
			$array[ $unique_id ]  = array(
				'product_id'	=> $unique_id,
				'name'			=> sanitize_text_field ( $_POST['name'] ),
			);
			
			$products_info 	= array_unique( $array );
			
			$products 		=  $this->get_product_query();
		}
		
		update_user_meta( $user_id, 'appw_wishlist_achive_product_info', maybe_serialize( $products_info ) );
		update_option( 'appw_wishlist_achive_product_list_'.$unique_id, maybe_serialize( $products ) );
		
		
		wp_die();
	}
	/**
	 * Create wishlist category / achive
	 *
	 * @since    1.0.0
	 */
	public function apww_delete_wishlist_archive(){
		
		if( !check_ajax_referer( $this->plugin_name, 'security' ) ) return false;  
		
		if( !isset( $_POST['user_id']  ) && absint( $_POST['user_id'] ) ) return false;
		
		if( !isset( $_POST['del_key']  )    &&  $_POST['del_key'] == '' ) return false;
		
		
		$current_user 	= ( function_exists('is_user_logged_in') && is_user_logged_in() == true ) ? wp_get_current_user() : array();
		
		
		$achive_info 	= maybe_unserialize( get_user_meta( absint( $current_user->data->ID ) , 'appw_wishlist_achive_product_info' , true ) );
		
		unset( $achive_info[ wp_unslash( $_POST['del_key'] ) ] );	
		
		update_user_meta(  absint( $_POST['user_id'] ), 'appw_wishlist_achive_product_info', maybe_serialize( $achive_info ) );
		
		delete_option( 'appw_wishlist_achive_product_list_'.wp_unslash( $_POST['del_key'] ) );
	
		
		echo esc_html__('successfully removed the archive list','advanced-product-wishlist-for-woocomerce');
			
		
		
		wp_die();
		
	}
	
	
	/**
	 * Create wishlist category
	 *
	 * @since    1.0.0
	 */
	private function get_product_query(){
		
		global $woocommerce;
		$product  = array();

		$current_user 		 = ( function_exists('is_user_logged_in') && is_user_logged_in() == true ) ? wp_get_current_user() : '';
		
		
		if(!empty($current_user->data->ID))
		{
			$product 	= get_user_meta( $current_user->ID, 'appw_meta_wishlist' , true );
			
		}else
		{
			$product  	= $this->apww_get_cookie(  'appw_session_wishlist' );	
		}
		
		$product = maybe_unserialize ( $product );
		
		if( get_query_var( 'apww-wishlist-share' ) ) :
		
			$get_wish_list = maybe_unserialize ( get_option( '__apww_'.get_query_var( 'apww-wishlist-share' ) ) );
			$product 	   = maybe_unserialize ( $get_wish_list );
			
		endif;
		
		if( get_query_var( 'apww-my-wishlist' ) ) :
		
			$my_wishlist   =  get_option('appw_wishlist_achive_product_list_'.get_query_var( 'apww-my-wishlist' ));
			$product 	   = maybe_unserialize ( $my_wishlist );
			
		endif;
		
				
		return $product;
		
	}
	
	
	/**
	 * Set setcookie.
	 *
	 * @since    1.0.0
	 */
	
	public function apww_set_cookie( $name, $value ){
		
		global $woocommerce;
		
    	unset( $_COOKIE[$name] ); 
			
		if( function_exists( 'WC' ) && WC()->session->set( wp_unslash( $name ) , maybe_serialize( $value ) ) ){
			
			WC()->session->set( wp_unslash( $name ) , maybe_serialize( $value ) );
			
		}else{
			
			setcookie( wp_unslash( $name ), $value , time() + (86400 * 30), "/"); // 86400 = 1 day
			
		}
		
		
    }
	public function apww_woocommerce_ajax_add_to_cart(){
		
		
		if( !check_ajax_referer( $this->plugin_name, 'security' ) ) return false; 

		
		
		if ( ! isset( $_POST['product_id'] ) ) {
			return;
		}
		
		if( is_array( $_POST['product_id'] ) && count( $_POST['product_id'] ) > 0 ){
			
			$quantity	 =  isset( $_POST['quantity'] ) ? $_POST['quantity'] : '';
			$variation	 =  isset( $_POST['variation'] ) ? $_POST['variation'] : '';
			$success_counter = 0;
			
			foreach ( $_POST['product_id'] as $product_id ) :  
				
				$_product_id        = apply_filters( 'woocommerce_add_to_cart_product_id', absint( $product_id  ) );
				$_quantity          = wc_stock_amount( wp_unslash( $quantity[ $_product_id ] ) );
				$_passed_validation = apply_filters( 'woocommerce_add_to_cart_validation', true, $_product_id, $_quantity );
				$_product           = wc_get_product( $_product_id );
				$_variation          = !empty( $variation[ $_product_id ]  ) ? $variation[ $_product_id ] : array();
				$_variation_id  	   = 0;
				
				if ( $_product && !empty( $_variation )  ) {
					
					$_variation_id  	   =	$this->get_variation_id( $_product, $_variation );
				}
				
				if ( $_passed_validation && WC()->cart->add_to_cart( $_product_id, $_quantity, $_variation_id, $_variation ) ) 
				{
					$success_counter++;
				}
				
			endforeach;
				if( $success_counter ) {
					$data['success'] = sprintf( _n( 'Total %s product has been added to your cart.', 'Total %s product has been added to your cart.',  'advanced-product-wishlist-for-woocomerce' ),absint( $success_counter ) );
				}
			echo wp_send_json( $data );
			wp_die();
			
			
		}else{

				$product_id        = apply_filters( 'woocommerce_add_to_cart_product_id', absint( $_POST['product_id'] ) );
				$quantity          = empty( $_POST['quantity'] ) ? 1 : wc_stock_amount( wp_unslash( $_POST['quantity'] ) );
				$passed_validation = apply_filters( 'woocommerce_add_to_cart_validation', true, $product_id, $quantity );
				$product           = wc_get_product( $product_id );
				$variation         = !empty( $_POST['variation'] ) ? $_POST['variation'] : array();
				$variation_id  	   = 0;
		
				if ( $product && !empty( $variation )  ) {
					
				$variation_id  	   =	$this->get_variation_id( $product, $variation );
						
				}
				
				
		
				if ( $passed_validation && WC()->cart->add_to_cart( $product_id, $quantity, $variation_id, $variation ) ) 
				{
				
					$data['success'] = sprintf( _n( '%s has been added to your cart.', '%s have been added to your cart.',  'advanced-product-wishlist-for-woocomerce' ),get_the_title( $product_id ) );
					
					
					
				} else {
				
					$data = array(
						'error' => true,
						'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));
				
					echo wp_send_json($data);
				}
			
				echo wp_send_json( $data );
		}
		wp_die();
	}
	/**
	 * get_available_id
	 *
	 * @return ATA_WC_Variation_Swatches_Frontend
	 */
	private function get_variation_id( $product, $variation = array() ){
		
		if( empty ( $product ) && empty( $variation ) )
		{
			
			return false;	
		}
		
		$variation_id	   = 0;
		
		foreach ( $product->get_available_variations() as $options ) {
			
			if( $variation == $options['attributes'] ){
				
				$variation_id = $options['variation_id'];
				
			}
			
		}
		
		return $variation_id;
		
	}
	/**
	 * Set setcookie.
	 *
	 * @since    1.0.0
	 */
	
	public function apww_get_cookie( $name ){
		
		global $woocommerce;
    	
		if( function_exists( 'WC' ) &&  WC()->session->get( wp_unslash( $name ) ) ){
			
			$value 	= WC()->session->get( wp_unslash( $name ) );
			
		}else{
			 
			$value 	= isset( $_COOKIE[ wp_unslash( $name )] ) ?  $_COOKIE[ wp_unslash( $name ) ] : '';
			
			
		}
		
		return maybe_unserialize( $value );
    }
	
	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Advanced_Product_Wishlist_For_Woocomerce_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Advanced_Product_Wishlist_For_Woocomerce_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		wp_enqueue_style( 'athemeart', $this->loader->plugins_url() . 'lib/athemeart/athemeart.css', array(), '5.10.0', 'all' ); 
		
		wp_enqueue_style( 'owl.carousel.min', $this->loader->plugins_url() . '/lib/owl-carousel/assets/owl.carousel.min.css', array(), '2.3.4', 'all' ); 

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/advanced-product-wishlist-for-woocomerce-public.css', array(), $this->version, 'all' );
		
		$color 	= $this->option->get_option('apww_color_scheme');
		
		$btn_css  = !empty( $color['apww_btn_color'] ) ? 'color: '.esc_attr( $color['apww_btn_color'] ) .';': '';
		$btn_css .= !empty( $color['apww_btn_bg'] )    ? 'background: '.esc_attr( $color['apww_btn_bg'] ) .';' : '';
		$btn_css .= !empty( $color['apww_btn_bg'] )    ? 'border-color: '.esc_attr( $color['apww_btn_bg'] ) .';' : '';
		
		$btn_css .= !empty( $color['apww_btn_min_width'] )  ? 'min-width:'.esc_attr( $color['apww_btn_min_width'] ) .'px;' : '';
		$btn_css .= !empty( $color['apww_btn_min_height'] )  ? 'height:'.esc_attr( $color['apww_btn_min_height'] ) .'px; line-height :'.esc_attr( $color['apww_btn_min_height'] ) .'px;' : '';
		$btn_css .= !empty( $color['apww_btn_border_radius'] )  ? 'border-radius:'.esc_attr( $color['apww_btn_border_radius'] ) .'px;-webkit-border-radius:'.esc_attr( $color['apww_btn_border_radius'] ) .'px;' : '';
		
		
		$custom_css = 'button.apww-wishlist-button{ '.esc_attr( $btn_css ).' }';
		
		
		$btn_css_h  = !empty( $color['apww_btn_hover_color'] ) ? 'color: '.esc_attr( $color['apww_btn_hover_color'] ) .';': '';
		$btn_css_h .= !empty( $color['apww_btn_hover_bg'] )    ? 'background: '.esc_attr( $color['apww_btn_hover_bg'] ) .'!important;' : '';
		$btn_css_h .= !empty( $color['apww_btn_hover_bg'] )    ? 'border-color: '.esc_attr( $color['apww_btn_hover_bg'] ) .';' : '';
		
		
		$custom_css.= 'button.apww-wishlist-button:hover,button.apww-wishlist-button:focus{ '.esc_attr( $btn_css_h ).' }';
		
		//.apww-wrap-table table thead tr
		
		$thead    = !empty( $color['apww_table_heading_color'] )    ? 'color: '.esc_attr( $color['apww_table_heading_color'] ) .';' : '';
		$thead   .= !empty( $color['apww_table_heading_bg'] )    	? 'background: '.esc_attr( $color['apww_table_heading_bg'] ) .';' : '';
		$custom_css.= '.apww-wrap-table table thead tr{ '.esc_attr( $thead ).' }';
		
		$td         = !empty( $color['apww_table_text_color'] )    	? 'color: '.esc_attr( $color['apww_table_text_color'] ) .';' : '';
		$custom_css.= '.apww-wrap-table table td{ '.esc_attr( $td ).' }';
		
		
		
		$archive  = !empty( $color['apww_arch_btn_color'] ) ? 'color: '.esc_attr( $color['apww_arch_btn_color'] ) .';': '';
		$archive .= !empty( $color['apww_arch_btn_bg'] )    ? 'background: '.esc_attr( $color['apww_arch_btn_bg'] ) .';' : '';
		$archive .= !empty( $color['apww_arch_btn_bg'] )    ? 'border-color: '.esc_attr( $color['apww_arch_btn_bg'] ) .';' : '';
		
		$custom_css	.='button.appw-action-wishlist-load-modal.button,.apww-create-wishlist button.button,button.appw-wishlist-archive-action-delete{'.esc_attr( $archive ).'}';
		
		
		$archive_h  = !empty( $color['apww_btn_arch_hover_color'] ) ? 'color: '.esc_attr( $color['apww_btn_arch_hover_color'] ) .';': '';
		$archive_h .= !empty( $color['apww_btn_arch_hover_bg'] )    ? 'background: '.esc_attr( $color['apww_btn_arch_hover_bg'] ) .'!important;' : '';
		$archive_h .= !empty( $color['apww_btn_arch_hover_bg'] )    ? 'border-color: '.esc_attr( $color['apww_btn_arch_hover_bg'] ) .';' : '';
		
		$custom_css	.='button.appw-action-wishlist-load-modal.button:hover,.apww-create-wishlist button.button:hover,button.appw-wishlist-archive-action-delete:hover{'.esc_attr( $archive_h ).'}';
		
		$modal  	 = !empty( $color['apww_modal_bg'] )    ? 'background: '.esc_attr( $color['apww_modal_bg'] ) .';' : '';
		$modal  	.= !empty( $color['apww_modal_color'] )    ? 'color: '.esc_attr( $color['apww_modal_color'] ) .';' : '';
		
		$custom_css	.='.apww-modal-inner{'.esc_attr( $modal ).'}';
		
		$modal_btn 	 = !empty( $color['apww_modal_btn_bg'] )       ? 'background: '.esc_attr( $color['apww_modal_btn_bg'] ) .';' : '';
		$modal_btn 	.= !empty( $color['apww_modal_btn_color'] )    ? 'color: '.esc_attr( $color['apww_modal_btn_color'] ) .';' : '';
		$modal_btn  .= !empty( $color['apww_btn_min_height'] )  ? 'height:'.esc_attr( $color['apww_btn_min_height'] ) .'px; line-height :'.esc_attr( $color['apww_btn_min_height'] ) .'px;' : '';
		$modal_btn  .= !empty( $color['apww_btn_border_radius'] )  ? 'border-radius:'.esc_attr( $color['apww_btn_border_radius'] ) .'px;-webkit-border-radius:'.esc_attr( $color['apww_btn_border_radius'] ) .'px;' : '';
		
		
		$custom_css .='.apww-buttons-group button, .woocommerce .apww-buttons-group .button, .apww-buttons-group .button{'.esc_attr( $modal_btn ).'}';
		
		$modal_btn_h 	 = !empty( $color['apww_modal_h_btn_bg'] )       ? 'background: '.esc_attr( $color['apww_modal_h_btn_bg'] ) .';' : '';
		$modal_btn_h 	.= !empty( $color['apww_modal_h_btn_color'] )    ? 'color: '.esc_attr( $color['apww_modal_h_btn_color'] ) .';' : '';
		
		$custom_css .='.apww-buttons-group button:hover, .woocommerce .apww-buttons-group .button:hover, .apww-buttons-group .button:hover{'.esc_attr( $modal_btn_h ).'}';
		
		
		wp_add_inline_style( $this->plugin_name, $custom_css );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Advanced_Product_Wishlist_For_Woocomerce_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Advanced_Product_Wishlist_For_Woocomerce_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 'owl.carousel.min', $this->loader->plugins_url() . '/lib/owl-carousel/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );
		
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/advanced-product-wishlist-for-woocomerce-public.js', array( 'jquery' ), $this->version, true );
		
		wp_localize_script($this->plugin_name, 'apww_object', $this->get_localize_script() );

	}
	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	
	private function get_localize_script(){

    	return apply_filters( 'apww_localize_filters_', array(
		
    		'ajaxurl' 	 => admin_url( 'admin-ajax.php'),
			'ajax_nonce' => wp_create_nonce( $this->plugin_name ),
			'apww_url' 	 => esc_url( $this->loader->url ),
		    'text' 		 => array(
		    	'working' => esc_html__('Working...', 'advanced-product-wishlist-for-woocomerce'),
		    ),
			
	    ) );
		
		
    }
	
	public function get_option ( $key ){
		
		if( empty( $key ) ){ return false;}
		
		return 	$this->option->get_option( $key );
		
	}
	
	
}
