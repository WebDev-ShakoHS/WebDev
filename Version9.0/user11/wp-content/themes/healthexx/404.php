<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package healthexx
 */

get_header();
?>

<!-- error-page start -->
    <section class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-capitalize mt-5 mb-30"><?php esc_html_e('404 - page not found !', 'healthexx') ?></h3>
                        <?php get_search_form(); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-black btn-shadow"><?php esc_html_e('back to home', 'healthexx') ?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- error-page end -->

<?php
get_footer();