<?php
if ( ! function_exists( 'healthexx_customizer_sanitize_post' ) ) :
    /**
     * Drop-down Pages/Posts sanitization callback example.
     *
     * - Sanitization: dropdown-pages
     * - Control: dropdown-pages
     *
     * Sanitization callback for 'dropdown-pages' type controls. This callback sanitizes `$page_id`
     * as an absolute integer, and then validates that $input is the ID of a published page.
     *
     * @see absint() https://developer.wordpress.org/reference/functions/absint/
     * @see get_post_status() https://developer.wordpress.org/reference/functions/get_post_status/
     *
     * @param int                  $page    Page ID.
     * @param WP_Customize_Setting $setting Setting instance.
     * @return int|string Page ID if the page is published; otherwise, the setting default.
     */
    function healthexx_customizer_sanitize_post( $page_id, $setting ) {
        // Ensure $input is an absolute integer.
        $page_id = absint( $page_id );

        // If $page_id is an ID of a published page, return it; otherwise, return the default.
        return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
    }
endif;