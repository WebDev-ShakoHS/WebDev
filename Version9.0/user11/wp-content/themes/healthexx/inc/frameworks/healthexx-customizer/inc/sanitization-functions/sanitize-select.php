<?php
if ( ! function_exists( 'healthexx_customizer_sanitize_select' ) ) :
    /**
     * Select sanitization callback example.
     *
     * - Sanitization: select
     * - Control: select, radio
     *
     * Sanitization callback for 'select' and 'radio' type controls. This callback sanitizes `$input`
     * as a slug, and then validates `$input` against the choices defined for the control.
     *
     * @see sanitize_key()               https://developer.wordpress.org/reference/functions/sanitize_key/
     * @see $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
     *
     * @param string               $input   Slug to sanitize.
     * @param WP_Customize_Setting $setting Setting instance.
     * @return string Sanitized slug if it is a valid choice; otherwise, the setting default.
     */
    function healthexx_customizer_sanitize_select( $input, $setting ) {

        // Ensure input is a slug.
        $input = esc_attr( $input );

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
endif;