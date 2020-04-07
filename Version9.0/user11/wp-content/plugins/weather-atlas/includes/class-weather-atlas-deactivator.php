<?php
	
	/**
	 * Fired during plugin deactivation
	 *
	 * @link       https://www.weather-atlas.com
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 */
	
	/**
	 * Fired during plugin deactivation.
	 * This class defines all code necessary to run during the plugin's deactivation.
	 *
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 * @author     Yu Media Group d.o.o. <admin@weather-atlas.com>
	 */
	class Weather_Atlas_Deactivator
	{
		
		/**
		 * Short Description. (use period)
		 * Long Description.
		 */
		public static function deactivate()
		{
			// delete transients
			global $wpdb;
			$wpdb->query( "DELETE FROM `$wpdb->options` WHERE `option_name` LIKE '%weather_atlas_transient_%'" );
		}
		
	}
