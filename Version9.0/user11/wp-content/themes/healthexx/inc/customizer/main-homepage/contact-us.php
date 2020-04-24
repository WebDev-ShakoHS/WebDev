<?php
global $healthexx_sections;
global $healthexx_settings_controls;
global $healthexx_repeated_settings_controls;
global $defaults;

// call all defaults values
$defaults = healthexx_defauts_value();

/*create a section for contact*/
$healthexx_sections['healthexx-contact-section'] = array(
	'title'							=> esc_html__('Contact us Section','healthexx'),
	'panel'							=> 'healthexx-main-page-options',
	'priority'						=> 100
);

/*Enable contact section*/
$healthexx_settings_controls['healthexx-contact-section-enable'] = array(
	'setting' => array(
		'default'					=> $defaults['healthexx-contact-section-enable'],
	    'sanitize_callback' => 'healthexx_sanitize_checkbox'

	),
	'control' => array(
		'label'						=> esc_html__('Show Contact Us Section','healthexx'),
		'section'					=> 'healthexx-contact-section',
		'type'						=> 'checkbox',
		'priority'					=> 10,
	)

);

/*contact logo phone */
$healthexx_settings_controls['healthexx-contact-address-logo'] = array(
	'setting'	=> array(
		'default'				=> $defaults['healthexx-contact-address-logo'],
		'sanitize_callback' => 'sanitize_text_field'

	),
	'control' 	=> array(
		'label'				=> esc_html__( 'Address Logo','healthexx' ),
		'section'			=> 'healthexx-contact-section',
		'type'				=> 'text',
		'priority'			=> 15,
	)
);


/*contact address */
$healthexx_settings_controls['healthexx-contact-address-title'] = array(
	'setting'	=> array(
		'default'				=> $defaults['healthexx-contact-address-title'],
	    'sanitize_callback' => 'sanitize_text_field'

	),
	'control' 	=> array(
		'label'				=> esc_html__( 'Address text','healthexx' ),
		'section'			=> 'healthexx-contact-section',
		'type'				=> 'text',
		'priority'			=> 20,
	)
);

/*contact sub address */
$healthexx_settings_controls['healthexx-contact-address-sub-text'] = array(
	'setting'	=> array(
		'default'				=> $defaults['healthexx-contact-address-sub-text'],
		'sanitize_callback' => 'sanitize_text_field'

	),
	'control' 	=> array(
		'label'				=> esc_html__( 'Sub-Address Text','healthexx' ),
		'section'			=> 'healthexx-contact-section',
		'type'				=> 'text',
		'priority'			=> 30,
	)
);

/*contact logo phone */
$healthexx_settings_controls['healthexx-contact-phone-logo'] = array(
	'setting'	=> array(
		'default'				=> $defaults['healthexx-contact-phone-logo'],
		'sanitize_callback' => 'sanitize_text_field'

	),
	'control' 	=> array(
		'label'				=> esc_html__( 'Phone Logo','healthexx' ),
		'section'			=> 'healthexx-contact-section',
		'type'				=> 'text',
		'priority'			=> 50,
	)
);

/*contact phone */
$healthexx_settings_controls['healthexx-contact-phone-title'] = array(
	'setting'	=> array(
		'default'	 => $defaults['healthexx-contact-phone-title'],
		'sanitize_callback' => 'sanitize_text_field'

	),
	'control' 	=> array(
		'label'				=> esc_html__( 'Phone Text','healthexx' ),
		'section'			=> 'healthexx-contact-section',
		'type'				=> 'text',
		'priority'			=> 55,
	)
);

/*contact phone */
$healthexx_settings_controls['healthexx-contact-phone-sub-text'] = array(
	'setting'	=> array(
		'default'				=> $defaults['healthexx-contact-phone-sub-text'],
		'sanitize_callback' => 'sanitize_text_field'

	),
	'control' 	=> array(
		'label'				=> esc_html__( 'Phone sub-Text','healthexx' ),
		'section'			=> 'healthexx-contact-section',
		'type'				=> 'text',
		'priority'			=> 60,
	)
);

/*contact logo email */
$healthexx_settings_controls['healthexx-contact-email-logo'] = array(
	'setting'	=> array(
		'default'				=> $defaults['healthexx-contact-email-logo'],
		'sanitize_callback' => 'sanitize_text_field'

	),
	'control' 	=> array(
		'label'				=> esc_html__( 'Email Logo','healthexx' ),
		'section'			=> 'healthexx-contact-section',
		'type'				=> 'text',
		'priority'			=> 70,
	)
);

/*contact email */
$healthexx_settings_controls['healthexx-contact-email-title'] = array(
	'setting'	=> array(
		'default'				=> $defaults['healthexx-contact-email-title'],
		'sanitize_callback' => 'sanitize_text_field'

	),
	'control' 	=> array(
		'label'				=> esc_html__( 'Email ','healthexx' ),
		'section'			=> 'healthexx-contact-section',
		'type'				=> 'text',
		'priority'			=> 80,
	)
);

/*contact email */
$healthexx_settings_controls['healthexx-contact-email-sub-text'] = array(
	'setting'	=> array(
		'default'				=> $defaults['healthexx-contact-email-sub-text'],
		'sanitize_callback' => 'sanitize_text_field'

	),
	'control' 	=> array(
		'label'				=> esc_html__( 'Email Sub-Text','healthexx' ),
		'section'			=> 'healthexx-contact-section',
		'type'				=> 'text',
		'priority'			=> 90,
	)
);