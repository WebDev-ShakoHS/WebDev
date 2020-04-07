<?php
if( !function_exists('healthexx_service_array') ) :
	/**
     * service array creation
     *
     * @since healthexx 1.0.0
     *
     * @param  $from_service
     * @return array
     *
     */
	function healthexx_service_array($from_service){
		global $healthexx_customizer_all_values;

		$service_single_number_words 	= absint($healthexx_customizer_all_values['healthexx-service-excerpt-length']);
		$service_page_array 			= array();
		$repeated_page					= array('service-page-ids');
		$repeated_icon					= array('service-icons-ids');

		$service_post_page 	=  healthexx_customizer_get_repeated_all_value(6,$repeated_page);
		$service_post_icon	=  healthexx_customizer_get_repeated_all_value(6,$repeated_icon);

		$service_page_id	= array();

		
			if( null != $service_post_page) {
				foreach ( $service_post_page as $service_post_pages ){
					if( 0 != $service_post_pages['service-page-ids'] ){
						$service_page_id[]  =  $service_post_pages['service-page-ids'];
					}
				}
				if( !empty($service_page_id) ) {
					$healthexx_service_arg 	= array(
						'post_type'				=> 'page',
						'post__in'				=> $service_page_id,
						'orderby'				=> 'post__in',
						'order'					=> 'ASC'
					); 
				}
			}
		

		if( !empty($healthexx_service_arg) ){
			$healthexx_service_query		= new WP_Query($healthexx_service_arg);
			if( $healthexx_service_query->have_posts() ):
				$i = 1;
				while( $healthexx_service_query->have_posts() ) :
					$healthexx_service_query->the_post();
	
	                $service_page_array[] = array(
	                	'service-title'				=> get_the_title(),
	                	'service-content' 			=> has_excerpt() ? get_the_excerpt() : healthexx_words_count($service_single_number_words,get_the_content() ) ,
	                	'service-url'				=> esc_url(get_the_permalink()),
	                	'service-icons-ids'			=> isset($service_post_icon[$i]['service-icons-ids']) ? $service_post_icon[$i]['service-icons-ids'] : 'fa-apple'
	                );

					$i++;
				endwhile; 
				wp_reset_postdata();
			endif;
		}
		return $service_page_array;
	}
endif;


if( !function_exists('healthexx_service_section') ) :
	/**
	*
	* service Section
	*
	* @since healthexx 1.0.0
	*
	* @param null
	* @return null
	*
	*/
	function healthexx_service_section(){
		global $healthexx_customizer_all_values;

		if( 1 != $healthexx_customizer_all_values['healthexx-service-enable'] ){
			return null;
		}
		$healthexx_service_post_selection 	= $healthexx_customizer_all_values['healthexx-service-select-form'];
		$healthexx_service_section_title  	= $healthexx_customizer_all_values['healthexx-service-section-title'];
		$healthexx_service_section_subtitle  = $healthexx_customizer_all_values['healthexx-service-section-subtitle'];
		$healthexx_service_button_text  		= $healthexx_customizer_all_values['healthexx-service-button-text'];
		$healthexx_service_button_url   		= $healthexx_customizer_all_values['healthexx-service-button-url'];
		$healthexx_services 					= healthexx_service_array( $healthexx_service_post_selection );

		if( !empty( $healthexx_service_section_title ) || !empty( $healthexx_service_section_sub_title ) || count($healthexx_services > 0 ) ) { ?>
			<!-- start services -->
        <section class="services services-3 sp-100-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all-title">
                         <?php if( !empty( $healthexx_service_section_title ) ) {  ?>
                            <h3 class="sec-title">
                                <?php echo esc_html( $healthexx_service_section_title ); ?>
                            </h3>
                            <svg class="title-sep" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path fill-rule="evenodd" d="M84.984,12.694 L79.882,10.095 L79.882,11.932 L64.245,11.932 L61.106,8.293 L56.967,14.271 L52.820,-0.015 L50.653,15.583 L47.773,7.208 L45.062,11.932 L0.011,11.932 L0.011,13.452 L45.916,13.452 L47.432,10.819 L51.272,21.984 L53.335,7.129 L56.410,17.713 L61.235,10.749 L63.568,13.452 L79.882,13.452 L79.882,15.296 L84.984,12.694 Z"
                                /> </svg>
                        <?php } ?>
                        <?php if( !empty( $healthexx_service_section_subtitle ) ) {  ?>
                            <p><?php echo esc_html( $healthexx_service_section_subtitle ); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php if( is_array( $healthexx_services ) && !empty( $healthexx_services ) ) { ?>
            <div class="row">
                <?php foreach( $healthexx_services as $healthexx_service ){ ?>
                <div class="col-lg-6 col-12">
                    <div class="service-box3">
                        <div class="service-left">
                            <i class="fa <?php echo esc_attr($healthexx_service['service-icons-ids']);?>"></i>
                            <?php if( !empty( $healthexx_service['service-title'] ) ) { ?>
                                <h5><a href="<?php echo esc_url($healthexx_service['service-url']);?>"><?php echo esc_html($healthexx_service['service-title']);?></a></h5>
                            <?php } ?>
                        </div>
                        <div class="service-right">
                            <?php if( !empty( $healthexx_service['service-content'] ) ) { ?>
                                <p><?php echo wp_kses_post( $healthexx_service['service-content'] ); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php 
                    } ?>
            </div>
            <?php } ?>
        </div>
    </section>

            <!-- end services -->
		<?php }
	}
endif;
add_action('healthexx_homepage','healthexx_service_section', 30);