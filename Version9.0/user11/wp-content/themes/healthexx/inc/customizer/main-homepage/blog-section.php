<?php

global $healthexx_sections;
global $healthexx_settings_controls;
global $healthexx_repeated_settings_controls;
global $defaults; 

/* call all defaults value*/
$defaults = healthexx_defauts_value();

/*create section blog*/
$healthexx_sections['healthexx-blog-section'] = array(
	'title'							=> esc_html__('Blog Section','healthexx'),
	'panel'							=> 'healthexx-main-page-options',
	'priority'						=> 90
);

/*enable blog section*/
$healthexx_settings_controls['healthexx-blog-section-enable']  = array(
	'setting' => array(
		'default'					=> $defaults['healthexx-blog-section-enable'],
	    'sanitize_callback' => 'healthexx_sanitize_checkbox'

	),
	'control' => array(
		'label'						=> esc_html__('Show Blog Section ','healthexx'),
		'section'					=> 'healthexx-blog-section',
		'type'						=> 'checkbox',
		'priority'					=> 10,
	)
);

/*Blog section Title*/
$healthexx_settings_controls['healthexx-blog-section-title-text']  = array(
	'setting' => array(
		'default'					=> $defaults['healthexx-blog-section-title-text'],
		'sanitize_callback' => 'sanitize_text_field'

	),
	'control' => array(
		'label'						=> esc_html__('Section Title','healthexx'),
		'section'					=> 'healthexx-blog-section',
		'type'						=> 'text',
		'priority'					=> 20,
	)
);

/*Blog section Subtitle*/
$healthexx_settings_controls['healthexx-blog-section-subtitle-text']  = array(
	'setting' => array(
		'default'					=> $defaults['healthexx-blog-section-subtitle-text'],
		'sanitize_callback' => 'sanitize_text_field'
	),
	'control' => array(
		'label'						=> esc_html__('Section Subtitle','healthexx'),
		'section'					=> 'healthexx-blog-section',
		'type'						=> 'text',
		'priority'					=> 20,
	)
);


/*Excerpt Length*/
$healthexx_settings_controls['healthexx-blog-excerpt-length']  = array(
	'setting' => array(
		'default'					=> $defaults['healthexx-blog-excerpt-length'],
		'sanitize_callback' => 'healthexx_excerpt_length'

	),
	'control' => array(
		'label'						=> esc_html__('Excerpt Length','healthexx'),
		'section'					=> 'healthexx-blog-section',
		'type'						=> 'number',
		'priority'					=> 40,
	)
);




/*Button Text*/
$healthexx_settings_controls['healthexx-blog-button-text']  = array(
	'setting' => array(
		'default'					=> $defaults['healthexx-blog-button-text'],
		'sanitize_callback' => 'sanitize_text_field'
	),
	'control' => array(
		'label'						=> esc_html__('Button Text','healthexx'),
		'section'					=> 'healthexx-blog-section',
		'type'						=> 'text',
		'priority'					=> 60,
	)
);
