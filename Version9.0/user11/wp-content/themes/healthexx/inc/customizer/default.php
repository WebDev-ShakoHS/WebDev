<?php

if(!function_exists('healthexx_defauts_value') ) :
	/**
	 * Get default theme options.
	 * @package healthexx
	 *
	 * @since healthexx 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function healthexx_defauts_value(){

		$defaults = array();

		// Top bar
		$defaults['healthexx-enbale-top-bar-header']  			= 1;
		$defaults['healthexx-top-bar-text']          			= esc_html__('Welcome To Our Healthexx Medical Center','healthexx');
		$defaults['healthexx-top-bar-hours']          			= esc_html__('Opening Hours : Monday To Saturday - 9AM To 18PM','healthexx');
		$defaults['healthexx-top-header-bar-facebook-url']      = '';
		$defaults['healthexx-top-header-bar-twitter-url']       = '';
		$defaults['healthexx-top-header-bar-linkedin-url']      = '';
		$defaults['healthexx-top-header-bar-instagram-url']     = '';
		$defaults['healthexx-top-header-bar-google-url']        = '';
		$defaults['healthexx-top-bar-phone']          			= esc_html__('+(123)-456789','healthexx');
		$defaults['healthexx-top-bar-email']         			= esc_html__('info@company.com','healthexx');
		$defaults['healthexx-top-bar-location']         		    = esc_html__('xyz street , house no.123','healthexx');
		$defaults['healthexx-top-header-bar-button']				= esc_html__('get appointment','healthexx');
		$defaults['healthexx-top-header-bar-button-url']			= '';
		$defaults['healthexx-top-bar-social-menu']   			= '';

           $defaults['healthexx-header-background-enable']		    = 1;
		// color Section
		$defaults['healthexx-footer-background-color'] 			= '#1F1F1F';
        $defaults['healthexx-default-layout']     				= esc_html('no-sidebar','healthexx');
		//font Section
		$defaults['healthexx-font-family-site-identity'] 		= 'Raleway:400,300,500,600,700,900';
		$defaults['healthexx-font-family-menu'] 					= 'Raleway:400,300,500,600,700,900';
		$defaults['healthexx-primary-font-family'] 				= 'Raleway:400,300,500,600,700,900';
		$defaults['healthexx-secondary-font-family'] 			= 'Raleway:400,300,500,600,700,900';

		// Slider Section
		$defaults['healthexx-enbale-slider']						= 1;
		$defaults['healthexx-excerpt-length']					= 30;
		$defaults['healthexx-select-post-form']					='form-category';
		$defaults['healthexx-select-from-cat']					= 1;
		$defaults['healthexx-select-from-page']					= 0;
		$defaults['healthexx-slider-enable-blog']				= 0;

		$defaults['healthexx-slider-button-text']					= esc_html__('Learn more','healthexx');

		$defaults['healthexx-slider-button-text2']				= esc_html__('Contact Us','healthexx');
		$defaults['healthexx-slider-button-text2-url']			= '';

        // About us section
		$defaults['healthexx-enable-about-us'] 					= 0;
		$defaults['healthexx-about-us-title'] 					= esc_html__('About US','healthexx');
		$defaults['healthexx-excerpt-length-left'] 				= 25;
		 		$defaults['healthexx-excerpt-length-right'] 				= 15;
		$defaults['healthexx-about-us-select-page'] 				= 0;

        $defaults['healthexx-about-us-button-text'] 				= esc_html__('Details','healthexx');

		$defaults['healthexx-enable-static-page'] 				= 0;



		//service section
		$defaults['healthexx-service-enable']  					= 0;
		$defaults['healthexx-service-section-title']  			= esc_html__('Service Section','healthexx');
		$defaults['healthexx-service-section-subtitle']  		= esc_html__('Lorem ipsum dolor sit amet, consecws eftetuer adscnki iscedring elit aendean cdefomameodo Lorem ipsf dolor sit amet, conscsec tsetuer adipiscdssing Ascelit. Aenean commodo ligaula eget dolor.','healthexx');
		$defaults['healthexx-service-section-sub-title']  		= esc_html__('Service description is here','healthexx');
		$defaults['healthexx-service-excerpt-length']  			= 25;
		$defaults['healthexx-service-select-form']  				= 'form-category';
		$defaults['healthexx-service-from-category']  			= 1;
		$defaults['healthexx-service-from-page']  				= 0;
		$defaults['healthexx-service-page-icon']  				= esc_html__('fa-apple','healthexx');
		
		$defaults['healthexx-service-button-text']  				= esc_html__('KNOW MORE','healthexx');
		$defaults['healthexx-service-button-url']  				= '';

		//feature
		$defaults['healthexx-feature-enable']				= 1;
		$defaults['healthexx-feature-section-title']			= esc_html__('feature','healthexx');
		$defaults['healthexx-feature-excerpt-length']		= 25;
		$defaults['healthexx-feature-select-form']			= 'form-category';
		$defaults['healthexx-feature-from-category']			= 1;
		$defaults['healthexx-feature-select-for-page']		= 0;


		// Blog Section
		$defaults['healthexx-blog-section-enable'] 				= 1;
		$defaults['healthexx-blog-section-title-text'] 			= esc_html__('Blog','healthexx');
		$defaults['healthexx-blog-section-subtitle-text']  		= esc_html__('Lorem ipsum dolor sit amet, consecws eftetuer adscnki iscedring elit aendean cdefomameodo Lorem ipsf dolor sit amet, conscsec tsetuer adipiscdssing Ascelit. Aenean commodo ligaula eget dolor.','healthexx');
		$defaults['healthexx-blog-excerpt-length'] 				= 30;
		$defaults['healthexx-blog-select-category'] 				= 1;
		$defaults['healthexx-blog-button-text'] 					= esc_html__('Read More','healthexx');
       $defaults['healthexx-slider-enable-blog']					= 0;
	   $defaults['healthexx-number-of-words'] 					= 40;
		// back to top options
		$defaults['healthexx-enable-back-to-top'] 				= 1;
$defaults['healthexx-single-post-image-align'] 			= 'full';
		//breadcrumb
		$defaults['healthexx-enable-breadcrumb']					= 1;

		//footer section
		$defaults['healthexx-copyright-text']						= esc_html__( 'Copyright &copy; All right reserved.', 'healthexx' );
		$defaults['healthexx-enable-scroll-to-top']				= 1;


		$defaults = apply_filters('healthexx_get_all_options',$defaults);
		return $defaults;
	}
endif; 