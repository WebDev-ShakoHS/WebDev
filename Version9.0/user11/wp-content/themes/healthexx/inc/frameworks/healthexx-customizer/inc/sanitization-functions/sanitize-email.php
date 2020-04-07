<?php
if ( ! function_exists( 'healthexx_customizer_sanitize_email' ) ) :
    /**
     * Email sanitization callback example.
     *
     * - Sanitization: email
     * - Control: text
     *
     * Sanitization callback for 'email' type text controls. This callback sanitizes `$email`
     * as a valid email address.
     *
     * @see sanitize_email() https://developer.wordpress.org/reference/functions/sanitize_key/
     * @link sanitize_email() https://codex.wordpress.org/Function_Reference/sanitize_email
     *
     * @param string               $email   Email address to sanitize.
     * @param WP_Customize_Setting $setting Setting instance.
     * @return string The sanitized email if not null; otherwise, the setting default.
     */
    function healthexx_customizer_sanitize_email( $email, $setting ) {
        // Sanitize $input as a hex value without the hash prefix.
        $email = sanitize_email( $email );

        // If $email is a valid email, return it; otherwise, return the default.
        return ( ! null( $email ) ? $email : $setting->default );
    }
endif;