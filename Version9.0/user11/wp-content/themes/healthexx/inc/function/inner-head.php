<?php 

if (!function_exists('healthexx_single_page_title')) :

	/**
	* healthexx_inner_head_section
	*
	* @since healthexx 1.0.0
	*
	* @hooked null
	*/

    function healthexx_single_page_title() {
		global $healthexx_customizer_all_values;

		$healthexx_inner_baner_image = get_header_image();
	    ?>
		    <!-- page-banner start-->
    <section class="page-banner <?php if( empty( $healthexx_inner_baner_image ) ) {  echo 'no-inner-img' ; }  ?>" <?php if( !empty( $healthexx_inner_baner_image ) ) { ?> style="background-image: url('<?php echo esc_url($healthexx_inner_baner_image); ?>');"<?php } ?> >
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php if (is_singular()){ ?>
						<?php the_title( '<h3>', '</h3>' ); ?>
						<?php if (! is_page() ){?>
							<h3><?php healthexx_posted_on(); ?></h3>
						<?php } }
						elseif (is_404()) { ?>
							<h3><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'healthexx' ); ?></h3>
						<?php }
						elseif (is_archive()) {
							the_archive_title( '<h3>', '</h3>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						}
						elseif (is_search()) { ?>
    					<?php /* translators: %s: search page result */ ?>
							<h3><?php printf( esc_html__( 'Search Results for : %s', 'healthexx' ), '<h3>' . get_search_query() . '</h3>' ); ?></h3>
						<?php }
						else{ ?>
							<h3><?php  echo (esc_html__( 'Latest Blog', 'healthexx' )); ?></h3>
					<?php } ?>
					
                </div>
                <div class="col-md-6">
                    <ul class="banner-link text-md-right mt-md-0 mt-2">
                        <li>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home','healthexx'); ?></a>
                        </li>
                        <li>
                            <span class="active"><?php the_title(''); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner start-->
		<?php 
	}
endif;
add_action( 'healthexx_page_inner_title', 'healthexx_single_page_title', 15 );