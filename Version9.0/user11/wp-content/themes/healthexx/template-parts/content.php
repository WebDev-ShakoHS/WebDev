<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package healthexx
 */

global $healthexx_customizer_all_values;

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="col-12">
	<article class="blog-item">
		<?php if ( has_post_thumbnail() ): ?>
			<div class='post-img'>
				<a href="<?php echo esc_url(get_permalink() );?>">
					<?php the_post_thumbnail(); ?>
				</a>
			</div>
		<?php endif ?>
	   
		<div class="post-content">
			<ul class="post-meta">
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
			</ul>
			<div class="content-inner p-4">
				<?php the_title( sprintf( '<h5><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="read-more">
					<?php esc_html_e('read more', 'healthexx') ?>
				</a>
			</div>
		</div>
	</article>
</div>