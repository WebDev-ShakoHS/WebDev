<?php
/**
 * Sanitization functions.
 *
 * @package shopstore
 */

if ( ! function_exists( 'advanced_product_wishlist_for_woocomerce_sanitize_array' ) ) :

	/**
	 * Sanitize Array.
	 *
	 * @since 1.0.0
	 *
	 * @param mixed                $input The value to sanitize.
	 * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
	 * @return mixed Sanitized value.
	 */
	function advanced_product_wishlist_for_woocomerce_sanitize_array( $array = array() ) {
		if( empty( $array ) ) return ;
		$valid_data = array();
		
		foreach ( $array  as $key => $val ){
			$valid_data[ sanitize_text_field( $key ) ]  = sanitize_text_field( $val );
		}
		
		// If the input is a valid key, return it; otherwise, return the default.
		return $array;

	}

endif;


if ( ! function_exists( 'advanced_product_wishlist_for_woocomerce_sanitize_checkbox' ) ) :

	/**
	 * Sanitize checkbox.
	 *
	 * @since 1.0.0
	 *
	 * @param bool $checked Whether the checkbox is checked.
	 * @return bool Whether the checkbox is checked.
	 */
	function advanced_product_wishlist_for_woocomerce_sanitize_checkbox( $checked ) {

		return ( ( isset( $checked ) && true === $checked ) ? true : false );

	}

endif;


if ( ! function_exists( 'advanced_product_wishlist_for_woocomerce_sanitize_positive_integer' ) ) :

	/**
	 * Sanitize positive integer.
	 *
	 * @since 1.0.0
	 *
	 * @param int                  $input Number to sanitize.
	 * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
	 * @return int Sanitized number; otherwise, the setting default.
	 */
	function advanced_product_wishlist_for_woocomerce_sanitize_positive_integer( $input, $setting ) {

		$input = absint( $input );

		// If the input is an absolute integer, return it.
		// otherwise, return the default.
		return ( $input ? $input : $setting->default );

	}

endif;

if ( ! function_exists( 'advanced_product_wishlist_for_woocomerce_sanitize_dropdown_pages' ) ) :

	/**
	 * Sanitize dropdown pages.
	 *
	 * @since 1.0.0
	 *
	 * @param int                  $page_id Page ID.
	 * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
	 * @return int|string Page ID if the page is published; otherwise, the setting default.
	 */
	function advanced_product_wishlist_for_woocomerce_sanitize_dropdown_pages( $page_id, $setting ) {

		// Ensure $input is an absolute integer.
		$page_id = absint( $page_id );

		// If $page_id is an ID of a published page, return it; otherwise, return the default.
		return ( 'publish' === get_post_status( $page_id ) ? $page_id : $setting->default );

	}

endif;

if ( ! function_exists( 'advanced_product_wishlist_for_woocomerce_sanitize_image' ) ) :

	/**
	 * Sanitize image.
	 *
	 * @since 1.0.0
	 *
	 * @see wp_check_filetype() https://developer.wordpress.org/reference/functions/wp_check_filetype/
	 *
	 * @param string               $image Image filename.
	 * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
	 * @return string The image filename if the extension is allowed; otherwise, the setting default.
	 */
	function advanced_product_wishlist_for_woocomerce_sanitize_image( $image, $setting ) {

		/**
		 * Array of valid image file types.
		 *
		 * The array includes image mime types that are included in wp_get_mime_types().
		*/
		$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon',
		);

		// Return an array with file extension and mime_type.
		$file = wp_check_filetype( $image, $mimes );

		// If $image has a valid mime_type, return it; otherwise, return the default.
		return ( $file['ext'] ? $image : $setting->default );

	}

endif;


if ( ! function_exists( 'advanced_product_wishlist_for_woocomerce_sanitize_number_range' ) ) :

	/**
	 * Sanitize number range.
	 *
	 * @since 1.0.0
	 *
	 * @see absint() https://developer.wordpress.org/reference/functions/absint/
	 *
	 * @param int                  $input Number to check within the numeric range defined by the setting.
	 * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
	 * @return int|string The number, if it is zero or greater and falls within the defined range; otherwise, the setting default.
	 */
	function advanced_product_wishlist_for_woocomerce_sanitize_number_range( $input, $setting ) {

		// Ensure input is an absolute integer.
		$input = absint( $input );

		// Get the input attributes associated with the setting.
		$atts = $setting->manager->get_control( $setting->id )->input_attrs;

		// Get min.
		$min = ( isset( $atts['min'] ) ? $atts['min'] : $input );

		// Get max.
		$max = ( isset( $atts['max'] ) ? $atts['max'] : $input );

		// Get Step.
		$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

		// If the input is within the valid range, return it; otherwise, return the default.
		return ( $min <= $input && $input <= $max && is_int( $input / $step ) ? $input : $setting->default );

	}

endif;
