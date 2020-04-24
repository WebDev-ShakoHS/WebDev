<?php
if ( ! function_exists( 'healthexx_set_global' ) ) :
/**
 * Setting global values for all saved customizer values
 *
 * @since healthexx 1.0.0
 *
 * @param null
 * @return null
 *
 */
function healthexx_set_global() {
    /*Getting saved values start*/
    $GLOBALS['healthexx_customizer_all_values'] = healthexx_get_all_options(1);
}
endif;
add_action( 'healthexx_action_before_head', 'healthexx_set_global', 0 );

if ( ! function_exists( 'healthexx_doctype' ) ) :
/**
 * Doctype Declaration
 *
 * @since healthexx 1.0.0
 *
 * @param null
 * @return null
 *
 */
function healthexx_doctype() {
    ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
<?php
}
endif;
add_action( 'healthexx_action_before_head', 'healthexx_doctype', 10 );

if ( ! function_exists( 'healthexx_before_wp_head' ) ) :
/**
 * Before wp head codes
 *
 * @since healthexx 1.0.0
 *
 * @param null
 * @return null
 *
 */
function healthexx_before_wp_head() {
    ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'/>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>

<?php
}
endif;
add_action( 'healthexx_action_before_wp_head', 'healthexx_before_wp_head', 10 );

if( ! function_exists( 'healthexx_default_layout' ) ) :
    /**
     * healthexx default layout function
     *
     * @since  healthexx 1.0.0
     *
     * @param int
     * @return string
     */
    function healthexx_default_layout( $post_id = null ){

        global $healthexx_customizer_all_values,$post;
        $healthexx_default_layout = $healthexx_customizer_all_values['healthexx-default-layout'];
        if( is_home()){
            $post_id = get_option( 'page_for_posts' );
        }
        if( null == $post_id && isset ( $post->ID ) ){
            $post_id = $post->ID;
        }
        $healthexx_default_layout_meta = get_post_meta( $post_id, 'healthexx-default-layout', true );

        if( false != $healthexx_default_layout_meta ) {
            $healthexx_default_layout = $healthexx_default_layout_meta;
        }
        return $healthexx_default_layout;
    }
endif;

if ( ! function_exists( 'healthexx_body_class' ) ) :
/**
 * add body class
 *
 * @since healthexx 1.0.0
 *
 * @param null
 * @return null
 *
 */
function healthexx_body_class( $healthexx_body_classes ) {
  global $healthexx_customizer_all_values;
  $healthexx_header_background = '';
    $header_background = $healthexx_customizer_all_values['healthexx-header-background-enable'];

    $has_perloader = "has-preloader";
    


    $healthexx_default_layout = healthexx_default_layout();
    
    if( !empty( $healthexx_default_layout ) ){
        if( 'left-sidebar' == $healthexx_default_layout ){
            $healthexx_body_classes[] = 'evt-left-sidebar'.' '. $has_perloader .' '. $healthexx_header_background;
        }
        elseif( 'right-sidebar' == $healthexx_default_layout ){ 
            $healthexx_body_classes[] = 'evt-right-sidebar'.' '. $has_perloader .' '. $healthexx_header_background;
        }
        elseif( 'both-sidebar' == $healthexx_default_layout ){
            $healthexx_body_classes[] = 'evt-both-sidebar'.' '. $has_perloader .' '. $healthexx_header_background;
        }
        elseif( 'no-sidebar' == $healthexx_default_layout ){
            $healthexx_body_classes[] = 'evt-no-sidebar'.' '. $has_perloader .' '. $healthexx_header_background;
        }
        
        else{
            $healthexx_body_classes[] = 'evt-'. $healthexx_customizer_all_values['healthexx-default-layout'].' '. $has_perloader .' '. $healthexx_header_background;
        }
    }
    else{
        $healthexx_body_classes[] = 'evt-right-sidebar'.' '. $has_perloader .' '. $healthexx_header_background;
    }
    return $healthexx_body_classes;

}
endif;
add_filter( 'body_class', 'healthexx_body_class', 10, 1);

if ( ! function_exists( 'healthexx_before_page_start' ) ) :
/**
 * intro loader
 *
 * @since healthexx 1.0.0
 *
 * @param null
 * @return null
 *
 */
function healthexx_before_page_start() {
    global $healthexx_customizer_all_values;
    /*intro loader*/
}
endif;
add_action( 'healthexx_action_before', 'healthexx_before_page_start', 10 );

if ( ! function_exists( 'healthexx_page_start' ) ) :
/**
 * page start
 *
 * @since healthexx 1.0.0
 *
 * @param null
 * @return null
 *
 */
