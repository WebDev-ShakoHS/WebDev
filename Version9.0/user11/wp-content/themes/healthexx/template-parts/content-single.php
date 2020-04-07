<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package healthexx
 */

?>
<article class="blog-detail">
	<div class="post-img">
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
	</div>
	<div class="post-content mb-5">
		<ul class="post-meta px-4">
			<li>
				<i class="fa fa-user"></i>
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ) ; ?></a>
			</li>
			<li>
				<i class="fa fa-calendar"></i>
				<?php echo esc_html(get_the_date('M j , Y') );?>
			</li>
			<li>
				<i class="fa fa-comments"></i>
				<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
			</li>
			<?php if (has_tag()) : ?>
			<li>
				<i class="fa fa-tags"></i>
				<a href="#"><?php the_tags(__('Tags: ','healthexx'), ' ', '<br />'); ?></a>						
			</li>
			<?php endif; ?>
		</ul>
		<div class="content-inner p-4">
			<h5> <?php the_title(); ?></h5>
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'healthexx' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>
</article>