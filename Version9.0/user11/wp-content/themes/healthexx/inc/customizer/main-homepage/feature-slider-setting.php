<?php

global $healthexx_sections;
global $healthexx_settings_controls;
global $healthexx_repeated_settings_controls;
global $defaults;

//Call all defaults value
$defaults = healthexx_defauts_value();

/*create section for feature slider*/
$healthexx_sections['healthexx-slider-section']  = array(
    'title'                 => esc_html__('Slider Section','healthexx'),
    'panel'                 => 'healthexx-main-page-options',
    'priority'              => 20
);

/*slider enable */
$healthexx_settings_controls['healthexx-enbale-slider'] = array(
    'setting' => array(
        'default'          => $defaults['healthexx-enbale-slider'],
        'sanitize_callback' => 'healthexx_sanitize_checkbox'

    ),
    'control' => array(
        'label'             => esc_html__('Show Slider','healthexx'),
        'section'           => 'healthexx-slider-section',
        'type'              => 'checkbox',
        'priority'          => 10,
        'acticve_callback'  => ''

    )       
);
    


/*post type slider from page */
$healthexx_repeated_settings_controls['healthexx-select-from-page'] = array(
    'repeated'      => 3,
    'healthexx-page-id' => array(
        'setting' => array(
            'default'                   => $defaults['healthexx-select-from-page'],
            'sanitize_callback' => 'healthexx_sanitize_dropdown_pages'

        ),
        'control' => array(
            /* translators: %s: search slider page */
            'label'                 => esc_html__('Slider %s','healthexx'),
            'section'               => 'healthexx-slider-section',
            'type'                  => 'dropdown-pages',            
            'priority'              => 60,

        ),  
    )   
);




/*Button text */
$healthexx_settings_controls['healthexx-slider-button-text2'] = array(
    'setting' => array(
        'default'           => $defaults['healthexx-slider-button-text2'],
        'sanitize_callback' => 'sanitize_text_field' 
    ),
    'control' => array(
        'label'             => esc_html__('Button text','healthexx'),
        'section'           => 'healthexx-slider-section',
        'type'              => 'text',
        'priority'          => 80,
        'sanitize_callback' => 'sanitize_text_field'

    )       
);

/*Button text */
$healthexx_settings_controls['healthexx-slider-button-text2-url'] = array(
    'setting' => array(
        'default'           => $defaults['healthexx-slider-button-text2-url'],
         'sanitize_callback' => 'esc_url_raw' 
    ),
    'control' => array(
        'label'             => esc_html__('Button url','healthexx'),
        'section'           => 'healthexx-slider-section',
        'type'              => 'url',
        'priority'          => 90,
       


    )       
);