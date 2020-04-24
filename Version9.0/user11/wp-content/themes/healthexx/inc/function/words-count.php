<?php
/**
* Returns word count of the sentences.
*
* @since healthexx 1.0.0
*/
if ( ! function_exists( 'healthexx_words_count' ) ) :
	function healthexx_words_count( $length = 25, $healthexx_content = null ) {
		$length = absint( $length );
		$more = esc_html__( '&hellip;','healthexx' );
		$source_content = preg_replace( '`\[[^\]]*\]`', '', $healthexx_content );
		$trimmed_content = wp_trim_words( $source_content, $length, $more );
		return $trimmed_content;
	}
endif;