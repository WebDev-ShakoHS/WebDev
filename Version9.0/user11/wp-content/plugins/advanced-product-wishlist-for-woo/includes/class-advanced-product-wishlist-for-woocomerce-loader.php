<?php

/**
 * Register all actions and filters for the plugin
 *
 * @link       https://athemeart.com/
 * @since      1.0.0
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/includes
 */

/**
 * Register all actions and filters for the plugin.
 *
 * Maintain a list of all hooks that are registered throughout
 * the plugin, and register them with the WordPress API. Call the
 * run function to execute the list of actions and filters.
 *
 * @package    Advanced_Product_Wishlist_For_Woocomerce
 * @subpackage Advanced_Product_Wishlist_For_Woocomerce/includes
 * @author     aThemeArt <athemeart.com@gmail.com>
 */
class Advanced_Product_Wishlist_For_Woocomerce_Loader {

	/**
	 * The array of actions registered with WordPress.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      array    $actions    The actions registered with WordPress to fire when the plugin loads.
	 */
	protected $actions;

	/**
	 * The array of filters registered with WordPress.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      array    $filters    The filters registered with WordPress to fire when the plugin loads.
	 */
	protected $filters;
	
	
	/**
	 * The root url of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The root url of the plugin.
	 */
	public $url;
	
	/**
	 * The root path of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The root path of the plugin.
	 */
	public $path;

	/**
	 * Initialize the collections used to maintain the actions and filters.
	 *
	 * @since    1.0.0
	 */
	 
	public function __construct() {
		
		if ( defined( 'ADVANCED_PRODUCT_WISHLIST_FOR_WOOCOMERCE_URL' ) ) {
			$this->url = ADVANCED_PRODUCT_WISHLIST_FOR_WOOCOMERCE_URL;
		} else {
			$this->url = WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' ;
		}
		
		if ( defined( 'ADVANCED_PRODUCT_WISHLIST_FOR_WOOCOMERCE_DIR' ) ) {
			$this->path = ADVANCED_PRODUCT_WISHLIST_FOR_WOOCOMERCE_DIR;
		} else {
			$this->path = plugin_dir_path( dirname( __FILE__ ) ) ;
		}
		
		$this->actions = array();
		$this->filters = array();

	}
	public function plugins_url(){
		return $this->url;	
	}
	public function plugins_path(){
		return $this->path;	
	}
	/**
	 * Add a new action to the collection to be registered with WordPress.
	 *
	 * @since    1.0.0
	 * @param    string               $hook             The name of the WordPress action that is being registered.
	 * @param    object               $component        A reference to the instance of the object on which the action is defined.
	 * @param    string               $callback         The name of the function definition on the $component.
	 * @param    int                  $priority         Optional. The priority at which the function should be fired. Default is 10.
	 * @param    int                  $accepted_args    Optional. The number of arguments that should be passed to the $callback. Default is 1.
	 */
	public function add_action( $hook, $component, $callback, $priority = 10, $accepted_args = 1 ) {
		$this->actions = $this->add( $this->actions, $hook, $component, $callback, $priority, $accepted_args );
	}

	/**
	 * Add a new filter to the collection to be registered with WordPress.
	 *
	 * @since    1.0.0
	 * @param    string               $hook             The name of the WordPress filter that is being registered.
	 * @param    object               $component        A reference to the instance of the object on which the filter is defined.
	 * @param    string               $callback         The name of the function definition on the $component.
	 * @param    int                  $priority         Optional. The priority at which the function should be fired. Default is 10.
	 * @param    int                  $accepted_args    Optional. The number of arguments that should be passed to the $callback. Default is 1
	 */
	public function add_filter( $hook, $component, $callback, $priority = 10, $accepted_args = 1 ) {
		$this->filters = $this->add( $this->filters, $hook, $component, $callback, $priority, $accepted_args );
	}

	/**
	 * A utility function that is used to register the actions and hooks into a single
	 * collection.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @param    array                $hooks            The collection of hooks that is being registered (that is, actions or filters).
	 * @param    string               $hook             The name of the WordPress filter that is being registered.
	 * @param    object               $component        A reference to the instance of the object on which the filter is defined.
	 * @param    string               $callback         The name of the function definition on the $component.
	 * @param    int                  $priority         The priority at which the function should be fired.
	 * @param    int                  $accepted_args    The number of arguments that should be passed to the $callback.
	 * @return   array                                  The collection of actions and filters registered with WordPress.
	 */
	private function add( $hooks, $hook, $component, $callback, $priority, $accepted_args ) {

		$hooks[] = array(
			'hook'          => $hook,
			'component'     => $component,
			'callback'      => $callback,
			'priority'      => $priority,
			'accepted_args' => $accepted_args
		);

		return $hooks;

	}
	
