<?php
/**
 * Add theme dashboard page
 */
/**
 * Get theme actions required
 *
 * @return array|mixed|void
 */
if ( !function_exists( 'healthexx_get_actions_required' ) ) :

	function healthexx_get_actions_required() {

		$actions						 = array();
		$actions[ 'recommend_plugins' ]	 = 'dismiss';

		$recommend_plugins = get_theme_support( 'recommend-plugins' );
		if ( is_array( $recommend_plugins ) && isset( $recommend_plugins[ 0 ] ) ) {
			$recommend_plugins = $recommend_plugins[ 0 ];
		} else {
			$recommend_plugins[] = array();
		}

		if ( !empty( $recommend_plugins ) ) {

			foreach ( $recommend_plugins as $plugin_slug => $plugin_info ) {
				$plugin_info = wp_parse_args( $plugin_info, array(
					'name'				 => '',
					'active_filename'	 => '',
				) );
				if ( $plugin_info[ 'active_filename' ] ) {
					$active_file_name = $plugin_info[ 'active_filename' ];
				} else {
					$active_file_name = $plugin_slug . '/' . $plugin_slug . '.php';
				}
				if ( !is_plugin_active( $active_file_name ) ) {
					$actions[ 'recommend_plugins' ] = 'active';
				}
			}
		}

		$actions		 = apply_filters( 'healthexx_get_actions_required', $actions );
		$hide_by_click	 = get_option( 'healthexx_actions_dismiss' );
		if ( !is_array( $hide_by_click ) ) {
			$hide_by_click = array();
		}

		$n_active		 = $n_dismiss		 = 0;
		$number_notice	 = 0;
		foreach ( $actions as $k => $v ) {
			if ( !isset( $hide_by_click[ $k ] ) ) {
				$hide_by_click[ $k ] = false;
			}

			if ( $v == 'active' ) {
				$n_active ++;
				$number_notice ++;
				if ( $hide_by_click[ $k ] ) {
					if ( $hide_by_click[ $k ] == 'hide' ) {
						$number_notice --;
					}
				}
			} else if ( $v == 'dismiss' ) {
				$n_dismiss ++;
			}
		}

		$return = array(
			'actions'		 => $actions,
			'number_actions' => count( $actions ),
			'number_active'	 => $n_active,
			'number_dismiss' => $n_dismiss,
			'hide_by_click'	 => $hide_by_click,
			'number_notice'	 => $number_notice,
		);
		if ( $return[ 'number_notice' ] < 0 ) {
			$return[ 'number_notice' ] = 0;
		}

		return $return;
	}

endif;
add_action( 'switch_theme', 'healthexx_reset_actions_required' );

function healthexx_reset_actions_required() {
	delete_option( 'healthexx_actions_dismiss' );
}

if ( !function_exists( 'healthexx_admin_scripts' ) ) :

	/**
	 * Enqueue scripts for admin page only: Theme info page
	 */
	function healthexx_admin_scripts( $hook ) {
		wp_enqueue_style( 'healthexx-admin-css', get_template_directory_uri() . '/assets/admin/admin.css' );
		if ( $hook === 'appearance_page_twp_healthexx' ) {
			// Add recommend plugin css
			wp_enqueue_style( 'plugin-install' );
			wp_enqueue_script( 'plugin-install' );
			wp_enqueue_script( 'updates' );
			add_thickbox();
		}
	}

endif;
add_action( 'admin_enqueue_scripts', 'healthexx_admin_scripts' );

add_action( 'admin_menu', 'healthexx_theme_info' );

function healthexx_theme_info() {

	$actions		 = healthexx_get_actions_required();
	$number_count	 = $actions[ 'number_notice' ];

	if ( $number_count > 0 ) {
		/* translators: %1$s: replaced with number (counter) */
		$update_label	 = sprintf( _n( '%1$s action required', '%1$s actions required', $number_count, 'healthexx' ), $number_count );
		$count			 = "<span class='update-plugins count-" . esc_attr( $number_count ) . "' title='" . esc_attr( $update_label ) . "'><span class='update-count'>" . number_format_i18n( $number_count ) . "</span></span>";
		/* translators: %s: replaced with number (counter) */
		$menu_title		 = sprintf( esc_html__( 'healthexx theme %s', 'healthexx' ), $count );
	} else {
		$menu_title = esc_html__( 'healthexx theme', 'healthexx' );
	}

	add_theme_page( esc_html__( 'healthexx dashboard', 'healthexx' ), $menu_title, 'edit_theme_options', 'twp_healthexx', 'healthexx_theme_info_page' );
}

