<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package healthexx
 */

get_header();
 ?>

<?php if( 1 == $healthexx_customizer_all_values['healthexx-slider-enable-blog']){
	do_action('healthexx_homepage_slider');
} ?>

<!-- blog start-->
    <div class="bg-w sp-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 pdx">
                    <div class="row">
                        <?php
			                if ( have_posts() ) :

				            /* Start the Loop */
				            while ( have_posts() ) : the_post();

					            /*
					             * Include the Post-Format-specific template for the content.
					             * If you want to override this in a child theme, then include a file
					             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					            */
					            get_template_part( 'template-parts/content', get_post_format() );

				            endwhile;

				            	the_posts_pagination();
			            else :
				            get_template_part( 'template-parts/content', 'none' );

			            endif; ?>
                    </div>
                </div>
                
                <?php get_sidebar(); ?>                        
                    
            </div>
        </div>
    </div>
<!-- blog ends-->

<?php
get_footer();