	/**
	 * Add a new include file.
	 *
	 * @since    1.0.0
	 * @param    string               $mod         		The name of php file include.
	 */
	public function load_module( $mod ) {
		$dir = $this->path;
		
		if ( empty( $dir ) or ! is_dir( $dir ) ) {
			return false;
		}
	
		$file = path_join( $dir, $mod . '.php' );
	
		if ( file_exists( $file ) ) {
			require_once $file;
		}
	}


	
	/**
	* Get template.
	*
	* Search for the template and include the file.
	*
	* @since 1.0.0
	*
	* @see wcpt_locate_template()
	*
	* @param string 	$template_name			Template to load.
	* @param array 	$args					Args passed for the template file.
	* @param string 	$string $template_path	Path to templates.
	* @param string	$default_path			Default path to template files.
	*/
	
	
	public function apww_get_template( $template_name, $args = array(), $template_path = '', $default_path = '' ) {
		
		if ( ! empty( $args ) && is_array( $args ) ) {
			extract( $args ); // @codingStandardsIgnoreLine
		}
		
		$located = $this->apww_locate_template( $template_name, $template_path, $default_path );

		if ( ! file_exists( $located ) ) {
			return new WP_Error( 'invalid_data', __( '%s does not exist.', 'advanced-product-wishlist-for-woocomerce' ), '<code>' . $located . '</code>' );
		}

		$located = apply_filters( 'wpdl_filters_get_template', $located, $template_name, $args, $template_path, $default_path );

		do_action( 'apww_before_template_part', $template_name, $template_path, $located, $args );

		include $located;

		do_action( 'apww_after_template_part', $template_name, $template_path, $located, $args );
	}
	
	
	
	
	
	/**
	 * Locate template.
	 *
	 * Locate the called template.
	 * Search Order:
	 * 1. /themes/theme/woocommerce-plugin-templates/$template_name
	 * 2. /themes/theme/$template_name
	 * 3. /plugins/woocommerce-plugin-templates/templates/$template_name.
	 *
	 * @since 1.0.0
	 *
	 * @param 	string 	$template_name			Template to load.
	 * @param 	string 	$string $template_path	Path to templates.
	 * @param 	string	$default_path			Default path to template files.
	 * @return 	string 							Path to the template file.
	 */
	public function apww_locate_template( $template_name, $template_path = '', $default_path = '' ) {

		if ( ! $template_path ) {
			$template_path = $this->template_path();
		}

		if ( ! $default_path ) {
			$default_path = $this->template_path();
		}
		

		// Look within passed path within the theme - this is priority.
		$template = $this->apww_located_template(
			array(
				$template_name,
				trailingslashit( $template_path ) . $template_name,
				
			)
		);


		// Get default template/.
		if ( ! $template ) {
			$template = $default_path . $template_name;
		}

		// Return what we found.
		return apply_filters( 'apww_filters_locate_template', $template, $template_name, $template_path );
		
	}
	
	
	
	/**
	 * Retrieve the name of the highest priority template file that exists.
	 *
	 * Searches in the STYLESHEETPATH before TEMPLATEPATH so that themes which
	 * inherit from a parent theme can just overload one file. If the template is
	 * not found in either of those, it looks in the theme-compat folder last.
	 *
	 * Taken from bbPress
	 *
	 * @since v1.5
	 *
	 * @param string|array $template_names Template file(s) to search for, in order.
	 * @param bool $load If true the template file will be loaded if it is found.
	 * @param bool $require_once Whether to require_once or require. Default true.
	 *                            Has no effect if $load is false.
	 * @return string The template filename if one is located.
	 */
	public function apww_located_template( $template_names, $load = false, $require_once = true ) {
		// No file found yet
		$located = false;
	 
		// Try to find a template file
		foreach ( (array) $template_names as $template_name ) {
	 
			// Continue if template is empty
			if ( empty( $template_name ) )
				continue;
	 
			// Trim off any slashes from the template name
			$template_name = ltrim( $template_name, '/' );
	 
			// Check child theme first
			if ( file_exists( trailingslashit( get_stylesheet_directory() ) . 'apww/' . $template_name ) ) {
				$located = trailingslashit( get_stylesheet_directory() ) . 'apww/' . $template_name;
				break;
	 
			// Check parent theme next
			} elseif ( file_exists( trailingslashit( get_template_directory() ) . 'apww/' . $template_name ) ) {
				$located = trailingslashit( get_template_directory() ) . 'apww/' . $template_name;
				break;
	 
			// Check theme compatibility last
			} elseif ( file_exists( trailingslashit( $this->template_path() ) . $template_name ) ) {
				$located = trailingslashit( $this->template_path() ) . $template_name;
				break;
			}
		}
	 	
		if ( ( true == $load ) && ! empty( $located ) )
			load_template( $located, $require_once );
	 
		return $located;
		
		
	}
	
	/**
	 * Return Template path
	 *
	 * @return mixed|void
	 */
	function template_path() {

		return apply_filters( 'apww_filters_template_path', $this->path . 'public/partials/' );
	}


	/**
	 * Return Admin Template Path
	 *
	 * @return mixed|void
	 */
	function admin_template_path() {

		return apply_filters( 'apww_filters_admin_template_path', $this->path . 'admin/partials/' );;
	}
	
	
		/**
	 * Register the filters and actions with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {

		foreach ( $this->filters as $hook ) {
			add_filter( $hook['hook'], array( $hook['component'], $hook['callback'] ), $hook['priority'], $hook['accepted_args'] );
		}

		foreach ( $this->actions as $hook ) {
			add_action( $hook['hook'], array( $hook['component'], $hook['callback'] ), $hook['priority'], $hook['accepted_args'] );
		}

	}
}

global $apww_loader;

$apww_loader = new Advanced_Product_Wishlist_For_Woocomerce_Loader();