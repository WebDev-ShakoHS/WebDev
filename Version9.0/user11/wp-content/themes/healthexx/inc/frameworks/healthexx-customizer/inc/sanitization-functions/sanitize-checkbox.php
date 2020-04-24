<?php
if ( ! function_exists( 'healthexx_customizer_sanitize_checkbox' ) ) :
    /**
     * Checkbox sanitization callback.
     *
     * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
     * as a boolean value, either TRUE or FALSE.
     *
     * @param bool $checked Whether the checkbox is checked.
     * @return bool Whether the checkbox is checked.
     */
    function healthexx_customizer_sanitize_checkbox( $checked ) {
        // Boolean check.
        return ( ( isset( $checked ) && true == $checked ) ? true : false );
    }

endif;