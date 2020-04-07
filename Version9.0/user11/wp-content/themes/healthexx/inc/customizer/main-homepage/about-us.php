<?php
global $healthexx_sections;
global $healthexx_settings_controls;
global $healthexx_repeated_settings_controls;
global $defaults; 

//call all defaults values
$defaults = healthexx_defauts_value();

/*create section about us*/
$healthexx_sections['healthexx-about-us-section'] = array(
	'title'					=> esc_html__(' About Us Section','healthexx'),
	'panel'					=> 'healthexx-main-page-options',
	'priority'				=> 30
);

/*enable about us*/
$healthexx_settings_controls['healthexx-enable-about-us']  =  array(
	'setting' => array(
		'default'			=> '',
	    'sanitize_callback' => 'healthexx_sanitize_checkbox'



	),
	'control' => array(
		'label'				=> esc_html__('Show About Us Section','healthexx'),
		'section'			=> 'healthexx-about-us-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
	)

);

/*About us Section title */
$healthexx_settings_controls['healthexx-about-us-title']  =  array(
	'setting' => array(
		'default'			=> $defaults['healthexx-about-us-title'],
		'sanitize_callback' => 'sanitize_text_field'
	),
	'control' => array(
		'label'				=> esc_html__('Title','healthexx'),
		'section'			=> 'healthexx-about-us-section',
		'type'				=> 'text',
		'priority'			=> 15,	)

);


/*excerpt length*/
$healthexx_settings_controls['healthexx-excerpt-length-left']  =  array(
	'setting' => array(
		'default'			=> '20',
		'sanitize_callback' => 'healthexx_excerpt_length'

	),
	'control' => array(
		'label'				=> esc_html__('Excerpt Length Of Content','healthexx'),
		'section'			=> 'healthexx-about-us-section',
		'type'				=> 'number',
		'priority'			=> 20,
	)

);

/*Select Page*/
$healthexx_settings_controls['healthexx-about-us-select-page']  =  array(
	'setting' => array(
		'default'			=> $defaults['healthexx-about-us-select-page'],
		'sanitize_callback' => 'healthexx_sanitize_dropdown_pages'

	),
	'control' => array(
		'label'				=> esc_html__('Select page','healthexx'),
		'section'			=> 'healthexx-about-us-section',
		'type'				=> 'dropdown-pages',
		'priority'			=> 40,
	)

);