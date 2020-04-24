<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                        <div class="col-12">
                           <?php
			                    while ( have_posts() ) :
				                    the_post();				
				                    get_template_part( 'template-parts/content', 'single' );

				                    the_post_navigation();

				                    // If comments are open or we have at least one comment, load up the comment template.
				                    if ( comments_open() || get_comments_number() ) :
					                    comments_template();
				                    endif;

			                    endwhile; // End of the loop.
			                ?>
                        </div>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <!-- blog ends-->

<?php
get_footer();