function healthexx_page_start() {
?>
    <div id="page" class="site clearfix">
<?php
}
endif;
add_action( 'healthexx_action_before', 'healthexx_page_start', 15 );

if ( ! function_exists( 'healthexx_skip_to_content' ) ) :
/**
 * Skip to content
 *
 * @since healthexx 1.0.0
 *
 * @param null
 * @return null
 *
 */
function healthexx_skip_to_content() {
    
     global $healthexx_customizer_all_values;
       
    $scroll_to_top = $healthexx_customizer_all_values['healthexx-enable-scroll-to-top'];
     if( 1 == $scroll_to_top) {
        ?>
            <a id="c-scroll" title="Go to top" href="javascript:void(0)">
                 <i class="fa fa-caret-up"></i>
            </a>
        <?php
        } ?>
    </div><!-- #page -->
<?php
}
endif;
add_action( 'healthexx_action_before_header', 'healthexx_skip_to_content', 10 );

   if ( ! function_exists( 'healthexx_navigation_page_start' ) ) :
   /**
    * Skip to content
    *
    * @since healthexx 1.0.0
    *
    * @param null
    * @return null
    *
    */
   function healthexx_navigation_page_start() {
       global $healthexx_customizer_all_values;
       ?>
        <!--  preloader -->
              <div id="preloader"></div>
        <!-- Preloader end -->

      <!-- header start-->
    <header class="theme-header header-two">
            <!-- top header  -->  
            <?php 
                $top_bar_phone           = $healthexx_customizer_all_values['healthexx-top-bar-phone'];
                $top_bar_email           = $healthexx_customizer_all_values['healthexx-top-bar-email'];
                $top_bar_location        = $healthexx_customizer_all_values['healthexx-top-bar-location'];
                $top_bar_button          = $healthexx_customizer_all_values['healthexx-top-header-bar-button'];
                $top_bar_button_url      = $healthexx_customizer_all_values['healthexx-top-header-bar-button-url'];
                $top_bar_text            = $healthexx_customizer_all_values['healthexx-top-bar-text'];
                $top_bar_hours           = $healthexx_customizer_all_values['healthexx-top-bar-hours'];
                $top_bar_facebook        = $healthexx_customizer_all_values['healthexx-top-header-bar-facebook-url'];
                $top_bar_twitter         = $healthexx_customizer_all_values['healthexx-top-header-bar-twitter-url'];
                $top_bar_linkedin        = $healthexx_customizer_all_values['healthexx-top-header-bar-linkedin-url'];
                $top_bar_instagram       = $healthexx_customizer_all_values['healthexx-top-header-bar-instagram-url'];
                $top_bar_google          = $healthexx_customizer_all_values['healthexx-top-header-bar-google-url'];
                       

                if( !empty( $top_bar_button ) ){
                    $col = 'col-4 col-md-4';
                }else{
                    $col = 'col-12 col-md-6';
                }
            ?>

            <?php if ( 1 == $healthexx_customizer_all_values['healthexx-enbale-top-bar-header'] ) { ?>
            
            <div class="header-top1">
            <div class="container">
                <div class="row">
                    <?php if( !empty( $top_bar_text ) || !empty( $top_bar_hours ) || !empty( $top_bar_facebook ) || !empty( $top_bar_twitter )|| !empty( $top_bar_linkedin )|| !empty( $top_bar_instagram )|| !empty( $top_bar_google )) { ?>
                        <?php if( !empty( $top_bar_text ) ) { ?>
                    <div class="col-md-4 col-12 text-lg-left text-center">
                        <div class="info-item">
                            <p class="mb-0"><?php echo esc_html( $top_bar_text ); ?></p>
                        </div>
                    </div>
                    <?php } ?>

                            <?php if( !empty( $top_bar_hours ) ) { ?>
                    <div class="col-md-5 col-12 text-center">
                        <div class="info-item">
                            <p class="mb-0"><?php echo esc_html( $top_bar_hours ); ?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-md-3 col-12 text-lg-right text-center">
                        <div class="info-item">
                            <ul class="foot-social2 my-3">
                                <?php if( !empty( $top_bar_facebook ) ) { ?>
                                <li>
                                    <a href="<?php echo esc_html( $top_bar_facebook ); ?>" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if( !empty( $top_bar_twitter ) ) { ?>
                                <li>
                                    <a href="<?php echo esc_html( $top_bar_twitter ); ?>" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if( !empty( $top_bar_linkedin ) ) { ?>
                                <li>
                                    <a href="<?php echo esc_html( $top_bar_linkedin ); ?>" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if( !empty( $top_bar_instagram ) ) { ?>
                                <li>
                                    <a href="<?php echo esc_html( $top_bar_instagram ); ?>" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if( !empty( $top_bar_google ) ) { ?>
                                <li>
                                    <a href="<?php echo esc_html( $top_bar_google ); ?>" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                              <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <!-- This row end here -->
            </div>
            <!-- This container end here -->
        </div>
        <div class="head-top head-top-two d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-12">
                        <div class="logo-two logo-wrap">
                            <div class="logo my4 py-1 text-xl-left text-lg-center text-md-left">
                                <?php
                                if(has_custom_logo()):
                                the_custom_logo();
                                    
                                    else:

                                        ?>
                                    <h3 class="site-title">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                            <?php bloginfo( 'name' ); ?>
                                        </a>
                                    </h3>
                                    <?php
                                $evt_description = get_bloginfo( 'description', 'display' );
                                if ( $evt_description || is_customize_preview() ) :
                                    ?>
                                    <p class="site-description"><?php echo esc_html($evt_description); /* WPCS: xss ok. */ ?></p>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-12">
                        <?php if( !empty( $top_bar_phone ) || !empty( $top_bar_email ) || !empty( $top_bar_location )) { ?>
                        <ul class="head-con text-xl-right text-center">
                            <?php if( !empty( $top_bar_phone ) ) { ?>
                            <li>
                                <i class="fa fa-phone"></i>
                                <?php echo esc_html( $top_bar_phone ); ?>
                            </li>
                            <?php } ?>
                            <?php if( !empty( $top_bar_email ) ) { ?>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <?php echo esc_html( $top_bar_email ); ?>
                            </li>
                            <?php } ?>
                            <?php if( !empty( $top_bar_location ) ) { ?>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <?php echo esc_html( $top_bar_location ); ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
            <?php } ?>
        
        <div class="menu menu-two affix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-12 d-lg-none">
                        <div class="logo-two logo-wrap">
                            <div class="logo my-4 py-1">
                                <?php
                                if(has_custom_logo()):
                                the_custom_logo();
                                    
                                    else:

                                        ?>
                                    <h3 class="site-title">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                            <?php bloginfo( 'name' ); ?>
                                        </a>
                                    </h3>
                                    <?php
                                $evt_description = get_bloginfo( 'description', 'display' );
                                if ( $evt_description || is_customize_preview() ) :
                                    ?>
                                    <p class="site-description"><?php echo esc_html($evt_description); /* WPCS: xss ok. */ ?></p>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon bar1"></span>
                                <span class="navbar-toggler-icon bar2"></span>
                                <span class="navbar-toggler-icon bar3"></span>
                            </button>
                            <!-- Links -->
                            <div class="main-menu collapse navbar-collapse" id="nav-content">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'menu-1',
                                        'menu_id'           => 'menu', 
                                        'menu_class'        => 'navbar-nav mr-auto',                            
                                        'container'         => false,
                                        'fallback_cb'       => 'healthexx_primary_menu_mobile_callback',   

                                    ) );
                                ?> 
                            </div>
                        </nav>
                    </div>
                    <div id="search" class="top-search">
                        <span class="close"> x</span>
                            <form role="search" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search-bar">
                                <input value="" name="s" type="search" placeholder="<?php echo esc_attr__('type to search','healthexx'); ?>" class="form-control">
                                <button type="submit" class="submit-btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                    </div>
                    <div class="col-lg-4 col-12 text-right d-none d-lg-block">
                        <div class="search-bar-icon">
                            <a class="search-icon" href="#search">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <?php if( !empty( $top_bar_button_url ) ) { ?>
                        <div class="menu-appoint">
                            <a href="<?php echo esc_url( $top_bar_button_url ); ?>" target="_blank" class="btn"><?php echo esc_html($top_bar_button); ?></a>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header end-->


<div id="content" class="site-content">

<?php
}
endif;
add_action( 'healthexx_action_nav_page_start', 'healthexx_navigation_page_start', 10 );


if( ! function_exists( 'healthexx_main_slider_setion' ) ) :
/**
 * Main slider
 *
 * @since healthexx 1.0.0
 *
 * @param null
 * @return null
 *
 */
    function healthexx_main_slider_setion(){
        global $healthexx_customizer_all_values;

        if (  is_front_page() && !is_home() ) {
            do_action('healthexx_action_main_slider');
        } else {
            /**
             * healthexx_page_inner_title hook
             * @since healthexx 1.0.0
             *
             * @hooked null
             */
            if(  1 ==  $healthexx_customizer_all_values['healthexx-slider-enable-blog'] &&  is_home() ){
                do_action('healthexx_action_main_slider');
            }else{
                do_action('healthexx_page_inner_title');
                do_action('healthexx_action_after_title');
            }
        }
    }
endif;
add_action( 'healthexx_action_on_header', 'healthexx_main_slider_setion', 10 ); ?>