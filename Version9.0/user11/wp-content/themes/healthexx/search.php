<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package healthexx
 */

get_header();
?>

<!-- blog start-->
    <div class="bg-w sp-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <?php if ( have_posts() ) : ?>
				        <?php
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