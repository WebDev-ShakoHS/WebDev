<?php
if ( ! function_exists( 'healthexx_customizer_get_all_values' ) ) :
    /**
     * Function to get all value
     *
     * @access public
     * @since 1.0.0
     *
     * @param string $healthexx_customizer_name
     * @return array || other values
     *
     */
    function healthexx_customizer_get_all_values( $healthexx_customizer_name_args = null ){
        if( $healthexx_customizer_name_args ){
            $healthexx_CUSTOMIZER_NAME = $healthexx_customizer_name_args;
        }
        elseif(defined('healthexx_CUSTOMIZER_NAME')){
            $healthexx_CUSTOMIZER_NAME = healthexx_CUSTOMIZER_NAME;
        }
        else{
            $healthexx_CUSTOMIZER_NAME = 'healthexx_customizer_options';
        }

        if (defined('healthexx_CUSTOMIZER_OPTION_MODE') && healthexx_CUSTOMIZER_OPTION_MODE == 1 ) {
            $customizer_values = get_option( $healthexx_CUSTOMIZER_NAME);
        }
        else{
            $customizer_values = get_theme_mod( $healthexx_CUSTOMIZER_NAME );
        }

        return $customizer_values;
    }
endif;