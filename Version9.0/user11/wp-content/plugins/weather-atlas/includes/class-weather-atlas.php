<?php
	
	/**
	 * The file that defines the core plugin class
	 * A class definition that includes attributes and functions used across both the
	 * public-facing side of the site and the admin area.
	 *
	 * @link       https://www.weather-atlas.com
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 */
	
	/**
	 * The core plugin class.
	 * This is used to define internationalization, admin-specific hooks, and
	 * public-facing site hooks.
	 * Also maintains the unique identifier of this plugin as well as the current
	 * version of the plugin.
	 *
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 * @author     Yu Media Group d.o.o. <admin@weather-atlas.com>
	 */
	class Weather_Atlas extends WP_Widget
	{
		
		/**
		 * The loader that's responsible for maintaining and registering all hooks that power
		 * the plugin.
		 *
		 * @access   protected
		 * @var      Weather_Atlas_Loader $loader Maintains and registers all hooks for the plugin.
		 */
		protected $loader;
		
		/**
		 * The unique identifier of this plugin.
		 *
		 * @access   protected
		 * @var      string $plugin_name The string used to uniquely identify this plugin.
		 */
		protected $plugin_name;
		
		/**
		 * The current version of the plugin.
		 *
		 * @access   protected
		 * @var      string $version The current version of the plugin.
		 */
		protected $version;
		
		/**
		 * Define the core functionality of the plugin.
		 * Set the plugin name and the plugin version that can be used throughout the plugin.
		 * Load the dependencies, define the locale, and set the hooks for the admin area and
		 * the public-facing side of the site.
		 */
		public function __construct()
		{
			$this->plugin_name = 'weather-atlas';
			$this->version     = '1.2.1';
			
			$widget_ops = array (
				'description' => __( 'Display current conditions and weather forecast on your website.', 'weather-atlas' )
			);
			
			// Instantiate the parent object
			parent::__construct( FALSE, 'Weather Atlas Widget', $widget_ops );
			
			$this->load_dependencies();
			$this->set_locale();
			$this->define_admin_hooks();
			$this->define_public_hooks();
		}
		
		/**
		 * Register the widget on widgets_init
		 *
		 * @return void
		 */
		static function register_widget()
		{
			register_widget( __CLASS__ );
		}
		
		/*--------------------------------------------------*/
		/* Widget API Functions
		/*--------------------------------------------------*/
		
		/**
		 * Outputs the content of the widget.
		 *
		 * @param array args  The array of form elements
		 * @param array instance The current instance of the widget
		 */
		public function widget( $args, $instance )
		{
			extract( $args );
			$city_selector = isset( $instance[ 'city_selector' ] ) ? $instance[ 'city_selector' ] : 2372139;
			if ( ! empty ( $_COOKIE[ 'city_selector' ] ) )
			{
				$city_selector = $_COOKIE[ 'city_selector' ];
			}
			
			$unit_c_f         = ! empty( $instance[ 'unit_c_f' ] ) ? $instance[ 'unit_c_f' ] : 'f';
			$layout           = ! empty( $instance[ 'layout' ] ) ? $instance[ 'layout' ] : 'vertical';
			$font_size        = ! empty( $instance[ 'font_size' ] ) ? $instance[ 'font_size' ] : FALSE;
			$background_color = ! empty( $instance[ 'background_color' ] ) ? $instance[ 'background_color' ] : FALSE;
			$text_color       = ! empty( $instance[ 'text_color' ] ) ? $instance[ 'text_color' ] : FALSE;
			$style            = ! empty( $instance[ 'style' ] ) ? $instance[ 'style' ] : FALSE;
			$heading          = ! empty( $instance[ 'heading' ] ) ? $instance[ 'heading' ] : FALSE;
			$header           = ! empty( $instance[ 'header' ] ) ? $instance[ 'header' ] : FALSE;
			$sunrise_sunset   = isset( $instance[ 'sunrise_sunset' ] ) ? $instance[ 'sunrise_sunset' ] : 1;
			$current          = isset( $instance[ 'current' ] ) ? $instance[ 'current' ] : 1;
			$hourly           = isset( $instance[ 'hourly' ] ) ? $instance[ 'hourly' ] : 0;
			$daily            = isset( $instance[ 'daily' ] ) ? $instance[ 'daily' ] : 3;
			// $detailed_forecast = isset( $instance[ 'detailed_forecast' ] ) ? $instance[ 'detailed_forecast' ] : 1;
			$is_shortcode = 0;
			
			echo $before_widget;
			echo $before_title;
			if ( ! empty ( $heading ) )
			{
				echo apply_filters( 'widget_title', $heading );
			}
			echo $after_title;
			
			echo weather_atlas_widget( array (
				                           'city_selector'    => $city_selector,
				                           'unit_c_f'         => $unit_c_f,
				                           'layout'           => $layout,
				                           'font_size'        => $font_size,
				                           'background_color' => $background_color,
				                           'text_color'       => $text_color,
				                           'style'            => $style,
				                           'header'           => $header,
				                           'sunrise_sunset'   => $sunrise_sunset,
				                           'current'          => $current,
				                           'hourly'           => $hourly,
				                           'daily'            => $daily,
				                           // 'detailed_forecast' => $detailed_forecast,
				                           'is_shortcode'     => $is_shortcode
			                           ) );
			
			echo $after_widget;
		}
		
		/**
		 * Processes the widget's options to be saved.
		 *
		 * @param array new_instance The new instance of values to be generated via the update.
		 * @param array old_instance The previous instance of values before the update.
		 */
		public function update( $new_instance, $old_instance )
		{
			$instance                       = $old_instance;
			$instance[ 'city_name' ]        = strip_tags( $new_instance[ 'city_name' ] );
			$instance[ 'city_selector' ]    = strip_tags( $new_instance[ 'city_selector' ] );
			$instance[ 'unit_c_f' ]         = strip_tags( $new_instance[ 'unit_c_f' ] );
			$instance[ 'language' ]         = strip_tags( $new_instance[ 'language' ] );
			$instance[ 'layout' ]           = strip_tags( $new_instance[ 'layout' ] );
			$instance[ 'font_size' ]        = strip_tags( $new_instance[ 'font_size' ] );
			$instance[ 'background_color' ] = strip_tags( $new_instance[ 'background_color' ] );
			$instance[ 'text_color' ]       = strip_tags( $new_instance[ 'text_color' ] );
			$instance[ 'style' ]            = strip_tags( $new_instance[ 'style' ] );
			$instance[ 'heading' ]          = strip_tags( $new_instance[ 'heading' ] );
			$instance[ 'header' ]           = strip_tags( $new_instance[ 'header' ] );
			$instance[ 'sunrise_sunset' ]   = strip_tags( $new_instance[ 'sunrise_sunset' ] );
			$instance[ 'current' ]          = strip_tags( $new_instance[ 'current' ] );
			$instance[ 'hourly' ]           = strip_tags( $new_instance[ 'hourly' ] );
			$instance[ 'daily' ]            = strip_tags( $new_instance[ 'daily' ] );
			
			// $instance[ 'detailed_forecast' ] = strip_tags( $new_instance[ 'detailed_forecast' ] );
			
			return $instance;
		}
		
		/**
		 * Generates the administration form for the widget.
		 *
		 * @param array instance The array of keys and values for the widget.
		 */
		
		public function form( $instance )
		{
			$get_locale_root_array = explode( "_", get_locale() );
			$get_locale_root       = $get_locale_root_array[ 0 ];
			if ( $get_locale_root == 'de' )
			{
				$language_root_wp = 'de';
			}
			elseif ( $get_locale_root == 'en' )
			{
				$language_root_wp = 'en';
			}
			elseif ( $get_locale_root == 'es' )
			{
				$language_root_wp = 'es';
			}
			elseif ( $get_locale_root == 'ru' )
			{
				$language_root_wp = 'ru';
			}
			elseif ( $get_locale_root == 'zh' )
			{
				$language_root_wp = 'zh';
			}
			else
			{
				$language_root_wp = 'en';
			}
			
			$city_name        = ! empty( $instance[ 'city_name' ] ) ? $instance[ 'city_name' ] : 'New York ~ New York, USA (2372139)';
			$city_selector    = isset( $instance[ 'city_selector' ] ) ? $instance[ 'city_selector' ] : 2372139;
			$unit_c_f         = ! empty( $instance[ 'unit_c_f' ] ) ? $instance[ 'unit_c_f' ] : 'f';
			$layout           = ! empty( $instance[ 'layout' ] ) ? $instance[ 'layout' ] : 'vertical';
			$font_size        = ! empty( $instance[ 'font_size' ] ) ? $instance[ 'font_size' ] : FALSE;
			$background_color = ! empty( $instance[ 'background_color' ] ) ? $instance[ 'background_color' ] : FALSE;
			$text_color       = ! empty( $instance[ 'text_color' ] ) ? $instance[ 'text_color' ] : FALSE;
			$style            = ! empty( $instance[ 'style' ] ) ? $instance[ 'style' ] : FALSE;
			$heading          = ! empty( $instance[ 'heading' ] ) ? $instance[ 'heading' ] : FALSE;
			$header           = ! empty( $instance[ 'header' ] ) ? $instance[ 'header' ] : FALSE;
			$sunrise_sunset   = isset( $instance[ 'sunrise_sunset' ] ) ? $instance[ 'sunrise_sunset' ] : 1;
			$current          = isset( $instance[ 'current' ] ) ? $instance[ 'current' ] : 1;
			$hourly           = isset( $instance[ 'hourly' ] ) ? $instance[ 'hourly' ] : 0;
			$daily            = isset( $instance[ 'daily' ] ) ? $instance[ 'daily' ] : 3;
			// $detailed_forecast = isset( $instance[ 'detailed_forecast' ] ) ? $instance[ 'detailed_forecast' ] : 0;
			
			echo "<script>/*<![CDATA[*/var weather_atlas_language = '$language_root_wp';/*]]>*/</script>";
			
			echo "<h3 style='margin:1.5em 0 0 0'>";
			echo __( 'Location', 'weather-atlas' );
			echo "</h3>";
			
			echo "<p class='autocomplete'>";
			echo "<label for='" . $this->get_field_id( 'city_name' ) . "'>";
			echo __( 'City', 'weather-atlas' );
			echo "</label>";
			echo "<input class='widefat city_name' id='" . $this->get_field_id( 'city_name' ) . "' name='" . $this->get_field_name( 'city_name' ) . "' type='text' value='" . $city_name . "'>";
			echo "<small>";
			echo __( 'type and select location from drop-down', 'weather-atlas' );
			echo "</small>";
			echo "</p>";
			
			echo "<input class='city_selector' id='" . $this->get_field_id( 'city_selector' ) . "' name='" . $this->get_field_name( 'city_selector' ) . "' type='hidden' value='" . $city_selector . "'>";
			echo "<div class='city_selector_shortcode' id='" . $this->get_field_id( 'city_selector' ) . "_shortcode' name='" . $this->get_field_name( 'city_selector' ) . "_shortcode'>[shortcode-weather-atlas city_selector=$city_selector]</div>";
			
			echo "<small>";
			echo "<a href='#' class='city_selector_shortcode_toggle_link'>";
			echo __( 'shortcode - all options', 'weather-atlas' );
			echo "</a>";
			echo "</small>";
			
			echo "<div class='city_selector_shortcode_toggle_div' style='padding:10px;background:#fafafa;display:none'>";
			echo "<i>city_selector=</i>";
			echo "<br />";
			echo __( 'required', 'weather-atlas' );
			
			echo "<hr />";
			echo "<i>unit_c_f=\"\"</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": \"f\"";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": \"f\" / \"c\"";
			
			echo "<hr />";
			echo "<i>language=\"\"</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": \"en\"";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": \"de\" / \"en\" / \"es\" / \"ru\" / \"zh\"";
			
			echo "<hr />";
			echo "<i>layout=\"\"</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": \"vertical\"";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": \"vertical\" / \"horizontal\"";
			
			echo "<hr />";
			echo "<i>font_size=\"\"</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": \"\"";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": \"16px\" / \"12pt\" / \"1.2em\" / \"1rem\" / \"90%\" etc.";
			
			echo "<hr />";
			echo "<i>background_color=\"\"</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": \"\"";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": \"#8224e3\" / \"rgba(130,36,227,0.9)\" etc.";
			
			echo "<hr />";
			echo "<i>text_color=\"\"</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": \"\"";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": \"#fff\" / \"#fafafa\" etc.";
			
			echo "<hr />";
			echo "<i>style=\"\"</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": \"\"";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": \"float:right;width:200px\" etc.";
			
			echo "<hr />";
			echo "<i>header=\"\"</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": \"\"";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": \"my title...\" etc.";
			
			echo "<hr />";
			echo "<i>sunrise_sunset=</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": 1";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": 0 / 1";
			
			echo "<hr />";
			echo "<i>current=</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": 1";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": 0 / 1";
			
			echo "<hr />";
			echo "<i>hourly=</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": 0";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": 0 / 1 / 2 / 3 / 4 / 5";
			
			echo "<hr />";
			echo "<i>daily=</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": 3";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": 0 / 1 / 2 / 3 / 4 / 5";
			
			/*
			echo "<hr />";
			echo "<i>detailed_forecast=</i>";
			echo "<br />";
			echo __( 'default', 'weather-atlas' ) . ": 1";
			echo "<br />";
			echo __( 'options', 'weather-atlas' ) . ": 0 / 1";
			*/
			
			echo "<hr />";
			echo "<br />";
			echo __( 'Example:', 'weather-atlas' );
			echo "<br /><br />";
			echo "<i>[shortcode-weather-atlas city_selector=2372139 layout=\"horizontal\" background_color=\"#8224e3\" daily=5]</i>";
			echo "<br /><br />";
			echo __( '(excluded options load default values)', 'weather-atlas' );
			echo "</div>";
			
			echo "<h3 style='margin:3em 0 0 0'>";
			echo __( 'Settings', 'weather-atlas' );
			echo "</h3>";
			
			echo "<p>";
			echo "<label for='" . $this->get_field_id( 'unit_c_f' ) . "'>";
			echo __( 'Units', 'weather-atlas' );
			echo "</label>";
			echo weather_atlas_admin_render_select( $this->get_field_id( 'unit_c_f' ), $this->get_field_name( 'unit_c_f' ), array (
				'c' => '°C - Celsius',
				'f' => '°F - Fahrenheit'
			), $unit_c_f );
			echo "</p>";
			
			echo "<h3 style='margin:3em 0 0 0'>";
			echo __( 'Language', 'weather-atlas' );
			echo "</h3>";
			echo "<p>";
			echo __( 'The widget\'s language is automatically chosen based on your Settings / General / Site Language settings.', 'weather-atlas' );
			echo "<br />";
			echo __( 'If a local translation does not exist, fallback language is English.', 'weather-atlas' );
			echo " <a href='https://wordpress.org/plugins/weather-atlas/#languages' target='_blank'>";
			echo __( 'How to translate the widget to my language?', 'weather-atlas' );
			echo "</a>";
			
			echo "</p>";
			
			echo "<h3 style='margin:3em 0 0 0'>";
			echo __( 'Appearance', 'weather-atlas' );
			echo "</h3>";
			
			echo "<p>";
			echo "<label for='" . $this->get_field_id( 'layout' ) . "'>";
			echo __( 'Layout', 'weather-atlas' );
			echo "</label>";
			echo weather_atlas_admin_render_select( $this->get_field_id( 'layout' ), $this->get_field_name( 'layout' ), array (
				'vertical'   => 'vertical',
				'horizontal' => 'horizontal'
			), $layout );
			echo "<small>";
			echo __( 'vertical layout - recommended for placement in sidebar', 'weather-atlas' );
			echo "<br />";
			echo __( 'horizontal layout - recommended for placement in articles', 'weather-atlas' );
			echo "</small>";
			echo "</p>";
			
			echo "<p>";
			echo "<label for='" . $this->get_field_id( 'font_size' ) . "'>";
			echo __( 'Font size', 'weather-atlas' );
			echo " " . __( '(optional)', 'weather-atlas' );
			echo "</label>";
			echo "<input class='widefat' id='" . $this->get_field_id( 'font_size' ) . "' name='" . $this->get_field_name( 'font_size' ) . "' type='text' value='" . $font_size . "'>";
			echo "<small>";
			echo __( 'leave blank - widget\'s font size adjusts to web site\'s font size', 'weather-atlas' );
			echo "<br />";
			echo __( '16px or 12pt or 1.2em or 1rem or 90% etc. - specify widget\'s font size', 'weather-atlas' );
			echo "</small>";
			echo "</p>";
			
			echo "<p>";
			echo "<label for='" . $this->get_field_id( 'background_color' ) . "'>";
			echo __( 'Background Color', 'weather-atlas' );
			echo " " . __( '(optional)', 'weather-atlas' );
			echo "</label><br />";
			echo "<input class='widefat color_picker' data-alpha='TRUE' id='" . $this->get_field_name( 'background_color' ) . "' name='" . $this->get_field_name( 'background_color' ) . "' type='colorpicker' value='$background_color'>";
			echo "<br />";
			echo "<small>";
			echo __( 'leave blank - widget\'s background adapt to current temperature', 'weather-atlas' );
			echo "<br />";
			echo __( 'choose color and transparency - background color is fixed', 'weather-atlas' );
			echo "</small>";
			echo "</p>";
			
			echo "<p>";
			echo "<label for='" . $this->get_field_id( 'text_color' ) . "'>";
			echo __( 'Text Color', 'weather-atlas' );
			echo " " . __( '(optional)', 'weather-atlas' );
			echo "</label><br />";
			echo "<input class='widefat color_picker' id='" . $this->get_field_id( 'text_color' ) . "' name='" . $this->get_field_name( 'text_color' ) . "' type='colorpicker' value='$text_color'>";
			echo "<br />";
			echo "<small>";
			echo __( 'leave blank - widget\'s font color adapt to current temperature', 'weather-atlas' );
			echo "<br />";
			echo __( 'choose color - font color is fixed', 'weather-atlas' );
			echo "</small>";
			echo "</p>";
			
			echo "<h3 style='margin:3em 0 0 0'>";
			echo __( 'Display', 'weather-atlas' );
			echo "</h3>";
			
			echo "<p>";
			echo "<label for='" . $this->get_field_id( 'heading' ) . "'>";
			echo __( 'Heading', 'weather-atlas' );
			echo " " . __( '(optional)', 'weather-atlas' );
			echo "</label>";
			echo "<input class='widefat' id='" . $this->get_field_id( 'heading' ) . "' name='" . $this->get_field_name( 'heading' ) . "' type='text' value='" . $heading . "'>";
			echo "<small>";
			echo __( 'leave blank - no heading above widget', 'weather-atlas' );
			echo "</small>";
			echo "</p>";
			
			echo "<p>";
			echo "<label for='" . $this->get_field_id( 'header' ) . "'>";
			echo __( 'Header', 'weather-atlas' );
			echo " " . __( '(optional)', 'weather-atlas' );
			echo "</label>";
			echo "<input class='widefat' id='" . $this->get_field_id( 'header' ) . "' name='" . $this->get_field_name( 'header' ) . "' type='text' value='" . $header . "'>";
			echo "<small>";
			echo __( 'leave blank - City name is in widget\'s header', 'weather-atlas' );
			echo "</small>";
			echo "</p>";
			
			echo "<h3 style='margin:3em 0 0 0'>";
			echo __( 'Current conditions', 'weather-atlas' );
			echo "</h3>";
			
			echo "<p>";
			echo "<input id='" . $this->get_field_id( 'sunrise_sunset' ) . "' name='" . $this->get_field_name( 'sunrise_sunset' ) . "' type='checkbox' value='1'";
			if ( $sunrise_sunset == 1 )
			{
				echo " checked='checked'";
			}
			echo ">";
			echo "<label for='" . $this->get_field_id( 'sunrise_sunset' ) . "'>";
			echo __( 'Show: sunrise / sunset time', 'weather-atlas' );
			echo "</label>";
			echo "</p>";
			
			echo "<p>";
			echo "<input id='" . $this->get_field_id( 'current' ) . "' name='" . $this->get_field_name( 'current' ) . "' type='checkbox' value='1'";
			if ( $current == 1 )
			{
				echo " checked='checked'";
			}
			echo ">";
			echo "<label for='" . $this->get_field_id( 'current' ) . "'>";
			echo __( 'Show: feels like / wind / humidity / pressure / uv index', 'weather-atlas' );
			echo "</label>";
			echo "<br />";
			echo "<small>";
			echo __( '(on mobile devices current condition details are hidden)', 'weather-atlas' );
			echo "</small>";
			echo "</p>";
			
			echo "<h3 style='margin:3em 0 0 0'>";
			echo __( 'Hourly forecast', 'weather-atlas' );
			echo "</h3>";
			
			echo "<p>";
			//			echo "<label for='" . $this->get_field_id( 'hourly' ) . "'>";
			//			echo __( 'Number of hours', 'weather-atlas' );
			//			echo "</label>";
			echo weather_atlas_admin_render_select( $this->get_field_id( 'hourly' ), $this->get_field_name( 'hourly' ), array (
				'0' => __( 'hide hourly forecast', 'weather-atlas' ),
				'1' => '1 ' . __( 'hour', 'weather-atlas' ),
				'2' => '2 ' . __( 'hours', 'weather-atlas' ),
				'3' => '3 ' . __( 'hours', 'weather-atlas' ),
				'4' => '4 ' . __( 'hours', 'weather-atlas' ),
				'5' => '5 ' . __( 'hours', 'weather-atlas' )
			), $hourly );
			echo "<small>";
			echo "3 - ";
			echo __( 'vertical layout recommended', 'weather-atlas' );
			echo "<br />";
			echo "5 - ";
			echo __( 'horizontal layout recommended', 'weather-atlas' );
			echo "<br />";
			echo __( '(on mobile devices more then 3 hours are hidden)', 'weather-atlas' );
			echo "</small>";
			echo "</p>";
			
			echo "<h3 style='margin:3em 0 0 0'>";
			echo __( 'Daily forecast', 'weather-atlas' );
			echo "</h3>";
			
			echo "<p>";
			//			echo "<label for='" . $this->get_field_id( 'daily' ) . "'>";
			//			echo __( 'Number of days', 'weather-atlas' );
			//			echo "</label>";
			echo weather_atlas_admin_render_select( $this->get_field_id( 'daily' ), $this->get_field_name( 'daily' ), array (
				'0' => __( 'hide daily forecast', 'weather-atlas' ),
				'1' => '1 ' . __( 'day', 'weather-atlas' ),
				'2' => '2 ' . __( 'days', 'weather-atlas' ),
				'3' => '3 ' . __( 'days', 'weather-atlas' ),
				'4' => '4 ' . __( 'days', 'weather-atlas' ),
				'5' => '5 ' . __( 'days', 'weather-atlas' )
			), $daily );
			echo "<small>";
			echo "3 - ";
			echo __( 'vertical layout recommended', 'weather-atlas' );
			echo "<br />";
			echo "5 - ";
			echo __( 'horizontal layout recommended', 'weather-atlas' );
			echo "<br />";
			echo __( '(on mobile devices more then 3 days are hidden)', 'weather-atlas' );
			echo "</small>";
			echo "</p>";
			
			/*
			echo "<h3 style='margin:3em 0 0 0'>";
			echo __( 'Detailed forecast', 'weather-atlas' );
			echo "</h3>";
			
			echo "<p>";
			echo "<input id='" . $this->get_field_id( 'detailed_forecast' ) . "' name='" . $this->get_field_name( 'detailed_forecast' ) . "' type='checkbox' value='1'";
			if ( $detailed_forecast == 1 )
			{
				echo " checked='checked'";
			}
			echo ">";
			echo "<label for='" . $this->get_field_id( 'detailed_forecast' ) . "'>";
			echo __( 'Detailed forecast', 'weather-atlas' );
			echo "</label>";
			echo "<br />";
			echo "<small>";
			echo __( 'checked', 'weather-atlas' );
			echo " <span style='color:#ff0000;font-weight:bold'>(";
			echo __( 'recommended', 'weather-atlas' );
			echo ")</span> - ";
			echo __( 'removes "<i>Weather from Weather Atlas</i>" & places link "<i>Detailed forecast</i>" for choosen location', 'weather-atlas' );
			echo "<br />";
			echo __( 'unchecked', 'weather-atlas' );
			echo " - ";
			echo __( 'shows "<i>Weather from Weather Atlas</i>" at the bottom of the widget', 'weather-atlas' );
			echo "</small>";
			echo "</p>";
			*/
			
			echo "<br /><br />";
			
			echo "<hr />";
			echo "<div style='text-align:center'>";
			echo "<a href='https://www.weather-atlas.com/plugins/' target='_blank' style='text-decoration:none'><span style='color:#ff0000'>&#9733;</span> <b>" . __( 'Upgrade to Premium version', 'weather-atlas' ) . " &raquo;</b></a>";
			echo "</div>";
			echo "<hr />";
			
			echo "<br />";
		}
		
		/**
		 * Load the required dependencies for this plugin.
		 * Include the following files that make up the plugin:
		 * - Weather_Atlas_Loader. Orchestrates the hooks of the plugin.
		 * - Weather_Atlas_i18n. Defines internationalization functionality.
		 * - Weather_Atlas_Admin. Defines all hooks for the admin area.
		 * - Weather_Atlas_Public. Defines all hooks for the public side of the site.
		 * Create an instance of the loader which will be used to register the hooks
		 * with WordPress.
		 *
		 * @access   private
		 */
		private function load_dependencies()
		{
			/**
			 * The class responsible for orchestrating the actions and filters of the
			 * core plugin.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-weather-atlas-loader.php';
			/**
			 * The class responsible for defining internationalization functionality
			 * of the plugin.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-weather-atlas-i18n.php';
			/**
			 * The class responsible for defining all actions that occur in the admin area.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-weather-atlas-admin.php';
			/**
			 * The class responsible for defining all actions that occur in the public-facing
			 * side of the site.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-weather-atlas-public.php';
			$this->loader = new Weather_Atlas_Loader();
		}
		
		/**
		 * Define the locale for this plugin for internationalization.
		 * Uses the Weather_Atlas_i18n class in order to set the domain and to register the hook
		 * with WordPress.
		 *
		 * @access   private
		 */
		private function set_locale()
		{
			$plugin_i18n = new Weather_Atlas_i18n();
			$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
		}
		
		/**
		 * Register all of the hooks related to the admin area functionality
		 * of the plugin.
		 *
		 * @access   private
		 */
		private function define_admin_hooks()
		{
			$plugin_admin = new Weather_Atlas_Admin( $this->get_plugin_name(), $this->get_version() );
			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		}
		
		/**
		 * Register all of the hooks related to the public-facing functionality
		 * of the plugin.
		 *
		 * @access   private
		 */
		private function define_public_hooks()
		{
			$plugin_public = new Weather_Atlas_Public( $this->get_plugin_name(), $this->get_version() );
			$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
			$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		}
		
		/**
		 * Run the loader to execute all of the hooks with WordPress.
		 */
		public function run()
		{
			$this->loader->run();
		}
		
		/**
		 * The name of the plugin used to uniquely identify it within the context of
		 * WordPress and to define internationalization functionality.
		 *
		 * @return    string    The name of the plugin.
		 */
		public function get_plugin_name()
		{
			return $this->plugin_name;
		}
		
		/**
		 * The reference to the class that orchestrates the hooks with the plugin.
		 *
		 * @return    Weather_Atlas_Loader    Orchestrates the hooks of the plugin.
		 */
		public function get_loader()
		{
			return $this->loader;
		}
		
		/**
		 * Retrieve the version number of the plugin.
		 *
		 * @return    string    The version number of the plugin.
		 */
		public function get_version()
		{
			return $this->version;
		}
	}
	
	add_action( 'widgets_init', array (
		'Weather_Atlas',
		'register_widget'
	) );
	
	add_shortcode( 'shortcode-weather-atlas', 'function_shortcode_weather_atlas_widget' );
	
	add_filter( 'plugin_action_links_weather-atlas/weather-atlas.php', array (
		'Weather_Atlas_Admin',
		'function_weather_atlas_plugin_action_links'
	) ); // Where $priority is default 10, $accepted_args is default 1.
	
	/*
	add_filter( 'filter_bad_words', array (
		'Weather_Atlas_Public',
		'function_filter_bad_words'
	) ); // Where $priority is default 10, $accepted_args is default 1.
	*/
	
	function weather_atlas_widget( $attributes )
	{
		$get_locale_root_array = explode( "_", get_locale() );
		$get_locale_root       = $get_locale_root_array[ 0 ];
		if ( $get_locale_root == 'de' )
		{
			$language_root_wp = 'de';
		}
		elseif ( $get_locale_root == 'en' )
		{
			$language_root_wp = 'en';
		}
		elseif ( $get_locale_root == 'es' )
		{
			$language_root_wp = 'es';
		}
		elseif ( $get_locale_root == 'ru' )
		{
			$language_root_wp = 'ru';
		}
		elseif ( $get_locale_root == 'zh' )
		{
			$language_root_wp = 'zh';
		}
		else
		{
			$language_root_wp = 'en';
		}
		
		$city_selector    = isset( $attributes[ 'city_selector' ] ) ? $attributes[ 'city_selector' ] : 2372139;
		$country_selector = isset( $attributes[ 'country_selector' ] ) ? $attributes[ 'country_selector' ] : 250;
		$http_root        = isset( $attributes[ 'http_root' ] ) ? $attributes[ 'http_root' ] : "https://www.weather-us.com";
		$unit_c_f         = ! empty( $attributes[ 'unit_c_f' ] ) ? $attributes[ 'unit_c_f' ] : 'f';
		if ( $unit_c_f == 'c' )
		{
			$def_units_temperature   = '°C';
			$unit_kph_mph            = 'kph';
			$def_units_windspeed     = 'km/h';
			$unit_mm_in              = 'mm';
			$def_units_precipitation = 'mm';
			$unit_mb_in              = 'mb';
			$def_units_pressure      = 'mbar';
			$unit_km_mi              = 'km';
			$def_units_distance      = 'km';
		}
		else
		{
			$def_units_temperature   = '°F';
			$unit_kph_mph            = 'mph';
			$def_units_windspeed     = 'mph';
			$unit_mm_in              = 'in';
			$def_units_precipitation = '"';
			$unit_mb_in              = 'in';
			$def_units_pressure      = '"Hg';
			$unit_km_mi              = 'mi';
			$def_units_distance      = 'mi';
		}
		$def_units_degree  = '°';
		$def_units_percent = '%';
		$layout            = ! empty( $attributes[ 'layout' ] ) ? $attributes[ 'layout' ] : 'vertical';
		$header            = ! empty( $attributes[ 'header' ] ) ? $attributes[ 'header' ] : FALSE;
		$sunrise_sunset    = isset( $attributes[ 'sunrise_sunset' ] ) ? $attributes[ 'sunrise_sunset' ] : 1;
		$current           = isset( $attributes[ 'current' ] ) ? $attributes[ 'current' ] : 1;
		$hourly            = isset( $attributes[ 'hourly' ] ) ? $attributes[ 'hourly' ] : 0;
		$daily             = isset( $attributes[ 'daily' ] ) ? $attributes[ 'daily' ] : 3;
		// $detailed_forecast = isset( $attributes[ 'detailed_forecast' ] ) ? $attributes[ 'detailed_forecast' ] : 1;
		$is_shortcode = isset( $attributes[ 'is_shortcode' ] ) ? $attributes[ 'is_shortcode' ] : 1;
		
		$weather_atlas_data = weather_atlas_data( $city_selector );
		
		$return = '';
		
		// json2array
		$weather_atlas_data_array = json_decode( $weather_atlas_data, TRUE );
		if ( ( ! empty ( $weather_atlas_data ) ) AND ( is_array( $weather_atlas_data_array ) ) )
		{
			if ( array_key_exists( "city", $weather_atlas_data_array ) )
			{
				$city_selector                         = array_key_exists( 'city_selector', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'city_selector' ] : FALSE;
				$country_selector                      = array_key_exists( 'country_selector', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'country_selector' ] : FALSE;
				$http_root                             = array_key_exists( 'http_root', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'http_root' ] : FALSE;
				${'country_name_' . $language_root_wp} = array_key_exists( 'country_name_' . $language_root_wp, $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'country_name_' . $language_root_wp ] : FALSE;
				if ( $country_selector == 250 )
				{
					${'country_name_' . $language_root_wp} = strtok( ${'country_name_' . $language_root_wp}, "," );
				}
				${'country_name_rewrite_' . $language_root_wp} = array_key_exists( 'country_name_rewrite_' . $language_root_wp, $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'country_name_rewrite_' . $language_root_wp ] : FALSE;
				${'city_name_' . $language_root_wp}            = array_key_exists( 'city_name_' . $language_root_wp, $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'city_name_' . $language_root_wp ] : FALSE;
				${'city_name_rewrite_' . $language_root_wp}    = array_key_exists( 'city_name_rewrite_' . $language_root_wp, $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'city_name_rewrite_' . $language_root_wp ] : FALSE;
				$time_of_sunrise                               = array_key_exists( 'time_of_sunrise', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'time_of_sunrise' ] : FALSE;
				$time_of_sunset                                = array_key_exists( 'time_of_sunset', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'time_of_sunset' ] : FALSE;
				$timezone_abbr                                 = array_key_exists( 'timezone_abbr', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'timezone_abbr' ] : FALSE;
			}
			
			if ( array_key_exists( "current", $weather_atlas_data_array ) )
			{
				${'current_temp_' . $unit_c_f}           = array_key_exists( 'current_temp_' . $unit_c_f, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_temp_' . $unit_c_f ] : FALSE;
				${'current_temp_feelslike_' . $unit_c_f} = array_key_exists( 'current_temp_feelslike_' . $unit_c_f, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_temp_feelslike_' . $unit_c_f ] : FALSE;
				$current_icon                            = array_key_exists( 'current_icon', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_icon' ] : FALSE;
				$current_text_en                         = array_key_exists( 'current_text_en', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_text_en' ] : FALSE;
				${'current_wind_' . $unit_kph_mph}       = array_key_exists( 'current_wind_' . $unit_kph_mph, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_wind_' . $unit_kph_mph ] : FALSE;
				$current_wind_dir                        = array_key_exists( 'current_wind_dir', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_wind_dir' ] : FALSE;
				$current_wind_deg                        = array_key_exists( 'current_wind_deg', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_wind_deg' ] : FALSE;
				$current_humidity_relative               = array_key_exists( 'current_humidity_relative', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_humidity_relative' ] : FALSE;
				// ${'current_dew_point_' . $unit_c_f}         = array_key_exists( 'current_dew_point_' . $unit_c_f, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_dew_point_' . $unit_c_f ] : FALSE;
				${'current_pressure_' . $unit_mb_in} = array_key_exists( 'current_pressure_' . $unit_mb_in, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_pressure_' . $unit_mb_in ] : FALSE;
				// ${'current_precip_' . $unit_mm_in}         = array_key_exists( 'current_precip_' . $unit_mm_in, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_precip_' . $unit_mm_in ] : FALSE;
				// ${'current_visibility_' . $unit_km_mi}         = array_key_exists( 'current_visibility_' . $unit_km_mi, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_visibility_' . $unit_km_mi ] : FALSE;
				$current_uv_index = array_key_exists( 'current_uv_index', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_uv_index' ] : FALSE;
			}
			
			$font_size = ! empty( $attributes[ 'font_size' ] ) ? $attributes[ 'font_size' ] : FALSE;
			
			if ( ( array_key_exists( "current", $weather_atlas_data_array ) ) AND ( array_key_exists( "current_temp_c", $weather_atlas_data_array[ 'current' ] ) ) )
			{
				list( $background_color, $text_color ) = weather_atlas_temperature_color( $weather_atlas_data_array[ 'current' ][ 'current_temp_c' ] );
				
				$background_color = ! empty( $attributes[ 'background_color' ] ) ? $attributes[ 'background_color' ] : $background_color;
				$text_color       = ! empty( $attributes[ 'text_color' ] ) ? $attributes[ 'text_color' ] : $text_color;
			}
			else
			{
				$background_color = '#fafafa';
				$text_color       = '#333';
			}
			$border_color = weather_atlas_adjust_brightness( $background_color, - 17 );
			$style        = ! empty( $attributes[ 'style' ] ) ? $attributes[ 'style' ] : FALSE;
			
			$return .= "<div class='weather-atlas-wrapper' style='";
			if ( ! empty ( $font_size ) )
			{
				$return .= "font-size:$font_size;";
			}
			$return .= "background:$background_color;border:$border_color;color:$text_color;";
			if ( ! empty ( $style ) )
			{
				$return .= "$style";
			}
			$return .= "'>";
			
			$return .= "<div class='weather-atlas-header' style='border-bottom:$border_color'>";
			
			if ( empty ( $is_shortcode ) )
			{
				$return .= "<div class='weather-atlas-header-title-wrapper'>";
				$return .= "<div class='weather-atlas-header-title'>";
			}
			
			if ( ( ! empty( $header ) ) AND ( empty ( $_COOKIE[ 'city_selector' ] ) ) )
			{
				$header_title = $header;
			}
			else
			{
				$header_title = ${'city_name_' . $language_root_wp};
			}
			/*
				$header_title = apply_filters( 'filter_bad_words', $header_title );
			*/
			$return .= $header_title;
			
			if ( empty ( $is_shortcode ) )
			{
				$return .= "</div>";
				
				$return .= "<div class='city_selector_toggle_div autocomplete' style='display:none;'>";
				
				$return .= "<script>/*<![CDATA[*/var weather_atlas_language = '$language_root_wp';/*]]>*/</script>";
				$return .= "<input class='city_name' id='city_name' name='city_name' type='text' value='' placeholder='";
				$return .= __( 'type and select location from drop-down', 'weather-atlas' );
				$return .= "'>";
				$return .= "</div>";
				
				$return .= "</div>";
				
				$return .= "<div class='city_selector_toggle'>";
				$return .= "<a href='#' class='city_selector_toggle_link' style='color:$text_color' title='";
				$return .= __( 'Location', 'weather-atlas' );
				$return .= "'>";
				$return .= "&#9673;";
				$return .= "</a>";
				$return .= "</div>";
			}
			
			$return .= "</div>";
			
			$return .= "<div class='weather-atlas-body'>";
			
			if ( empty( $current ) )
			{
				$layout = 'vertical';
			}
			if ( $layout == 'horizontal' )
			{
				$return .= "<div class='current_horizontal'>";
			}
			
			$return .= "<div class='current_temp'>";
			if ( ! empty( $current_icon ) )
			{
				$return .= "<i class='wi wi-fw wi-weather-$current_icon'></i>";
			}
			if ( ( isset( ${'current_temp_' . $unit_c_f} ) ) AND ( is_numeric( ${'current_temp_' . $unit_c_f} ) ) )
			{
				$return .= "<span class='temp'>" . ${'current_temp_' . $unit_c_f} . "$def_units_degree</span>";
			}
			if ( ! empty( $current_text_en ) )
			{
				$return .= "<div class='current_text'>";
				$return .= __( $current_text_en, 'weather-atlas' );
				$return .= "</div>";
			}
			if ( ( ! empty ( $sunrise_sunset ) ) AND ( ! empty ( $time_of_sunrise ) ) AND ( ! empty ( $time_of_sunset ) ) AND ( ! empty ( $timezone_abbr ) ) )
			{
				$return .= "<div class='sunrise_sunset'>" . $time_of_sunrise . "<i class='wi wi-fw wi-weather-32'></i>" . $time_of_sunset . " " . $timezone_abbr . "</div>";
			}
			$return .= "</div>";
			
			if ( ( ! empty ( $current ) ) AND ( array_key_exists( "current", $weather_atlas_data_array ) ) )
			{
				$return .= "<span class='current_text_2'>";
				if ( is_numeric( ${'current_temp_feelslike_' . $unit_c_f} ) )
				{
					$return .= __( 'Feels like', 'weather-atlas' ) . ": ";
					$return .= ${'current_temp_feelslike_' . $unit_c_f} . "<small>" . $def_units_temperature . "</small><br />";
				}
				if ( is_numeric( ${'current_wind_' . $unit_kph_mph} ) )
				{
					$return .= __( 'Wind', 'weather-atlas' ) . ": ";
					$return .= ${'current_wind_' . $unit_kph_mph} . "<small>" . $def_units_windspeed . "</small>";
					
					if ( $language_root_wp == 'en' )
					{
						$return .= " " . $current_wind_dir;
					}
					else
					{
						$return .= " " . $current_wind_deg . "<small>" . $def_units_degree . "</small>";
					}
					$return .= "<br />";
				}
				if ( is_numeric( $current_humidity_relative ) )
				{
					$return .= __( 'Humidity', 'weather-atlas' ) . ": ";
					$return .= $current_humidity_relative . "<small>" . $def_units_percent . "</small><br />";
				}
				if ( is_numeric( ${'current_pressure_' . $unit_mb_in} ) )
				{
					$return .= __( 'Pressure', 'weather-atlas' ) . ": ";
					$return .= ${'current_pressure_' . $unit_mb_in} . "<small>" . $def_units_pressure . "</small><br />";
				}
				if ( is_numeric( $current_uv_index ) )
				{
					$return .= __( 'UV index', 'weather-atlas' ) . ": ";
					$return .= $current_uv_index;
				}
				$return .= "</span>";
			}
			
			if ( $layout == 'horizontal' )
			{
				$return .= "</div>";
			}
			
			if ( ( ! empty ( $hourly ) ) AND ( array_key_exists( "hourly", $weather_atlas_data_array ) ) )
			{
				$return .= "<div class='hourly hours' style='border-bottom:$border_color'>";
				
				for ( $ii = 1; $ii <= $hourly; $ii ++ )
				{
					if ( array_key_exists( $ii, $weather_atlas_data_array[ 'hourly' ] ) )
					{
						$return .= "<span class='extended_hour extended_hour_$ii'>";
						
						$hour = array_key_exists( 'hour', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour' ] : FALSE;
						
						if ( is_numeric( ${'hour'} ) )
						{
							$return .= $hour;
							$return .= "<small>";
							$return .= __( 'h', 'weather-atlas' );
							$return .= "</small>";
						}
						
						$return .= "</span>";
					}
				}
				$return .= "</div>";
				
				$return .= "<div class='hourly'>";
				for ( $ii = 1; $ii <= $hourly; $ii ++ )
				{
					if ( array_key_exists( $ii, $weather_atlas_data_array[ 'hourly' ] ) )
					{
						${'hour_temp_' . $unit_c_f} = array_key_exists( 'hour_temp_' . $unit_c_f, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_temp_' . $unit_c_f ] : FALSE;
						// ${'hour_temp_feelslike_' . $unit_c_f} = array_key_exists( 'hour_temp_feelslike_' . $unit_c_f, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_temp_feelslike_' . $unit_c_f ] : FALSE;
						$hour_icon    = array_key_exists( 'hour_icon', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_icon' ] : FALSE;
						$hour_text_en = array_key_exists( 'hour_text_en', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_text_en' ] : FALSE;
						// ${'hour_wind_' . $unit_kph_mph}     = array_key_exists( 'hour_wind_' . $unit_kph_mph, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_wind_' . $unit_kph_mph ] : FALSE;
						// $hour_wind_dir                      = array_key_exists( 'hour_wind_dir', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_wind_dir' ] : FALSE;
						// $hour_wind_deg                      = array_key_exists( 'hour_wind_deg', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_wind_deg' ] : FALSE;
						// $hour_humidity_relative             = array_key_exists( 'hour_humidity_relative', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_humidity_relative' ] : FALSE;
						// ${'hour_dew_point_' . $unit_c_f}    = array_key_exists( 'hour_dew_point_' . $unit_c_f, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_dew_point_' . $unit_c_f ] : FALSE;
						// ${'hour_pressure_' . $unit_mb_in}   = array_key_exists( 'hour_pressure_' . $unit_mb_in, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_pressure_' . $unit_mb_in ] : FALSE;
						// ${'hour_precip_' . $unit_mm_in}     = array_key_exists( 'hour_precip_' . $unit_mm_in, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_precip_' . $unit_mm_in ] : FALSE;
						// $hour_precip_probability            = array_key_exists( 'hour_precip_probability', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_precip_probability' ] : FALSE;
						// ${'hour_visibility_' . $unit_km_mi} = array_key_exists( 'hour_visibility_' . $unit_km_mi, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_visibility_' . $unit_km_mi ] : FALSE;
						// $hour_uv_index                      = array_key_exists( 'hour_uv_index', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_uv_index' ] : FALSE;
						
						$return .= "<span class='extended_hour extended_hour_$ii'";
						if ( ! empty( $hour_text_en ) )
						{
							$return .= " title='";
							$return .= __( $hour_text_en, 'weather-atlas' );
							$return .= "'";
						}
						$return .= ">";
						if ( is_numeric( ${'hour_temp_' . $unit_c_f} ) )
						{
							$return .= ${'hour_temp_' . $unit_c_f} . "<small>" . $def_units_temperature . "</small>";
						}
						if ( ! empty( $hour_icon ) )
						{
							$return .= "<br /><i class='wi wi-fw wi-weather-$hour_icon'></i>";
						}
						$return .= "</span>";
					}
				}
				
				$return .= "</div>";
			}
			
			if ( ( ! empty ( $daily ) ) AND ( array_key_exists( "daily", $weather_atlas_data_array ) ) )
			{
				$return .= "<div class='daily days' style='border-bottom:$border_color'>";
				for ( $ii = 1; $ii <= $daily; $ii ++ )
				{
					if ( array_key_exists( $ii, $weather_atlas_data_array[ 'daily' ] ) )
					{
						$return .= "<span class='extended_day extended_day_$ii'>";
						
						$day_name_en_short = array_key_exists( 'day_name_en_short', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_name_en_short' ] : FALSE;
						if ( ! empty( $day_name_en_short ) )
						{
							$return .= __( $day_name_en_short, 'weather-atlas' );
						}
						
						$return .= "</span>";
					}
				}
				$return .= "</div>";
				
				$return .= "<div class='daily'>";
				for ( $ii = 1; $ii <= $daily; $ii ++ )
				{
					if ( array_key_exists( $ii, $weather_atlas_data_array[ 'daily' ] ) )
					{
						${'day_temp_high_' . $unit_c_f} = array_key_exists( 'day_temp_high_' . $unit_c_f, $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_temp_high_' . $unit_c_f ] : FALSE;
						${'day_temp_low_' . $unit_c_f}  = array_key_exists( 'day_temp_low_' . $unit_c_f, $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_temp_low_' . $unit_c_f ] : FALSE;
						$day_icon                       = array_key_exists( 'day_icon', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_icon' ] : FALSE;
						$day_text_en                    = array_key_exists( 'day_text_en', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_text_en' ] : FALSE;
						
						// ${'day_wind_' . $unit_kph_mph} = array_key_exists( 'day_wind_' . $unit_kph_mph, $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_wind_' . $unit_kph_mph ] : FALSE;
						// $day_wind_dir                  = array_key_exists( 'day_wind_dir', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_wind_dir' ] : FALSE;
						// $day_wind_deg                  = array_key_exists( 'day_wind_deg', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_wind_deg' ] : FALSE;
						// $day_humidity_relative         = array_key_exists( 'day_humidity_relative', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_humidity_relative' ] : FALSE;
						// ${'day_precip_' . $unit_mm_in} = array_key_exists( 'day_precip_' . $unit_mm_in, $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_precip_' . $unit_mm_in ] : FALSE;
						// $day_precip_probability        = array_key_exists( 'day_precip_probability', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_precip_probability' ] : FALSE;
						// $day_uv_index                  = array_key_exists( 'day_uv_index', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_uv_index' ] : FALSE;
						
						$return .= "<span class='extended_day extended_day_$ii'";
						if ( ! empty( $day_text_en ) )
						{
							$return .= " title='";
							$return .= __( $day_text_en, 'weather-atlas' );
							$return .= "'";
						}
						$return .= ">";
						
						if ( is_numeric( ${'day_temp_high_' . $unit_c_f} ) )
						{
							if ( ${'day_temp_high_' . $unit_c_f} != '-99' )
							{
								$return .= ${'day_temp_high_' . $unit_c_f} . "/";
							}
							else
							{
								$return .= "min ";
							}
						}
						if ( is_numeric( ${'day_temp_low_' . $unit_c_f} ) )
						{
							$return .= ${'day_temp_low_' . $unit_c_f} . "<small>" . $def_units_temperature . "</small>";
						}
						if ( ! empty( $day_icon ) )
						{
							$return .= "<br /><i class='wi wi-fw wi-weather-$day_icon'></i>";
						}
						
						$return .= "</span>";
					}
				}
				$return .= "</div>";
			}
			
			$return .= "</div>";
			
			$return .= "<div class='weather-atlas-footer' style='border-top:$border_color'>";
			
			$return .= "<a href='$http_root/$language_root_wp";
			if ( ( ! empty ( ${'country_name_rewrite_' . $language_root_wp} ) AND ( ${'city_name_rewrite_' . $language_root_wp} ) ) )
			{
				$return .= "/" . ${'country_name_rewrite_' . $language_root_wp} . "/" . ${'city_name_rewrite_' . $language_root_wp};
			}
			if ( ( $country_selector == 250 ) AND ( $unit_c_f == 'c' ) )
			{
				$return .= "?units=c,mm,mb,km";
			}
			elseif ( ( $country_selector != 250 ) AND ( $unit_c_f == 'f' ) )
			{
				$return .= "?units=f,in,in,mi";
			}
			$return .= "' title='Weather Atlas - ";
			$return .= __( 'Weather forecast', 'weather-atlas' );
			$return .= " " . ${'city_name_' . $language_root_wp} . ", " . ${'country_name_' . $language_root_wp};
			$return .= "' style='color:$text_color;' target='_blank'>";
			
			/*
			if ( ( empty ( $detailed_forecast ) ) AND ( empty ( $_COOKIE[ 'city_selector' ] ) ) )
			{
				$return .= "Weather from Weather Atlas";
			}
			else
			{
				$return .= __( 'Detailed forecast', 'weather-atlas' ) . " &#9656;";
			}
			*/
			$return .= __( 'Weather forecast', 'weather-atlas' );
			$return .= " <span class='weather-atlas-footer-block'>";
			$return .= ${'city_name_' . $language_root_wp} . ", " . ${'country_name_' . $language_root_wp};
			
			$return .= " &#9656;";
			$return .= "</span>";
			
			$return .= "</a>";
			
			$return .= "</div>";
			
			$return .= "</div>";
		}
		
		return $return;
	}
	
	function weather_atlas_data( $city_selector )
	{
		$weather_transient_name = 'weather_atlas_transient_' . $city_selector;
		$return                 = '';
		
		if ( FALSE === ( $value = get_transient( $weather_transient_name ) ) )
		{
			// json data
			$wp_remote_get_url      = 'https://www.weather-atlas.com/weather/api.php';
			$wp_remote_get_url      .= '?city_selector=' . $city_selector;
			$wp_remote_get_url      .= '&key=' . md5( get_site_url() );
			$wp_remote_get_url      .= '&format=json';
			$wp_remote_get_response = wp_remote_get( esc_url_raw( $wp_remote_get_url ) );
			$weather_transient_data = wp_remote_retrieve_body( $wp_remote_get_response );
			
			if ( ! empty ( $weather_transient_data ) )
			{
				set_transient( $weather_transient_name, $weather_transient_data, 900 );
				
				$return = $weather_transient_data;
			}
		}
		else
		{
			$return = get_transient( $weather_transient_name );
		}
		
		return $return;
	}
	
	function function_shortcode_weather_atlas_widget( $attributes )
	{
		return weather_atlas_widget( $attributes );
	}
	
	function weather_atlas_admin_render_select( $id, $name, $options, $selected = NULL )
	{
		$output = "<select class='widefat' id='$id' name='$name' type='text'>";
		foreach ( $options as $key => $value )
		{
			$output .= '<option value="' . $key . '"' . selected( $selected, $key, FALSE ) . '>' . esc_html( $value ) . '</option>';
		}
		$output .= '</select>';
		
		return $output;
	}
	
	function weather_atlas_hex( $value )
	{
		return sprintf( "%02X", $value );
	}
	
	function weather_atlas_range_pos( $value, $start, $stop )
	{
		if ( $start < $stop )
		{
			if ( $value < $start )
			{
				return 0;
			}
			elseif ( $value > $stop )
			{
				return 1;
			}
			else
			{
				return ( $value - $start ) / ( $stop - $start );
			}
		}
		else
		{
			if ( $value < $stop )
			{
				return 1;
			}
			elseif ( $value > $start )
			{
				return 0;
			}
			else
			{
				return ( $start - $value ) / ( $start - $stop );
			}
		}
	}
	
	function weather_atlas_temperature_color( $celsius )
	{
		$background = "";
		$color      = "";
		
		if ( $celsius < 10 )
		{
			$celsius    = $celsius - 3;
			$background = weather_atlas_hex( weather_atlas_range_pos( $celsius, 0, 10 ) * 255 );
		}
		else
		{
			$celsius    = $celsius + 4;
			$background = weather_atlas_hex( weather_atlas_range_pos( $celsius, 70, 35 ) * 255 );
		}
		if ( $celsius <= 10 )
		{
			$background = $background . weather_atlas_hex( weather_atlas_range_pos( $celsius, - 35, 10 ) * 255 );
		}
		else
		{
			$background = $background . weather_atlas_hex( weather_atlas_range_pos( $celsius, 45, 10 ) * 255 );
		}
		if ( $celsius < - 35 )
		{
			$background = $background . weather_atlas_hex( weather_atlas_range_pos( $celsius, - 90, - 35 ) * 255 );
		}
		else
		{
			$background = $background . weather_atlas_hex( weather_atlas_range_pos( $celsius, 18, 10 ) * 255 );
		}
		if ( ( $celsius < 10 ) OR ( $celsius > 10 ) )
		{
			$color = "fff";
		}
		else
		{
			$color = "000";
		}
		
		return array (
			"#" . $background,
			"#" . $color
		);
	}
	
	function weather_atlas_adjust_brightness( $hex, $steps )
	{
		// if rgb(a)
		if ( preg_match( '/(?<=\()(.+)(?=\))/is', $hex, $within_brackets ) )
		{
			$hex_array = explode( ",", $within_brackets[ 0 ] );
			// convert to hex
			// $hex       = sprintf( "#%02x%02x%02x", $hex_array[ 0 ], $hex_array[ 1 ], $hex_array[ 2 ] );
			$return = "1px solid rgba(" . $hex_array[ 0 ] . ", " . $hex_array[ 1 ] . ", " . $hex_array[ 2 ] . ", 0.1)";
		}
		else
		{
			$steps = max( - 255, min( 255, $steps ) );
			$hex   = str_replace( '#', '', $hex );
			if ( strlen( $hex ) == 3 )
			{
				$hex = str_repeat( substr( $hex, 0, 1 ), 2 ) . str_repeat( substr( $hex, 1, 1 ), 2 ) . str_repeat( substr( $hex, 2, 1 ), 2 );
			}
			
			$color_parts = str_split( $hex, 2 );
			$return      = '1px solid #';
			
			foreach ( $color_parts as $color )
			{
				$color  = hexdec( $color );
				$color  = max( 0, min( 255, $color + $steps ) );
				$return .= str_pad( dechex( $color ), 2, '0', STR_PAD_LEFT );
			}
		}
		
		return $return;
	}
