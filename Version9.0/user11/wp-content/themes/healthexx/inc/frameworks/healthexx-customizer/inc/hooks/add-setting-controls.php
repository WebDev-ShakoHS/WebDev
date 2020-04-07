<?php
/*I have added it through action so that it is flexible to the developer to adapt change*/
add_action('healthexx_customizer_add_setting_control','healthexx_customizer_add_setting_control_callback', 12, 5);

if ( ! function_exists( 'healthexx_customizer_add_setting_control_callback' ) ) :
    /**
     * Function to add customizer setting and controls
     *
     * @access public
     * @since 1.0.0
     *
     * @param object $healthexx_customizer_wp_customize
     * @param string $healthexx_customizer_customizer_name common name for all setting and controls
     * @param array $healthexx_customizer_basic_control_types
     * @param string $healthexx_customizer_setting_control_key
     * @param array $healthexx_customizer_settings_control
     * @return void
     *
     */
    function healthexx_customizer_add_setting_control_callback( $healthexx_customizer_wp_customize, $healthexx_customizer_customizer_name, $healthexx_customizer_basic_control_types, $healthexx_customizer_setting_control_key, $healthexx_customizer_settings_control ){
        $healthexx_customizer_wp_customize->add_setting( esc_attr( $healthexx_customizer_customizer_name.'['.$healthexx_customizer_setting_control_key.']' ), $healthexx_customizer_settings_control['setting']);

        $healthexx_customizer_control_field_type = $healthexx_customizer_settings_control['control']['type'];

        /*check if basic control types*/
        if ( in_array( $healthexx_customizer_control_field_type, $healthexx_customizer_basic_control_types ) ) {
            $healthexx_customizer_wp_customize->add_control( esc_attr( $healthexx_customizer_customizer_name.'['.$healthexx_customizer_setting_control_key.']' ), $healthexx_customizer_settings_control['control']);
        }
        else {
            /*Check for default WP_Customize_Custom_Control defined*/
            $healthexx_customizer_Explode_Customize_Custom_Control_class_name = explode('_', strtolower( $healthexx_customizer_control_field_type ));
            $healthexx_customizer_Ucfirst_Customize_Custom_Control_class_name_array = array_map('ucfirst', $healthexx_customizer_Explode_Customize_Custom_Control_class_name);
            $healthexx_customizer_Implode_Customize_Custom_Control_class_name = implode('_', $healthexx_customizer_Ucfirst_Customize_Custom_Control_class_name_array);

            $healthexx_customizer_New_Customize_Custom_Control_class_name = 'WP_Customize_'.$healthexx_customizer_Implode_Customize_Custom_Control_class_name.'_Control';
            $healthexx_customizer_customizer_class_exist = false;
            if ( class_exists( $healthexx_customizer_New_Customize_Custom_Control_class_name ) ) {
                $healthexx_customizer_customizer_class_exist = true;
            }
            else{
                $healthexx_customizer_New_Customize_Custom_Control_class_name = 'Evision_Customizer_'.$healthexx_customizer_Implode_Customize_Custom_Control_class_name.'_Control';
                if ( class_exists( $healthexx_customizer_New_Customize_Custom_Control_class_name ) ) {
                    $healthexx_customizer_customizer_class_exist = true;
                }
            }
            if($healthexx_customizer_customizer_class_exist){
                $healthexx_customizer_wp_customize->add_control(
                    new $healthexx_customizer_New_Customize_Custom_Control_class_name(
                        $healthexx_customizer_wp_customize,
                        esc_attr( $healthexx_customizer_customizer_name.'['.$healthexx_customizer_setting_control_key.']'),
                        $healthexx_customizer_settings_control['control']
                    )
                );
            }
            else {
                ?>

                  <script>
                    console.log('<?php echo esc_attr( $healthexx_customizer_New_Customize_Custom_Control_class_name ). "not found. Please create it."?>');
                </script>

            <?php
            }

        }
    }
endif;