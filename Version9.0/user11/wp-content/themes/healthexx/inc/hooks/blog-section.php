<?php
if( !function_exists('healthexx_blog_section') ) :
	/**
	*
	* Blog Section
	*
	* @since healthexx 1.0.0
	* 
	* @param null
	* @return null
	*
	*/
	function healthexx_blog_section(){
		global $healthexx_customizer_all_values;

		$blog_title 			 = $healthexx_customizer_all_values['healthexx-blog-section-title-text'];
        $blog_subtitle           = $healthexx_customizer_all_values['healthexx-blog-section-subtitle-text'];
		$blog_single_number_word = $healthexx_customizer_all_values['healthexx-blog-excerpt-length'];
		$blog_button_text 		 = $healthexx_customizer_all_values['healthexx-blog-button-text'];
		$bolg_category 			 = $healthexx_customizer_all_values['healthexx-blog-select-category'];

		if( 1 != $healthexx_customizer_all_values['healthexx-blog-section-enable'] ){
			return null;
		} ?>
		<?php if( !empty( $blog_title ) || !empty( $bolg_category ) ) { ?>
        	<!-- blog start -->
            <section class="blog bg-dull sp-100-70">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="all-title">
                                <?php if( !empty( $blog_title ) ) { ?>
                                    <h3 class="sec-title">
                                        <?php echo esc_html($blog_title);?>
                                    </h3>
                                    <svg class="title-sep" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path fill-rule="evenodd" d="M84.984,12.694 L79.882,10.095 L79.882,11.932 L64.245,11.932 L61.106,8.293 L56.967,14.271 L52.820,-0.015 L50.653,15.583 L47.773,7.208 L45.062,11.932 L0.011,11.932 L0.011,13.452 L45.916,13.452 L47.432,10.819 L51.272,21.984 L53.335,7.129 L56.410,17.713 L61.235,10.749 L63.568,13.452 L79.882,13.452 L79.882,15.296 L84.984,12.694 Z"
                                        /> </svg>
                                <?php }  ?>
                                <?php if( !empty( $blog_subtitle ) ) { ?>
                                    <p><?php echo esc_html($blog_subtitle);?></p>
                                <?php }  ?>
                            </div>
                        </div>
                    </div>
                    <div class="row center-grid">
                        <?php
                            if( 0 != $bolg_category ){
                                $blog_args = array(
                                    'post_type'             => 'post',
                                    'posts_per_page'        => 3,
                                    'cat'                   => absint($bolg_category),
                                    'ignore_sticky_posts'   => 1
                                );

                                /*query start*/
                                $bolg_args_query = new WP_Query( $blog_args );
                                if( $bolg_args_query->have_posts() ) :
                                    while( $bolg_args_query->have_posts() ) : 
                                        $bolg_args_query->the_post() ;
                                        $thumb_img = '' ;
                                        $img_attr_id = get_post_thumbnail_id( get_the_ID() );
                                        $img_attr    =  get_post_meta($img_attr_id,'_wp_attachment_image_alt',true)

                                        ?>
                                        <div class="col-md-4 col-sm-12">
                                            <article class="blog-item blog-3">
                                                <?php if( has_post_thumbnail() ) { ?>
                                                    <div class="post-img">
                                                        <?php the_post_thumbnail(); ?>
                                                    </div>
                                                <?php } ?>
                                                <div class="post-content">
                                                    <ul class="post-meta">
                                                        <li>
                                                            <i class="fa fa-user"></i>
                                                            <a href=""><?php echo esc_html( get_the_author() ) ; ?></a>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-calendar"></i>
                                                            <?php echo esc_html(get_the_date('M j , Y') );?>
                                                        </li>
                                                    </ul>
                                                    <div class="content-inner p-4">
                                                        <h5>
                                                            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                        </h5>
                                                        <p>
                                                            <?php 
                                                                if( has_excerpt() ){
                                                                    the_excerpt();
                                                                }else{
                                                                    $blog_content = get_the_content();
                                                                    echo wp_kses_post(healthexx_words_count( $blog_single_number_word, $blog_content) );
                                                                }
                                                            ?>
                                                        </p>
                                                        <a href="<?php the_permalink(); ?>" class="read-more">
                                                            <?php echo esc_html( $blog_button_text );?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    <?php endwhile;
                                      wp_reset_postdata();
                                endif;
                            } ?>
                    </div>
                </div>
            </section>
            <!-- end blog -->	
		<?php } ?>
	<?php }
endif;
add_action('healthexx_homepage','healthexx_blog_section',80);