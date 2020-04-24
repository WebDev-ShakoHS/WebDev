<?php
	
	/**
	 * The admin-specific functionality of the plugin.
	 *
	 * @link       https://www.weather-atlas.com
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/admin
	 */
	
	/**
	 * The admin-specific functionality of the plugin.
	 * Defines the plugin name, version, and hooks for how to
	 * enqueue the admin-specific stylesheet and JavaScript.
	 *
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/admin
	 * @author     Yu Media Group d.o.o. <admin@weather-atlas.com>
	 */
	class Weather_Atlas_Admin
	{
		
		/**
		 * The ID of this plugin.
		 *
		 * @access   private
		 * @var      string $plugin_name The ID of this plugin.
		 */
		private $plugin_name;
		
		/**
		 * The version of this plugin.
		 *
		 * @access   private
		 * @var      string $version The current version of this plugin.
		 */
		private $version;
		
		/**
		 * Initialize the class and set its properties.
		 *
		 * @param      string $plugin_name The name of this plugin.
		 * @param      string $version     The version of this plugin.
		 */
		public function __construct( $plugin_name, $version )
		{
			$this->plugin_name = $plugin_name;
			$this->version     = $version;
		}
		
		/**
		 * Register the stylesheets for the admin area.
		 */
		
		public function enqueue_styles()
		{
			wp_enqueue_style( 'wp-color-picker' );
			// wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/weather-atlas-admin.min.css', array (), $this->version, 'all' );
			
		}
		
		/**
		 * Register the JavaScript for the admin area.
		 */
		
		public function enqueue_scripts()
		{
			wp_enqueue_script( 'jquery-ui-autocomplete' );
			wp_enqueue_script( 'wp-color-picker' );
			wp_enqueue_script( 'wp-color-picker-alpha', plugin_dir_url( __FILE__ ) . 'js/wp-color-picker-alpha.min.js', array ( 'wp-color-picker' ), '2.1.2', FALSE );
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/weather-atlas-admin.min.js', array ( 'jquery' ), $this->version, FALSE );
		}
		
		static function function_weather_atlas_plugin_action_links( $links )
		{
			$links_prefix = array (
				"<a href='https://www.weather-atlas.com/plugins/' target='_blank'><span style='color:#ff0000'>&#9733;</span> <b>" . __( 'Upgrade to Premium version', 'weather-atlas' ) . "</b></a><br />"
			);
			
			$links_suffix = array (
				"<a href='https://wordpress.org/support/plugin/weather-atlas' target='_blank'> " . __( 'Support', 'weather-atlas' ) . "</a>",
				"<a href='https://wordpress.org/support/plugin/weather-atlas/reviews/' target='_blank'> " . __( 'Reviews', 'weather-atlas' ) . "</a>"
			);
			
			return array_merge( $links_prefix, $links, $links_suffix );
		}
	}
	
	if ( ( empty( get_option( 'weather_atlas_version' ) ) ) OR ( version_compare( get_option( 'weather_atlas_version' ), $this->version ) == - 1 ) )
	{
		update_option( 'weather_atlas_version', $this->version );
	}
	// get_option( 'weather_atlas_version' );
	/*
	 if ( version_compare( get_option( 'weather_atlas_version' ), '1.2.1' ) < 0 )
	{

	}
	else
	{

	}
	*/