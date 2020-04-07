<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package healthexx
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<div class="all-title mb-40 text-left">
		    <h4 class="sec-title">
			   <?php
			   $healthexx_comment_count = get_comments_number();
			    if ( '1' === $healthexx_comment_count ) {
				    printf(
					/* translators: 1: title. */
					esc_html__( 'One Comment', 'healthexx' ),
					'<span>' . esc_html(get_the_title()) . '</span>'
				    );
			    } else {
				   printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', 
						esc_html($healthexx_comment_count), 'comments title', 'healthexx' ) ),
					esc_html(number_format_i18n( $healthexx_comment_count )),
					'<span>' . esc_html(get_the_title()) . '</span>'
				  );
			    }
			    ?>
		    </h4><!-- .comments-title -->
		    <svg class="title-sep" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path fill-rule="evenodd" d="M84.984,12.694 L79.882,10.095 L79.882,11.932 L64.245,11.932 L61.106,8.293 L56.967,14.271 L52.820,-0.015 L50.653,15.583 L47.773,7.208 L45.062,11.932 L0.011,11.932 L0.011,13.452 L45.916,13.452 L47.432,10.819 L51.272,21.984 L53.335,7.129 L56.410,17.713 L61.235,10.749 L63.568,13.452 L79.882,13.452 L79.882,15.296 L84.984,12.694 Z"></path>
            </svg>
        </div>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'healthexx' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->