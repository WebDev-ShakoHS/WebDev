<?php

global $healthexx_sections;
global $healthexx_settings_controls;
global $healthexx_repeated_settings_controls;
global $defaults;

//Call all defaults value
$defaults = healthexx_defauts_value();

//create a section for top header bar
$healthexx_sections['healthexx-top-header-bar-sections'] = array(
	'title'				=> esc_html__('Top Header Section','healthexx'),
	'panel'				=>'healthexx-main-page-options',
	'priority'			=> 10
); 


// cretae a enable top header
$healthexx_settings_controls['healthexx-enbale-top-bar-header']  = array(
	'setting' => array(
		'default' 		    => $defaults['healthexx-enbale-top-bar-header'],
	    'sanitize_callback' => 'healthexx_sanitize_checkbox'
	
	),
	'control' => array(
		'label'				=> esc_html__('Show Top Header','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'checkbox',
		'priority'			=> 20,

	)	

);



// create text field for header text
$healthexx_settings_controls['healthexx-top-bar-text']  = array(
	'setting' => array(
		'default' 		    => $defaults['healthexx-top-bar-text'],
		'sanitize_callback' => 'sanitize_text_field'		
	),
	'control' => array(
		'label'				=> esc_html__('Header Text','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'text',
		'priority'			=> 20,
    )	
);

// create text field for opening hours
$healthexx_settings_controls['healthexx-top-bar-hours']  = array(
	'setting' => array(
		'default' 		    => $defaults['healthexx-top-bar-hours'],
		'sanitize_callback' => 'sanitize_text_field'		
	),
	'control' => array(
		'label'				=> esc_html__('Opening Hours','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'text',
		'priority'			=> 20,

    )	
);


/*top bar facebook url*/
$healthexx_settings_controls['healthexx-top-header-bar-facebook-url'] = array(
	'setting' => array(
		'default'		=> $defaults['healthexx-top-header-bar-facebook-url'],
		'sanitize_callback' => 'esc_url_raw'
	),
	'control' => array(
		'label'				=> esc_html__('Facebook Url','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'url',
		'priority'			=> 20,
	)
);

/*top bar twitter url*/
$healthexx_settings_controls['healthexx-top-header-bar-twitter-url'] = array(
	'setting' => array(
		'default'		=> $defaults['healthexx-top-header-bar-twitter-url'],
		'sanitize_callback' => 'esc_url_raw'
	),
	'control' => array(
		'label'				=> esc_html__('Twitter Url','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'url',
		'priority'			=> 20,
	)
);

/*top bar linkedin url*/
$healthexx_settings_controls['healthexx-top-header-bar-linkedin-url'] = array(
	'setting' => array(
		'default'		=> $defaults['healthexx-top-header-bar-linkedin-url'],
		'sanitize_callback' => 'esc_url_raw'
	),
	'control' => array(
		'label'				=> esc_html__('Linkedin Url','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'url',
		'priority'			=> 20,
	)
);


/*top bar instagram url*/
$healthexx_settings_controls['healthexx-top-header-bar-instagram-url'] = array(
	'setting' => array(
		'default'		=> $defaults['healthexx-top-header-bar-instagram-url'],
		'sanitize_callback' => 'esc_url_raw'
	),
	'control' => array(
		'label'				=> esc_html__('Instagram Url','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'url',
		'priority'			=> 20,
	)
);

/*top bar google plus url*/
$healthexx_settings_controls['healthexx-top-header-bar-google-url'] = array(
	'setting' => array(
		'default'		=> $defaults['healthexx-top-header-bar-google-url'],
		'sanitize_callback' => 'esc_url_raw'
	),
	'control' => array(
		'label'				=> esc_html__('Google Plus Url','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'url',
		'priority'			=> 20,
	)
);


// create text field for phone number 
$healthexx_settings_controls['healthexx-top-bar-phone']  = array(
	'setting' => array(
		'default' 		=> $defaults['healthexx-top-bar-phone'],
		'sanitize_callback' => 'sanitize_text_field'	
	),
	'control' => array(
		'label'				=> esc_html__('Phone','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'text',
		'priority'			=> 30,
    )	
);



// create text field for Email
$healthexx_settings_controls['healthexx-top-bar-email']  = array(
	'setting' => array(
		'default' 		=> $defaults['healthexx-top-bar-email'],
		'sanitize_callback' => 'sanitize_text_field'	
	),
	'control' => array(
		'label'				=> esc_html__('Email','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'text',
		'priority'			=> 30,
    )	
);



// create text field for location 
$healthexx_settings_controls['healthexx-top-bar-location']  = array(
	'setting' => array(
		'default' 		=> $defaults['healthexx-top-bar-location'],
		'sanitize_callback' => 'sanitize_text_field'	
	),
	'control' => array(
		'label'				=> esc_html__('Location','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'text',
		'priority'			=> 30,
    )	
);



/*top bar button text*/
$healthexx_settings_controls['healthexx-top-header-bar-button'] = array(
	'setting' => array(
		'default'		=> $defaults['healthexx-top-header-bar-button'],
		'sanitize_callback' => 'sanitize_text_field'

	),
	'control' => array(
		'label'				=> esc_html__('Button Text','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'text',
		'priority'			=> 40,
	)
);

/*top bar button url*/
$healthexx_settings_controls['healthexx-top-header-bar-button-url'] = array(
	'setting' => array(
		'default'		=> $defaults['healthexx-top-header-bar-button-url'],
	    'sanitize_callback' => 'esc_url_raw'

	),
	'control' => array(
		'label'				=> esc_html__('Button url','healthexx'),
		'section'			=> 'healthexx-top-header-bar-sections',
		'type'				=> 'url',
		'priority'			=> 50,

	)
);