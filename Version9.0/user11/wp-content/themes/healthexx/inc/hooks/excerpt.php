<?php
if ( !function_exists('healthexx_excerpt_length') ) :
     /**
     * Excerpt length
     *
     * @since healthexx 1.0.0
     *
     * @param null
     * @return int
     */
     function healthexx_excerpt_length( $length ) {
        global $healthexx_customizer_all_values;
        if(is_admin() ){
            return $length;
        }
        $excerpt_length = $healthexx_customizer_all_values['healthexx-number-of-words'];        
        if ( !$excerpt_length ) {
            $excerpt_length = $length;
        }
        return absint( $excerpt_length );
     }
endif;
add_filter( 'excerpt_length', 'healthexx_excerpt_length' );


if ( ! function_exists( 'healthexx_implement_read_more' ) ) :

    /**
     * Implement read more in excerpt.
     *
     * @since 1.0.0
     *
     * @param string $more The string shown within the more link.
     * @return string The excerpt.
     */
    function healthexx_implement_read_more( $more ) {

        $flag_apply_excerpt_read_more = apply_filters( 'healthexx_filter_excerpt_read_more', true );
        if ( true !== $flag_apply_excerpt_read_more ) {
            return $more;
        }

        $output = $more;
        $read_more_text = esc_html__('continue reading','healthexx');
        if ( ! empty( $read_more_text ) ) {
            $output = ' <div class="read-more-text"><a href="' . esc_url( get_permalink() ) . '" class="read-more">' . $read_more_text . '</a></div>';
            $output = apply_filters( 'healthexx_filter_read_more_link' , $output );
        }
        return $output;

    }

endif;

add_action( 'excerpt_more', 'healthexx_implement_read_more' );