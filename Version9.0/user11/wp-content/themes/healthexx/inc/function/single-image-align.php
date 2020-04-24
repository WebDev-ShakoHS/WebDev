<?php 
/*image alignment single post*/
if( ! function_exists( 'healthexx_single_post_image_align' ) ) :
    /**
     * healthexx default layout function
     *
     * @since  healthexx 1.0.0
     *
     * @param int
     * @return string
     */
    function healthexx_single_post_image_align( $post_id = null ){
        global $healthexx_customizer_all_values,$post;
        if( null == $post_id && isset ( $post->ID ) ){
            $post_id = $post->ID;
        }
        $healthexx_single_post_image_align = $healthexx_customizer_all_values['healthexx-single-post-image-align'];
       
        $healthexx_single_post_image_align_meta = get_post_meta( $post_id, 'healthexx-single-post-image-align', true );

        if( false != $healthexx_single_post_image_align_meta ) {
            $healthexx_single_post_image_align = $healthexx_single_post_image_align_meta;
        }
        return $healthexx_single_post_image_align;
    }
endif;