/**
 * Add admin notice when active theme, just show one time
 *
 * @return bool|null
 */
add_action( 'admin_notices', 'healthexx_admin_notice' );

function healthexx_admin_notice() {
	global $current_user;
	$user_id	 = $current_user->ID;
	$theme_data	 = wp_get_theme();
	if ( !get_user_meta( $user_id, esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore' ) ) {
		?>
		<div class="notice healthexx-notice">

			<h1>
				<?php
				/* translators: %1$s: theme name, %2$s theme version */
				printf( esc_html__( 'Welcome to %1$s - Version %2$s', 'healthexx' ), esc_html( $theme_data->Name ), esc_html( $theme_data->Version ) );
				?>
			</h1>

			<p>
				<?php
				/* translators: %1$s: theme name, %2$s link */
				printf( __( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer please make sure you visit our <a href="%2$s">Welcome page</a>', 'healthexx' ), esc_html( $theme_data->Name ), esc_url( admin_url( 'themes.php?page=twp_healthexx' ) ) );
				printf( '<a href="%1$s" class="notice-dismiss dashicons dashicons-dismiss dashicons-dismiss-icon"></a>', '?' . esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore=0' );
				?>
			</p>
			<p>
				<a href="<?php echo esc_url( admin_url( 'themes.php?page=twp_healthexx' ) ) ?>" class="button button-primary button-hero" style="text-decoration: none;">
					<?php
					/* translators: %s theme name */
					printf( esc_html__( 'Get started with %s', 'healthexx' ), esc_html( $theme_data->Name ) )
					?>
				</a>
			</p>

		</div>
		<?php
	}
}

add_action( 'admin_init', 'healthexx_notice_ignore' );

function healthexx_notice_import() {
	?>
	<p>
		<?php esc_html_e( 'Save time by importing our demo data: your website will be set up and ready to be customized in minutes.', 'healthexx' ); ?>
	</p>
	<p>	
		<?php if ( is_plugin_active( 'healthexx-extra/healthexx-extra.php' ) ) { ?>
			<a href="<?php echo esc_url( admin_url( 'themes.php?page=healthexx-extra-panel-install-demos' ) ) ?>" class="button" style="text-decoration: none;">
				<?php esc_html_e( 'Import demo data', 'healthexx' ); ?>
			</a>
		<?php } else { ?>
			<a href="<?php echo esc_url( admin_url( 'themes.php?page=twp_healthexx&tab=import_data' ) ) ?>" class="button" style="text-decoration: none;">
				<?php esc_html_e( 'Import demo data', 'healthexx' ); ?>
			</a>
		<?php } ?>

	</p>
	<?php
}

function healthexx_notice_ignore() {
	global $current_user;
	$theme_data	 = wp_get_theme();
	$user_id	 = $current_user->ID;
	/* If user clicks to ignore the notice, add that to their user meta */
	if ( isset( $_GET[ esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore' ] ) && '0' == $_GET[ esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore' ] ) {
		add_user_meta( $user_id, esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore', 'true', true );
	}
}

function healthexx_render_recommend_plugins( $recommend_plugins = array() ) {
	foreach ( $recommend_plugins as $plugin_slug => $plugin_info ) {
		$plugin_info	 = wp_parse_args( $plugin_info, array(
			'name'				 => '',
			'active_filename'	 => '',
			'description'		 => '',
		) );
		$plugin_name	 = $plugin_info[ 'name' ];
		$plugin_desc	 = $plugin_info[ 'description' ];
		$status			 = is_dir( WP_PLUGIN_DIR . '/' . $plugin_slug );
		$button_class	 = 'install-now button';
		if ( $plugin_info[ 'active_filename' ] ) {
			$active_file_name = $plugin_info[ 'active_filename' ];
		} else {
			$active_file_name = $plugin_slug . '/' . $plugin_slug . '.php';
		}

		if ( !is_plugin_active( $active_file_name ) ) {
			$button_txt = esc_html__( 'Install Now', 'healthexx' );
			if ( !$status ) {
				$install_url = wp_nonce_url(
				add_query_arg(
				array(
					'action' => 'install-plugin',
					'plugin' => $plugin_slug
				), network_admin_url( 'update.php' )
				), 'install-plugin_' . $plugin_slug
				);
			} else {
				$install_url	 = add_query_arg( array(
					'action'		 => 'activate',
					'plugin'		 => rawurlencode( $active_file_name ),
					'plugin_status'	 => 'all',
					'paged'			 => '1',
					'_wpnonce'		 => wp_create_nonce( 'activate-plugin_' . $active_file_name ),
				), network_admin_url( 'plugins.php' ) );
				$button_class	 = 'activate-now button-primary';
				$button_txt		 = esc_html__( 'Activate', 'healthexx' );
			}

			$detail_link = add_query_arg(
			array(
				'tab'		 => 'plugin-information',
				'plugin'	 => $plugin_slug,
				'TB_iframe'	 => 'true',
				'width'		 => '772',
				'height'	 => '349',
			), network_admin_url( 'plugin-install.php' )
			);

			echo '<div class="rcp">';
			echo '<h4 class="rcp-name">';
			echo esc_html( $plugin_name );
			echo '</h4>';
			echo '<p class="rcp-desc">';
			echo wp_kses_post( $plugin_desc );
			echo '</p>';
			echo '<p class="action-btn plugin-card-' . esc_attr( $plugin_slug ) . '"><a href="' . esc_url( $install_url ) . '" data-slug="' . esc_attr( $plugin_slug ) . '" class="' . esc_attr( $button_class ) . '">' . esc_html( $button_txt ) . '</a></p>';
			echo '<a class="plugin-detail thickbox open-plugin-details-modal" href="' . esc_url( $detail_link ) . '">' . esc_html__( 'Details', 'healthexx' ) . '</a>';
			echo '</div>';
		}
	}
}

function healthexx_admin_dismiss_actions() {
	// Action for dismiss
	if ( isset( $_GET[ 'healthexx_action_notice' ] ) ) {
		$actions_dismiss = get_option( 'healthexx_actions_dismiss' );
		if ( !is_array( $actions_dismiss ) ) {
			$actions_dismiss = array();
		}
		$action_key = sanitize_text_field( wp_unslash( $_GET[ 'healthexx_action_notice' ] ) );
		if ( isset( $actions_dismiss[ $action_key ] ) && $actions_dismiss[ $action_key ] == 'hide' ) {
			$actions_dismiss[ $action_key ] = 'show';
		} else {
			$actions_dismiss[ $action_key ] = 'hide';
		}
		update_option( 'healthexx_actions_dismiss', $actions_dismiss );
		$url = null;
		if ( isset( $_SERVER[ 'REQUEST_URI' ] ) ) { // Input var okay.
			$url = sanitize_text_field( wp_unslash( $_SERVER[ 'REQUEST_URI' ] ) );
			$url = remove_query_arg( 'healthexx_action_notice', $url );
		}
		wp_redirect( $url );
		die();
	}
}

 

add_action( 'healthexx_import_title', 'healthexx_recommended_import_construct' );

function healthexx_recommended_import_construct() {
	// Check for current viewing tab
	$tab = null;
	if ( isset( $_GET[ 'tab' ] ) ) {
		$tab = sanitize_text_field( wp_unslash( $_GET[ 'tab' ] ) );
	} else {
		$tab = null;
	}
	if ( is_plugin_active( 'healthexx-extra/healthexx-extra.php' ) ) {
		?>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=healthexx-extra-panel-install-demos' ) ) ?>" class="nav-tab<?php echo $tab == 'import_data' ? ' nav-tab-active' : null; ?>"><?php esc_html_e( 'Free VS Pro', 'healthexx' ) ?></a>
	<?php } else { ?>
		<a href="?page=twp_healthexx&tab=import_data" class="nav-tab<?php echo $tab == 'import_data' ? ' nav-tab-active' : null; ?>"><?php esc_html_e( 'Free VS PRO', 'healthexx' ) ?></a>
		<?php
	}
}

function healthexx_theme_info_page() {

	$theme_data = wp_get_theme();

	if ( isset( $_GET[ 'healthexx_action_dismiss' ] ) ) {
		$actions_dismiss = get_option( 'healthexx_actions_dismiss' );
		if ( !is_array( $actions_dismiss ) ) {
			$actions_dismiss = array();
		}
		$actions_dismiss[ sanitize_text_field( wp_unslash( $_GET[ 'healthexx_action_dismiss' ] ) ) ] = 'dismiss';
		update_option( 'healthexx_actions_dismiss', $actions_dismiss );
	}

	// Check for current viewing tab
	$tab = null;
	if ( isset( $_GET[ 'tab' ] ) ) {
		$tab = sanitize_text_field( wp_unslash( $_GET[ 'tab' ] ) );
	} else {
		$tab = null;
	}

	$actions_r		 = healthexx_get_actions_required();
	$number_action	 = $actions_r[ 'number_notice' ];
	$actions		 = $actions_r[ 'actions' ];

	$current_action_link = esc_url( admin_url( 'themes.php?page=twp_healthexx&tab=actions_required' ) );

	$recommend_plugins = get_theme_support( 'recommend-plugins' );
	if ( is_array( $recommend_plugins ) && isset( $recommend_plugins[ 0 ] ) ) {
		$recommend_plugins = $recommend_plugins[ 0 ];
	} else {
		$recommend_plugins[] = array();
	}
	?>
	<div class="wrap about-wrap theme_info_wrapper">
		<h1>
			<?php
			/* translators: %1$s theme name, %2$s theme version */
			printf( esc_html__( 'Welcome to %1$s - Version %2$s', 'healthexx' ), esc_html( $theme_data->Name ), esc_html( $theme_data->Version ) );
			?>
		</h1>
		<div class="about-text"><?php echo esc_html( $theme_data->Description ); ?></div>
		<h2 class="nav-tab-wrapper">
			<a href="?page=twp_healthexx" class="nav-tab<?php echo is_null( $tab ) ? ' nav-tab-active' : null; ?>"><?php echo esc_html( $theme_data->Name ); ?></a>
			<?php do_action( 'healthexx_recommended_title' ); ?>
			<?php do_action( 'healthexx_import_title' ); ?>

			<?php do_action( 'healthexx_admin_more_tabs' ); ?>
		</h2>

		<?php if ( is_null( $tab ) ) { ?>
			<div class="theme_info info-tab-content">
				<div class="theme_info_column clearfix">
					<div class="theme_info_left">
						<div class="theme_link">
							<h3><?php esc_html_e( 'Theme Customizer', 'healthexx' ); ?></h3>
							<p class="about">
								<?php
								/* translators: %s theme name */
								printf( esc_html__( '%s supports the Theme Customizer for all theme settings. Click "Customize" to personalize your site.', 'healthexx' ), esc_html( $theme_data->Name ) );
								?>
							</p>
							<p>
								<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Start customizing', 'healthexx' ); ?></a>
							</p>
						</div>
						<div class="theme_link">
							<h3><?php esc_html_e( 'Theme documentation', 'healthexx' ); ?></h3>
							<p class="about">
								<?php
								/* translators: %s theme name */
								printf( esc_html__( 'Need help in setting up and configuring %s? Please take a look at our documentation page.', 'healthexx' ), esc_html( $theme_data->Name ) );
								?>
							</p>
							<p>
								<a href="<?php echo esc_url( 'http://way2theme.com/wp-content/uploads/2020/03/Healthexx-Wordpress-Theme-Documentation-converted.pdf' ); ?>" target="_blank" class="button button-secondary">
									<?php
									/* translators: %s theme name */
									printf( esc_html__( '%s Documentation', 'healthexx' ), esc_html( $theme_data->Name ) );
									?>
								</a>
							</p>
						</div>
						<div class="theme_link">
							<h3><?php esc_html_e( 'Having trouble? Need support?', 'healthexx' ); ?></h3>
							<p>
								<a href="<?php echo esc_url( 'https://wordpress.org/support/theme/healthexx/' ); ?>" target="_blank" class="button button-secondary"><?php esc_html_e( 'Contact us', 'healthexx' ); ?></a>
							</p>
						</div>
						<div class="theme_link">
							<h3><?php esc_html_e( 'View Premium Theme Features ', 'healthexx' ); ?></h3>
							<p>
								<a href="<?php echo esc_url( 'http://way2theme.com/healthex-wordpress-theme/' ); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'View Features', 'healthexx' ); ?></a>
							</p>
						</div>
					</div>

					<div class="theme_info_right">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png" alt="<?php esc_attr_e( 'Theme Screenshot', 'healthexx' ); ?>" />
					</div>
				</div>
			</div>
		<?php } ?>
	 
		<?php if ( $tab == 'import_data' ) { ?>
			<div class="import-data-tab info-tab-content">
				 <div id="healthexx_about_section_pro" class="healthexx_tabs_section healthexx_about_section">
			<table class="healthexx_about_table" cellpadding="0" cellspacing="0" border="0">
				<thead>
					<tr>
						<td class="healthexx_about_table_info">&nbsp;</td>
						<td class="healthexx_about_table_check"><?php
							// Translators: Show theme name with suffix 'Free'
							echo esc_html(sprintf(__('%s Free', 'healthexx'), ''));
						?></td>
						<td class="healthexx_about_table_check"><?php
							// Translators: Show theme name with suffix 'PRO'
							echo esc_html(sprintf(__('%s PRO', 'healthexx'), ''));
						?></td>
					</tr>
				</thead>
				<tbody>


					<?php
					// Responsive layouts
					?>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e('Mobile friendly', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('Responsive layout. Looks great on any device.', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>

					<?php
					// Built-in slider
					?>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e('Built-in posts slider', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('Allows you to add beautiful slides using the built-in shortcode/widget "Slider" with swipe gestures support.', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>

					<?php
					// Revolution slider
					if (healthexx_storage_isset('required_plugins', 'revslider')) {
					?>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e('Revolution Slider Compatibility', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('Our built-in shortcode/widget "Slider" is able to work not only with posts, but also with slides created  in "Revolution Slider".', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>
					<?php } ?>

					<?php
					// SiteOrigin Panels
					if (healthexx_storage_isset('required_plugins', 'siteorigin-panels')) {
					?>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e('Free PageBuilder', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('Full integration with a nice free page builder "SiteOrigin Panels".', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e('Additional widgets pack', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('A number of useful widgets to create beautiful homepages and other sections of your website with SiteOrigin Panels.', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-no"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>
					<?php } ?>

					<?php
					?>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e(' Page Builder', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('Full integration with a very popular page builder   Page Builder . A number of useful shortcodes and widgets to create beautiful homepages and other sections of your website.', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-no"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e('Additional shortcodes pack', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('A number of useful shortcodes to create beautiful homepages and other sections of your website with WP Bakery Page Builder.', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-no"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>

					<?php
					// Layouts builder
					?>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e('Headers and Footers builder', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('Powerful visual builder of headers and footers! No manual code editing - use all the advantages of drag-and-drop technology.', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-no"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>

					<?php
					// WooCommerce
					if (healthexx_storage_isset('required_plugins', 'woocommerce')) {
					?>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e('WooCommerce Compatibility', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('Ready for e-commerce. You can build an online store with this theme.', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>
					<?php } ?>

					<?php
					// Easy Digital Downloads
					if (healthexx_storage_isset('required_plugins', 'easy-digital-downloads')) {
					?>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e('Easy Digital Downloads Compatibility', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('Ready for digital e-commerce. You can build an online digital store with this theme.', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-no"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>
					<?php } ?>

					<?php
					// Other plugins
					?>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e('Many other popular plugins compatibility', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('PRO version is compatible (was tested and has built-in support) with many popular plugins.', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-no"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>

					<?php
					// Support
					?>
					<tr>
						<td class="healthexx_about_table_info">
							<h2 class="healthexx_about_table_info_title">
								<?php esc_html_e('Support', 'healthexx'); ?>
							</h2>
							<div class="healthexx_about_table_info_description"><?php
								esc_html_e('Our premium support is going to take care of any problems, in case there will be any of course.', 'healthexx');
							?></div>
						</td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-no"></i></td>
						<td class="healthexx_about_table_check"><i class="dashicons dashicons-yes"></i></td>
					</tr>

					<?php
					// Get PRO version
					if ( healthexx_THEME_FREE_WP ) {
						?>
						<tr>
							<td class="healthexx_about_table_info">&nbsp;</td>
							<td class="healthexx_about_table_check" colspan="2">
								<a href="http://way2theme.com/healthex-wordpress-theme/" target="_blank" class="healthexx_about_block_link button button-action"><?php
									esc_html_e('Get PRO version', 'healthexx');
								?></a>
							</td>
						</tr>
						<?php
					} else {
						?>
						<tr>
							<td colspan="3" align="right"><?php healthexx_about_show_banner(); ?></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
				 
			</div>
		<?php } ?>

	</div> <!-- END .theme_info -->
	<?php
}