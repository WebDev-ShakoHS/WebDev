<?php
global $healthexx_sections;
global $healthexx_settings_controls;
global $defaults;

//Call all defaults values
$defaults = healthexx_defauts_value();

/*create color section */
$healthexx_sections['colors'] = array(
        'priority'       => 110,
        'title'          => esc_html__( 'Colors', 'healthexx' ),
    );