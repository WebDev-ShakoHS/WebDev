<?php
/**
 * Repeated value handling overrite
 * @param  array $reset_options
 * @return void
 *
 * @since healthexx 1.0.0
 */
if ( ! function_exists( 'healthexx_customizer_get_repeated_all_value' ) ) :
    function healthexx_customizer_get_repeated_all_value ( $repeated, $repeated_saved_values_name ) {

        $healthexx_customizer_get_all_values = healthexx_customizer_get_all_values( );
        $get_repeated_all_value = array();
        for ( $i = 1; $i <= $repeated; $i++ ){
            foreach( $repeated_saved_values_name as $healthexx_repeated_saved_value_name ){
                if( isset($healthexx_customizer_get_all_values[$healthexx_repeated_saved_value_name.'_'.$i]) ){
                    $get_repeated_all_value[$i][$healthexx_repeated_saved_value_name] = $healthexx_customizer_get_all_values[$healthexx_repeated_saved_value_name.'_'.$i];
                }
            }
        }
        return $get_repeated_all_value;
    }
endif;