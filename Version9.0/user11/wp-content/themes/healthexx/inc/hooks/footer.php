<?php
if ( ! function_exists( 'healthexx_widget_before_footer' ) ) :
    /**
     * Footer content
     *
     * @since healthexx 1.0.0
     *
     * @param null
     * @return false | void
     *
     */
    function healthexx_widget_before_footer() {
        global $healthexx_customizer_all_values;
        if(  !is_active_sidebar( 'footer-col-one' ) && !is_active_sidebar( 'footer-col-two' ) && !is_active_sidebar( 'footer-col-three' ) && !is_active_sidebar( 'footer-col-four' ) ){
            return false;
        }
        $col = 'col';
        ?>
         <footer class="footer footer-dark">
        <div class="foot-top">            
            <div class="container">
                <div class="row">
                     <?php if( is_active_sidebar( 'footer-col-one' ) ) : ?>
                        <div class="col-md-4 col-12">
                            <aside class="<?php echo esc_attr($col);?> footer-widget-area">
                                <?php dynamic_sidebar('footer-col-one'); ?>
                            </aside>
                        </div>
                    <?php endif; ?>

                    <?php if( is_active_sidebar( 'footer-col-two' ) ) : ?>
                        <div class="col-md-4 col-12">
                            <aside class="<?php echo esc_attr($col);?> footer-widget-area">
                                <?php dynamic_sidebar('footer-col-two'); ?>
                            </aside>
                        </div>
                    <?php endif; ?>

                    <?php if( is_active_sidebar( 'footer-col-three' ) ) : ?>
                        <div class="col-md-4 col-12">
                            <aside class="<?php echo esc_attr($col);?> footer-widget-area">
                                <?php dynamic_sidebar('footer-col-three'); ?>
                            </aside>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </footer>

    <?php
    }
endif;
add_action( 'healthexx_action_widget_before_footer', 'healthexx_widget_before_footer', 10 );

if ( ! function_exists( 'healthexx_footer' ) ) :
    /**
     * Footer content
     *
     * @since healthexx 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function healthexx_footer() {
        global $healthexx_customizer_all_values;
        $healthexx_theme_copyright = $healthexx_customizer_all_values['healthexx-copyright-text'];
        ?> 
        <!-- footer site info -->
        <div class="foot-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php if( !empty( $healthexx_theme_copyright ) ) { ?>
                            <p>
                            <?php if(isset( $healthexx_theme_copyright ) ){
                                echo wp_kses_post( $healthexx_theme_copyright);
                            } 
                            ?></p>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->   
        
        <!-- *****************************************
             Footer section ends
        ****************************************** -->
        
    <?php
    }
endif;
add_action( 'healthexx_action_footer', 'healthexx_footer', 10 ); 