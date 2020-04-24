<?php

/*Make sure we don't expose any info if called directly*/
defined( 'ABSPATH' ) or die( "No script kiddies please!" );

/**
 * Constant to hold this framework version
 * @since 1.0.0
 */

/*Define Version*/
if ( !defined( 'healthexx_CUSTOMIZER_VERSION' ) ) {
    define( 'healthexx_CUSTOMIZER_VERSION', '1.0.0' );
}

/*Define Url for including css and js*/
if ( !defined( 'healthexx_CUSTOMIZER_URL' ) ) {
    define( 'healthexx_CUSTOMIZER_URL', plugin_dir_url( __FILE__ ) );
}

/*Define path for including php files*/
if ( !defined( 'healthexx_CUSTOMIZER_PATH' ) ) {
    define( 'healthexx_CUSTOMIZER_PATH', plugin_dir_path( __FILE__ ) );
}

/*Define setting name that will store in database, search and find theme_mods_theme-slug in option table in db*/
if( !defined('healthexx_CUSTOMIZER_NAME')){
    define( 'healthexx_CUSTOMIZER_NAME', 'healthexx_customizer_options' );
}

if ( ! class_exists( 'healthexx_healthexx_Customizer' ) ){
    /**
     * Class for almost all types of customizer fields.
     *
     * @package healthexx Customizer
     * @since 1.0.0
     */
    class healthexx_healthexx_Customizer{
        /*Basic variables for class*/

        /**
         * healthexx_healthexx_Customizer class instance.
         *
         * @see instance()
         * @var object
         * @access protected
         * @since 1.0.0
         *
         */
        protected static $instance = NULL;

        /**
         * Holds all basic control types that does not required class
         *
         * @var array
         * @access protected
         * @since 1.0.0
         *
         */
        protected $basic_control_types =
            array(
                'text',
                'text_html',
                'textarea',
                'textarea_html',
                'checkbox',
                'number',
                'number_range',
                'radio',
                'range',
                'select',
                'url',
                'email',
                'password',
                'dropdown-pages',
            );

        /**
         * Holds all panels sections settings
         *
         * @var array
         * @access protected
         * @since 1.0.0
         *
         */
        protected $panels_sections_settings = array();

        /**
         * Holds all panels
         *
         * @var array
         * @access protected
         * @since 1.0.0
         *
         */
        protected $panels = array();

        /**
         * Holds all sections
         *
         * @var array
         * @access protected
         * @since 1.0.0
         *
         */
        protected $sections = array();

        /**
         * Holds same fields repeated settings controls
         *
         * @var array
         * @access protected
         * @since 1.0.0
         *
         */
        public  $repeated_settings_controls = array();

        /**
         * Holds all settings controls
         *
         * @var array
         * @access protected
         * @since 1.0.0
         *
         */
        protected $settings_controls = array();

        /**
         * Holds all panel id to remove
         *
         * @var array
         * @access protected
         * @since 1.0.0
         *
         */
        protected $remove_panels = array();

        /**
         * Holds all section id to remove
         *
         * @var array
         * @access protected
         * @since 1.0.0
         *
         */
        protected $remove_sections = array();

        /**
         * Holds all settings control id to remove
         *
         * @var array
         * @access protected
         * @since 1.0.0
         *
         */
        protected $remove_settings_controls = array();

        /**
         * Access this plugin’s working instance
         *
         * @access public
         * @since 1.0.0
         * @return object of this class
         */
        public static function instance() {
            NULL === self::$instance and self::$instance = new self;
            return self::$instance;
        }

        /**
         * Used for regular plugin work.
         *
         * @access public
         * @since 1.0.0
         *
         * @return void
         *
         */
        public function init( $panels_sections_settings = array() ) {

            /*Basic variables initialization with filter*/
            $this->basic_control_types = apply_filters( 'healthexx_customizer_basic_control_types', $this->basic_control_types );

            $this->panels_sections_settings = $panels_sections_settings;
            $this->panels_sections_settings = apply_filters( 'healthexx_customizer_panels_sections_settings', $this->panels_sections_settings );

            /*Hook before any function of class start */
            do_action( 'healthexx_customizer_before', $this->panels_sections_settings );

            if( isset( $this->panels_sections_settings['panels'] ) && !empty( $this->panels_sections_settings['panels'] ) ) {
                $this->panels = $this->panels_sections_settings['panels'];
            }
            if( isset( $this->panels_sections_settings['sections'] ) && !empty( $this->panels_sections_settings['sections'] ) ) {
                $this->sections = $this->panels_sections_settings['sections'];
            }
            if( isset ( $this->panels_sections_settings['repeated_settings_controls'] ) && !empty( $this->panels_sections_settings['repeated_settings_controls'] ) ) {
                $this->repeated_settings_controls = $this->panels_sections_settings['repeated_settings_controls'];
            }
            if( isset( $this->panels_sections_settings['settings_controls'] ) && !empty( $this->panels_sections_settings['settings_controls'] ) ) {
                $this->settings_controls = $this->panels_sections_settings['settings_controls'];
            }
            if( isset( $this->panels_sections_settings['remove_panels'] ) && !empty( $this->panels_sections_settings['remove_panels'] ) ) {
                $this->remove_panels = $this->panels_sections_settings['remove_panels'];
            }
            if( isset ( $this->panels_sections_settings['remove_sections'] ) && !empty( $this->panels_sections_settings['remove_sections'] ) ) {
                $this->remove_sections = $this->panels_sections_settings['remove_sections'];
            }
            if( isset ( $this->panels_sections_settings['remove_settings_controls'] ) && !empty( $this->panels_sections_settings['remove_settings_controls'] ) ){
                $this->remove_settings_controls = $this->panels_sections_settings['remove_settings_controls'];
            }
            $this->panels = apply_filters( 'healthexx_customizer_panels', $this->panels );

            $this->sections = apply_filters( 'healthexx_customizer_sections', $this->sections );

            $this->repeated_settings_controls = apply_filters( 'healthexx_customizer_repeated_settings_controls', $this->repeated_settings_controls );

            $this->settings_controls = apply_filters( 'healthexx_customizer_settings_controls', $this->settings_controls );

            $this->remove_panels = apply_filters( 'healthexx_customizer_remove_panels', $this->remove_panels );

            $this->remove_sections = apply_filters( 'healthexx_customizer_remove_sections', $this->remove_sections );

            $this->remove_settings_controls = apply_filters( 'healthexx_customizer_remove_settings_controls', $this->remove_settings_controls );

            /*Set default values for panels*/
            if(!empty( $this->panels ) ){
                foreach( $this->panels as $panel_id => $panel ){
                    $this->panels_default_values( $panel_id, $panel );
                }
            }

            /*Set default values for sections*/
            if( !empty( $this->sections ) ) {
                foreach( $this->sections as $section_id => $section ){
                    $this->sections_default_values( $section_id, $section );
                }
            }

            /*Set default values for repeated settings controls*/
            if(!empty($this->repeated_settings_controls)) {
                foreach( $this->repeated_settings_controls as $repeated_setting_control_id => $repeated_setting_control ){
                    $this->repeated_setting_control_default_values( $repeated_setting_control );
                }
            }

            /*Set default values for setting control*/
            if(!empty($this->settings_controls)) {
                foreach( $this->settings_controls as $settings_control_id => $setting_control ){
                    $this->setting_control_default_values($settings_control_id, $setting_control);
                }
            }

            /*Enqueue necessary styles and scripts in  Theme Customizer.*/
            add_action('customize_controls_enqueue_scripts', array($this,'add_scripts_styles'), 12 );

            /*Adding theme customization admin screen*/
            add_action( 'customize_register', array($this,'add_customizer'), 12 );

            /*Hook before any function of class end */
            do_action( 'healthexx_customizer_repeated_settings_controls', $this->repeated_settings_controls );
            do_action( 'healthexx_customizer_after', $this->panels_sections_settings );
        }

        /**
         * Constructor. Intentionally left empty and public.
         *
         * @access public
         * @since 1.0.0
         *
         */
        public function __construct( $init = array()){
            if( !empty ( $init ) ) {
                $this->init( $init );
            }
        }

        /**
         * Function to Set default values for panels
         *
         * @access public
         * @since 1.0.0
         *
         * @param string $panel_id Id of panel
         * @param array $panel Single panel
         * @return void
         *
         */
        public function panels_default_values( $panel_id, $panel ) {
            $panels_default_values =
                array(
                    'priority'       => 120,
                    'capability'     => 'edit_theme_options',
                    'theme_supports' => '',
                    'title'          => '',
                    'description'    => '',
                );
            $panels_default_values = apply_filters( 'healthexx_customizer_panel_default_values', $panels_default_values );

            $this->panels[$panel_id] =
                array_merge(
                    $panels_default_values,
                    (array)$panel
                );
        }

        /**
         * Function to Set default values for sections
         *
         * @access public
         * @since 1.0.0
         *
         * @param string $section_id Id of section
         * @param array $section Single section
         * @return void
         *
         */
        public function sections_default_values( $section_id, $section ) {
            $sections_default_values =
                array(
                    'priority'       => 120,
                    'capability'     => 'edit_theme_options',
                    'theme_supports' => '',
                    'title'          => '',
                    'description'    => '',
                    'panel'          => '',
                );
            $sections_default_values = apply_filters( 'healthexx_customizer_sections_default_values', $sections_default_values );

            $this->sections[$section_id] =
                array_merge(
                    $sections_default_values,
                    (array)$section
                );
        }
        /**
         * Function to Set default values for repeated setting controls
         *
         * @access public
         * @since 1.0.0
         *
         * @param string $settings_control_id Id of repeated setting controls
         * @param array $setting_control Single settings control
         * @return void
         *
         */
        public function repeated_setting_control_default_values( $repeated_setting_control ) {
            if(!empty($repeated_setting_control)) {
                $priority_fixed = 0;
                $repeated_priority = 1;
                $repeated = $repeated_setting_control['repeated'];
                unset($repeated_setting_control['repeated']);
                for( $i = 1; $i <= $repeated; $i++ ) {

                    foreach( $repeated_setting_control as $settings_control_id => $setting_control ){

                        if( 0 == $priority_fixed ) {
                            $repeated_priority =  $setting_control['control']['priority'];
                        }
                        else {
                            $repeated_priority = $repeated_priority++;

                        }
                        if( isset( $setting_control['control']['label'] ) ){
                            $setting_control['control']['label'] = sprintf( $setting_control['control']['label'], $i );
                        }
                        $setting_control['control']['priority'] = $repeated_priority;
                        $settings_control_id = $settings_control_id.'_'.$i;

                        $settings_control_id = apply_filters( 'healthexx_customizer_repeated_setting_control_id', $settings_control_id , $setting_control );
                        $setting_control = apply_filters( 'healthexx_customizer_repeated_setting_control', $setting_control, $settings_control_id );

                        $this->settings_controls[$settings_control_id] = $setting_control;

                        $priority_fixed++;
                    }

                }
            }
        }

        /**
         * Function to Set default values for setting controls
         * Based on https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php
         * @access public
         * @since 1.0.0
         *
         * @param string $settings_control_id Id of settings control
         * @param array $setting_control Single settings control
         * @return void
         *
         */
        public function setting_control_default_values( $settings_control_id, $setting_control ) {

            $setting_control_type = $setting_control['control']['type'];
            if( 'text' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'wp_filter_nohtml_kses';
            }
            elseif( 'text_html' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'wp_filter_post_kses';
                $setting_control['control']['type'] = 'text';
            }
            elseif( 'textarea' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'wp_filter_nohtml_kses';
            }
            elseif( 'textarea_html' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'wp_filter_post_kses';
                $setting_control['control']['type'] = 'textarea';
            }
            elseif( 'textarea_sc' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'wp_kses_post';
                $setting_control['control']['type'] = 'textarea';
            }
            elseif( 'textarea_css' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'wp_sportfolio_all_tags';
                $setting_control['control']['type'] = 'textarea';
            }
            elseif( 'checkbox' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_checkbox';
            }
            elseif( 'number' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_number';
            }
            elseif( 'number_range' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_number_range';
                $setting_control['control']['type'] = 'number';
            }
            elseif( 'radio' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_select';
            }
            elseif( 'range' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_number_range';
            }
            elseif( 'select' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_select';
            }
            elseif( 'url' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'esc_url_raw';
            }
            elseif( 'email' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_email';
            }
            elseif( 'password' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'wp_filter_nohtml_kses';/*wp_filter_nohtml_kses*/
            }
            elseif( 'dropdown-pages' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_post';
            }
            /*WordPress class available*/
            elseif( 'color' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_hex_color';
            }
            elseif( 'upload' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_upload';
            }
            elseif( 'image' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_image';
            }

            /*Custom control*/
            elseif( 'post_dropdown' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_post';
            }
             elseif( 'category_dropdown' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'absint';
            }
            elseif( 'radio_image' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'healthexx_customizer_sanitize_select';
            }
            elseif( 'tags_dropdown' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'absint';
            }
            elseif( 'user_dropdown' == $setting_control_type ){
                $healthexx_customizer_default_sanitize_callback = 'absint';
            }
            else{
                $healthexx_customizer_default_sanitize_callback = 'esc_attr';
            }
            $healthexx_customizer_setting_type = 'theme_mod';
            if (defined('healthexx_CUSTOMIZER_OPTION_MODE') && healthexx_CUSTOMIZER_OPTION_MODE == 1 ) {
                $healthexx_customizer_setting_type = 'option';
            }
            $healthexx_customizer_setting_default_values =
                array(
                    'type'                 => $healthexx_customizer_setting_type,
                    'capability'           => 'edit_theme_options',
                    'theme_supports'       => '',
                    'default'              => '',
                    'transport'            => 'refresh',
                    'sanitize_callback'    => $healthexx_customizer_default_sanitize_callback
                );
            $healthexx_customizer_control_default_values =
                array(
                    'label'                 => '',
                    'section'               => '',
                    'type'                  => '',
                    'priority'              => 12,
                    'description'           => '',
                    'active_callback'       => ''
                );
            $healthexx_customizer_setting_default_values = apply_filters( 'healthexx_customizer_setting_default_values', $healthexx_customizer_setting_default_values );
            $healthexx_customizer_control_default_values = apply_filters( 'healthexx_customizer_control_default_values', $healthexx_customizer_control_default_values );


            if( !isset ( $setting_control['setting'] )) {
                $setting_control['setting'] = array();
            }
            if( !isset( $setting_control['control'] ) ) {
                $setting_control['control'] = array();
            }

            $this->settings_controls[$settings_control_id]['setting'] =
                array_merge(
                    $healthexx_customizer_setting_default_values,
                    (array)$setting_control['setting']
                );
            $this->settings_controls[$settings_control_id]['control'] =
                array_merge(
                    $healthexx_customizer_control_default_values,
                    (array)$setting_control['control']
                );
        }
        /**
         * Enqueue style and scripts at Theme Customizer
         *
         * @access public
         * @since 1.0.0
         *
         * @return void
         *
         */
        function add_scripts_styles(){
            global $pagenow;
            if ( 'customize.php' == $pagenow ) {
                wp_enqueue_style( 'healthexx-customizer-style', get_template_directory_uri() . '/inc/frameworks/healthexx-customizer/assets/css/healthexx-customizer.css', false, healthexx_CUSTOMIZER_VERSION );
            }
        }

        /**
         * Function to register customizer
         *
         * @access public
         * @since 1.0.0
         *
         * @param object $healthexx_customizer_wp_customize
         * @return void
         *
         */
        public function add_customizer( $healthexx_customizer_wp_customize ){

            require_once trailingslashit( healthexx_CUSTOMIZER_PATH ) . 'inc/healthexx-customizer-custom-control.php';

            /*Again adding filter here*/
            $panels = apply_filters( 'healthexx_customizer_register_customize_panel', $this->panels );
            $sections = apply_filters( 'healthexx_customizer_register_customize_sections', $this->sections );
            $settings_controls = apply_filters( 'healthexx_customizer_register_customize_settings_controls', $this->settings_controls );
            $basic_control_types = apply_filters( 'healthexx_customizer_register_customizer_basic_control_types', $this->basic_control_types );
            $remove_panels = apply_filters( 'healthexx_customizer_register_customize_remove_panel', $this->remove_panels );
            $remove_sections = apply_filters( 'healthexx_customizer_register_customize_remove_sections', $this->remove_sections );
            $remove_settings_controls = apply_filters( 'healthexx_customizer_register_customize_remove_settings_controls', $this->remove_settings_controls );

            /*Adding Panels*/
            if ( ! empty( $panels ) ) {
                foreach($panels as $panel_key =>  $panel) {
                    $healthexx_customizer_wp_customize->add_panel( esc_attr( $panel_key ), $panel );
                }
            }

            /*Adding sections*/
            if ( ! empty( $sections ) ) {
                foreach($sections as $section_key =>  $section) {
                    $healthexx_customizer_wp_customize->add_section( esc_attr( $section_key ), $section );
                }
            }


            /*Adding settings controls*/
            if ( ! empty( $settings_controls ) ) {
                foreach($settings_controls as $setting_control_key =>  $healthexx_customizer_settings_control) {
                    do_action('healthexx_customizer_add_setting_control',$healthexx_customizer_wp_customize,healthexx_CUSTOMIZER_NAME, $basic_control_types, $setting_control_key, $healthexx_customizer_settings_control );
                }
            }
            /*Removing Panels*/
            if ( ! empty( $remove_panels ) ) {
                foreach($remove_panels as $healthexx_customizer_remove_panel) {
                    $healthexx_customizer_wp_customize->remove_panel( esc_attr( $healthexx_customizer_remove_panel ));
                }
            }

            /*Removing sections*/
            if ( ! empty( $remove_sections ) ) {
                foreach($remove_sections as $healthexx_customizer_remove_section) {
                    $healthexx_customizer_wp_customize->remove_section( esc_attr( $healthexx_customizer_remove_section ));
                }
            }
            /*Removing settings controls*/
            if ( ! empty( $remove_settings_controls ) ) {
                foreach($remove_settings_controls as $healthexx_customizer_remove_settings_control) {
                    $healthexx_customizer_wp_customize->remove_control( esc_attr( $healthexx_customizer_remove_settings_control ));
                }
            }
            /*update option to save repeated values
            * @since 1.1
            */
            if (defined('healthexx_CUSTOMIZER_OPTION_MODE') && healthexx_CUSTOMIZER_OPTION_MODE == 1 ) {
                $healthexx_customizer_customizer_values = get_option( healthexx_CUSTOMIZER_NAME );
            }
            else{
                $healthexx_customizer_customizer_values = get_theme_mod( healthexx_CUSTOMIZER_NAME );
            }
            return $healthexx_customizer_customizer_values;
        }/*END function add_customizer*/
    } /*END class healthexx_healthexx_Customizer*/

    /*Initialize class after theme setup*/
    add_action( 'after_setup_theme', array ( healthexx_healthexx_Customizer::instance(), 'init' ));
    /*include path for sanitization fields*/
    require_once trailingslashit( healthexx_CUSTOMIZER_PATH ) . 'inc/healthexx-customizer-hooks.php';
    require_once trailingslashit( healthexx_CUSTOMIZER_PATH ) . 'inc/healthexx-sanitization-functions.php';
    require_once trailingslashit( healthexx_CUSTOMIZER_PATH ) . 'inc/healthexx-customizer-functions.php';
}