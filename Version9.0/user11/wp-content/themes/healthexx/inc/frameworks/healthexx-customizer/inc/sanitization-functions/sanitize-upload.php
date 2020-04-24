<?php
if ( ! function_exists( 'healthexx_customizer_sanitize_upload' ) ) :
    /**
     * Function to sanitize upload
     *
     * @access public
     * @since 1.1
     *
     * @param $upload
     * @return string
     *
     */
    function healthexx_customizer_sanitize_upload( $upload, $setting ) {
        /*
         * Array of valid upload file types.
         *
         * The array includes upload mime types that are included in wp_get_mime_types()
         */
        $mimes = wp_get_mime_types();
        // Return an array with file extension and mime_type.
        $file = wp_check_filetype( $upload, $mimes );
        // If $upload has a valid mime_type, return it; otherwise, return the default.
        return ( $file['ext'] ? $upload : $setting->default );
    }
endif;