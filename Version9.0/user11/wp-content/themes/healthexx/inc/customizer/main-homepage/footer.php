<?php
global $healthexx_sections;
global $healthexx_settings_controls;
global $healthexx_repeated_settings_controls;
global $defaults;

// Call all defaults values
$defaults = healthexx_defauts_value();

// create footer section
$healthexx_sections['healthexx-footer-options'] = array(
    'priority'       => 700,
    'title'          => esc_html__( 'Footer Options', 'healthexx' ),
    'panel'          => 'healthexx-main-page-options'
);

// create section for footer text
$healthexx_settings_controls['healthexx-copyright-text'] = array(
    'setting' =>     array(
        'default'              => $defaults['healthexx-copyright-text'],
        'sanitize_callback' => 'sanitize_text_field'
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Copyright Text', 'healthexx' ),
        'section'               => 'healthexx-footer-options',
        'type'                  => 'text',
        'priority'              => 20,
    )
);


/*scroll to top*/
$healthexx_settings_controls['healthexx-enable-scroll-to-top'] = array(
    'setting' =>     array(
        'default'              => $defaults['healthexx-enable-scroll-to-top'],
        'sanitize_callback' => 'healthexx_sanitize_checkbox'

    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Show Scroll To Top', 'healthexx' ),
        'section'               => 'healthexx-footer-options',
        'type'                  => 'checkbox',
        'priority'              => 60,
    )
);

