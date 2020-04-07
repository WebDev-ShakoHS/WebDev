<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package healthexx
 */

?>
	
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="col-12">
	<article class="blog-item">
		<?php if ( has_post_thumbnail() ): ?>
			<div class='post-img'>
				<a href="<?php echo esc_url(get_permalink() );?>">
					<?php
						$healthexx_single_post_image_align = healthexx_single_post_image_align(get_the_ID());
						if( 'no-image' != $healthexx_single_post_image_align ){
							if( 'left' == $healthexx_single_post_image_align ){
								echo "<div class='image-left'>";
								the_post_thumbnail('medium');
							}
							elseif( 'right' == $healthexx_single_post_image_align ){
								echo "<div class='image-right'>";
								the_post_thumbnail('medium');
							}
							else{
								echo "<div class='image-full'>";
								the_post_thumbnail('full');
							}
							echo "</div>";/*div end*/
						}
						?>
				</a>
			</div>
		<?php endif ?>
	   <?php if( !empty( get_the_content() ) ) { ?>
			<div class="post-content">
				<div class="content-inner p-4">
					<?php
						the_content();
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'healthexx' ),
							'after'  => '</div>',
						) );
					?>
				</div>
			</div>
	    <?php } ?>
		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							esc_html__( 'Edit %s', 'healthexx' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						),
						'<span class="edit-link">',
						'</span>'
					);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</article>
</div>


<!-- #post-## -->
