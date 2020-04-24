<?php
if ( ! function_exists( 'healthexx_customizer_sanitize_hex_color' ) ) :
    /**
     * HEX Color sanitization callback example.
     *
     * - Sanitization: hex_color
     * - Control: text, WP_Customize_Color_Control
     *
     * Note: sanitize_hex_color_no_hash() can also be used here, depending on whether
     * or not the hash prefix should be stored/retrieved with the hex color value.
     *
     * @see sanitize_hex_color() https://developer.wordpress.org/reference/functions/sanitize_hex_color/
     * @link sanitize_hex_color_no_hash() https://developer.wordpress.org/reference/functions/sanitize_hex_color_no_hash/
     *
     * @param string               $hex_color HEX color to sanitize.
     * @param WP_Customize_Setting $setting   Setting instance.
     * @return string The sanitized hex color if not null; otherwise, the setting default.
     */
    function healthexx_customizer_sanitize_hex_color( $hex_color, $setting ) {
        // Sanitize $input as a hex value without the hash prefix.
        $hex_color = sanitize_hex_color( $hex_color );

        // If $input is a valid hex value, return it; otherwise, return the default.
        return ( null != ( $hex_color ) ? $hex_color : $setting->default );
    }

endif;