<?php
global $healthexx_panels;
global $healthexx_sections;
global $healthexx_settings_controls;
global $healthexx_repeated_settings_controls;
global $defaults;

// Call all default values
$defaults = healthexx_defauts_value();

/*create section for service*/
$healthexx_sections['healthexx-service-section'] = array(
	'title'		          => esc_html__('Services Section','healthexx'),
	'panel'		          => 'healthexx-main-page-options',	
	'priority'	          => 70,

);

/*enable service section*/
$healthexx_settings_controls['healthexx-service-enable'] = array(
    'setting' =>       array(
        'default'               =>  '',
        'sanitize_callback' => 'healthexx_sanitize_checkbox'

    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Show services Section', 'healthexx' ),
        'section'               =>   'healthexx-service-section',
        'type'                  =>   'checkbox',
        'priority'              =>   10,
    )
);
    
/*Section Title*/
$healthexx_settings_controls['healthexx-service-section-title'] = array(
    'setting' =>       array(
        'default'              =>   $defaults['healthexx-service-section-title'],
        'sanitize_callback' => 'sanitize_text_field'
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Section Title', 'healthexx' ),
        'section'               =>   'healthexx-service-section',
        'type'                  =>   'text',
        'priority'              =>   15,
    )
);


$healthexx_settings_controls['healthexx-service-section-subtitle'] = array(
    'setting' =>       array(
        'default'              =>   $defaults['healthexx-service-section-subtitle'],
        'sanitize_callback' => 'sanitize_text_field'
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Section Subtitle', 'healthexx' ),
        'section'               =>   'healthexx-service-section',
        'type'                  =>   'text',
        'priority'              =>   15,
    )
);





/*page Selection */
$healthexx_repeated_settings_controls['healthexx-service-from-page'] = array(
	'repeated' 		=> 6,
	'service-icons-ids' => array(
        'setting' => array(
            'default'               =>   $defaults['healthexx-service-page-icon'],
            'sanitize_callback' => 'sanitize_text_field',
        ),
        'control' =>   array(
            /* translators: %s: search page icon */
            'label'                 =>    esc_html__( 'Icon for Page %s', 'healthexx' ),
            /* translators: %s: search page icon describe */
            'description'           =>   sprintf( esc_html__( 'Eg: %1$s. %2$s View Font Awesome. %3$s', 'healthexx' ), "<b>".'fa-wrench'."</b>",'<a href="'.esc_url('https://fontawesome.com/v4.7.0/icons/').'" target="_blank">','</a>' ),
            'section'               =>   'healthexx-service-section',
            'type'                  =>   'text',
            'priority'              =>   60,
        )
	),
    'service-page-ids' => array(
        'setting' => array(
            'default'              =>   $defaults['healthexx-service-from-page'],
            'sanitize_callback' => 'healthexx_sanitize_dropdown_pages'

        ),
        'control' =>   array(
            /* translators: %s: search service page */
            'label'                 =>    esc_html__( 'Page %s', 'healthexx' ),
            'section'               =>   'healthexx-service-section',
            'type'                  =>   'dropdown-pages',
            'priority'              =>   60,
        )
    ),      
	
);