<?php
	
	/**
	 * Define the internationalization functionality
	 * Loads and defines the internationalization files for this plugin
	 * so that it is ready for translation.
	 *
	 * @link       https://www.weather-atlas.com
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 */
	
	/**
	 * Define the internationalization functionality.
	 * Loads and defines the internationalization files for this plugin
	 * so that it is ready for translation.
	 *
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 * @author     Yu Media Group d.o.o. <admin@weather-atlas.com>
	 */
	class Weather_Atlas_i18n
	{
		
		/**
		 * Load the plugin text domain for translation.
		 */
		public function load_plugin_textdomain()
		{
			load_plugin_textdomain( 'weather-atlas', FALSE, dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/' );
		}
		
	}
