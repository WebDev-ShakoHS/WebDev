<?php
if( !function_exists('healthexx_about_us_section_array') ) :
	/**
	*
	* About us Section array
	*
	* @since healthexx 1.0.0
	* 
	* @param null
	* @return array
	*/
	function healthexx_about_us_section_array(){
		global $healthexx_customizer_all_values;

		$healthexx_about_us_single_word_right = $healthexx_customizer_all_values['healthexx-excerpt-length-right'];
		$repeated_page = array('abouts-us-page-right-ids');
		$repeated_icon = array('about-us-right-icons-ids');
		$about_us_args = array();

		$about_us_pages   	= healthexx_customizer_get_repeated_all_value(3,$repeated_page);
		$about_us_page_icon = healthexx_customizer_get_repeated_all_value(3, $repeated_icon ); 

		$about_us_page_id = array();
		$about_us_array   = array();

		if( null != $about_us_pages ){
			foreach (  $about_us_pages as $about_us_page ){
				if( 0 != $about_us_page['abouts-us-page-right-ids'] ){
					$about_us_page_id[] = $about_us_page['abouts-us-page-right-ids'];
				}
			}
			if( !empty( $about_us_page_id ) ){
				$about_us_args = array(
					'post_type'		=> 'page',
					'post__in'		=> $about_us_page_id,
					'order_by'		=> 'post__in',
					'order'			=> 'ASC'
				);

			}
		}

		/*query start */
		if( !empty( $about_us_args ) ){
			$about_us_query_args = new WP_Query( $about_us_args );
			if( $about_us_query_args->have_posts() ) :
				$i = 1;
				while( $about_us_query_args->have_posts() ) :
					$about_us_query_args->the_post();
					$thumb_img = '';
					if( has_post_thumbnail() ){
						$post_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ));
						$thumb_img = $post_image[0];
					}

					$about_us_array[] = array(
						'about-us-title' 	=> get_the_title(),
						'about-us-content'	=>  healthexx_words_count( $healthexx_about_us_single_word_right, get_the_content() ),
						'about-us-image'	=> esc_url( $thumb_img ),
						'about-us-link'		=> esc_url( get_the_permalink() ),
						'about-us-right-icons-ids'		=> isset( $about_us_page_icon[$i]['about-us-right-icons-ids'] ) ? $about_us_page_icon[$i]['about-us-right-icons-ids'] : 'fa-apple'
					);
					$i++;
				endwhile;
				wp_reset_postdata();
			endif;
		}
		return $about_us_array;
	}
endif;


if( !function_exists( 'healthexx_about_us_section' ) ):
	/**
	*
	* @since healthexx 1.0.0
	*
	* @param null
	* @return null
	*
	*/
	function healthexx_about_us_section(){
		global $healthexx_customizer_all_values;

		if( 1 != $healthexx_customizer_all_values['healthexx-enable-about-us'] ){
			return null;
		}
		$healthexx_about_us = healthexx_about_us_section_array();
		$healthexx_about_us_title 			= $healthexx_customizer_all_values['healthexx-about-us-title'];
		$healthexx_about_us_single_word_left 	= $healthexx_customizer_all_values['healthexx-excerpt-length-left'];
		$healthexx_about_us_button_text 		= $healthexx_customizer_all_values['healthexx-about-us-button-text'];
		$about_us_left_page 				= $healthexx_customizer_all_values['healthexx-about-us-select-page'];
		 ?>
		<?php if(  !empty( $healthexx_about_us_title )  || count( $healthexx_about_us ) > 0 ||  !empty($about_us_left_page )  )
		{ ?>
		    <!-- start about us -->
			<section class="about about-3 bg-dull sp-100">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12">
		                    <?php if( !empty( $healthexx_about_us_title ) ) {  ?>
		                    <div class="all-title text-left">
		                        <h3 class="sec-title">
		                            <?php echo esc_html( $healthexx_about_us_title ); ?>
		                        </h3>
		                        <svg class="title-sep" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		                            <path fill-rule="evenodd" d="M84.984,12.694 L79.882,10.095 L79.882,11.932 L64.245,11.932 L61.106,8.293 L56.967,14.271 L52.820,-0.015 L50.653,15.583 L47.773,7.208 L45.062,11.932 L0.011,11.932 L0.011,13.452 L45.916,13.452 L47.432,10.819 L51.272,21.984 L53.335,7.129 L56.410,17.713 L61.235,10.749 L63.568,13.452 L79.882,13.452 L79.882,15.296 L84.984,12.694 Z"
		                            /> </svg>
		                    </div>
		                    <?php } ?>
		                </div>
		            </div>
		            <?php if( !empty( $about_us_left_page ) || count( $healthexx_about_us ) > 0 ) { ?>
		                <?php if( $about_us_left_page )  { ?>
		                    <?php
		                    $about_us_left_page_args = array();
		                    if( 0 !=  $about_us_left_page  ){
		                        $about_us_left_page_args = array(
		                            'post_type'             => 'page',
		                            'p'                     => $about_us_left_page,
		                            'ignore_sticky_posts'   => 1
		                        );
		                        /*query start*/
		                        $left_page_query_args = new WP_Query( $about_us_left_page_args );
		                        if(  $left_page_query_args->have_posts() ) :
		                            while( $left_page_query_args->have_posts() ) :
		                                $left_page_query_args->the_post();
		                                $left_img = '';
		                                if( has_post_thumbnail() ){
		                                    $imageUrl =  wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ),'full');
		                                    $left_img = $imageUrl[0];
		                                } ?>
		                                                
		                                <?php 
		                                    $left_page_content = healthexx_words_count( $healthexx_about_us_single_word_left, get_the_content() );
		                                ?>
		                                <?php if( has_post_thumbnail() ){ ?>
								            <div class="row">
								                <div class="col-lg-6 col-md-6 col-12">
								                    <div class="abt-slider">
								                        <div class="slide-item">
								                            <img src="<?php echo esc_url($left_img); ?>">
								                        </div>
								                    </div>
								                </div>

								                <div class="col-lg-6 col-md-6 col-12 mt-5 mt-md-0">
								                    <div class="about-content">
								                        <p><?php echo wp_kses_post( $left_page_content ); ?></p>
								                        <a href="<?php the_permalink(); ?>" class="btn btn-blue btn-shadow br-5 mt-2">read more</a>
								                    </div>
								                </div>
								            </div>
								        <?php } else { ?>
								        	<div class="row">
									        	<div class="col-lg-12 col-md-12 col-12 mt-5 mt-md-0">
								                    <div class="about-content">
								                        <p><?php echo wp_kses_post( $left_page_content ); ?></p>
								                        <a href="<?php the_permalink(); ?>" class="btn btn-blue btn-shadow br-5 mt-2">read more</a>
								                    </div>
								                </div>
								            </div>
								        <?php } ?>
		                            <?php endwhile; 
		                            wp_reset_query(); 
		                            wp_reset_postdata();?>
		                        <?php endif; 
		                    } ?>
		                <?php } ?>
		            <?php }   ?>
		        </div>
			</section>
		 <?php 
	    }
	}
endif;
add_action( 'healthexx_homepage','healthexx_about_us_section',20 );