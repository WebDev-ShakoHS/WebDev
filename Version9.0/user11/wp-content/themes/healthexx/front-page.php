<?php
/**
 * The template for displaying home page.
 * @package healthexx
 */
global $healthexx_customizer_all_values;

get_header();
if ( 'posts' == get_option( 'show_on_front' ) )
{
    include( get_home_template() );
}
    else
    {
		/**
		 * healthexx_homepage hook
		 * @since healthexx 1.0.0
		 *
		 * @hooked healthexx_homepage -  10
		 * @sub_hooked healthexx_homepage - 20
         * @hooked healthexx_homepage_slider -30
		 */
          
        do_action( 'healthexx_homepage_slider' );
        do_action( 'healthexx_homepage' );

        $healthexx_static_page = absint($healthexx_customizer_all_values['healthexx-enable-static-page']);
        do_action('healthexx_link');
        if (1 == $healthexx_static_page ) { ?>
            <section class="section fp-auto-height">
                <div class="evt-img-overlay">
                    <div class="container pt-4">
                        <div class="row">
                            <div id="primary" class="content-area">
                                <main id="main" class="site-main" role="main">

                                    <?php
                                    while ( have_posts() ) : the_post();

                                        get_template_part( 'template-parts/content', 'page' );

                                        // If comments are open or we have at least one comment, load up the comment template.
                                        if ( comments_open() || get_comments_number() ) :
                                            comments_template();
                                        endif;

                                    endwhile; // End of the loop.
                                    ?>

                                </main><!-- #main -->
                            </div><!-- #primary -->
                            <?php get_sidebar(); ?>
                        </div>
                        
                    </div>
                </div>
            </section>
        <?php }
    }
get_footer();