<?php

if ( !function_exists('healthexx_feature_slider_array') ) :
  /**
     * Featured Slider array creation
     *
     * @since healthexx 1.0.0
     *
     * @param  $from_slider
     * @return array
     *
     */
    function healthexx_feature_slider_array($from_slider)
    {
      global $healthexx_customizer_all_values;
      $slider_excerpt_length      = absint($healthexx_customizer_all_values['healthexx-excerpt-length']);

      $reapeated_pages      = array('healthexx-page-id');
      $feature_slider_args  = array(); 
      $feature_slideer_array = array();

   
        $feature_slider_post_page = healthexx_customizer_get_repeated_all_value(3,$reapeated_pages);
        if (null !=$feature_slider_post_page ){
          foreach ($feature_slider_post_page as $feature_slider_post_pages){
            if ( 0 !=  $feature_slider_post_pages['healthexx-page-id']){
              $feature_slider_page_ids[] = $feature_slider_post_pages['healthexx-page-id'];
            }
          }
          if (!empty($feature_slider_page_ids ) ){
            $feature_slider_args = array(
              'post_type'             => 'page',
              'post__in'              => $feature_slider_page_ids,
              'order_by'              => 'post__in',
              'order'                 => 'ASC' 
            );
          }
        }
        
      
      if( !empty( $feature_slider_args )){
          // the query
          $healthexx_feature_slider_args = new WP_Query( $feature_slider_args );

          if ( $healthexx_feature_slider_args->have_posts() ) :
            while ( $healthexx_feature_slider_args->have_posts() ) : 
              $healthexx_feature_slider_args->the_post();
                $url ='';
                if(has_post_thumbnail()){
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'healthexx-slider-banner-image' );
                    $url = $thumb['0'];
                }
                else {

                    $url = '';
                }

                  $feature_slideer_array[]  =  array(
                    'healthexx-feature-title'    => get_the_title(),
                    'healthexx-feature-content'  => has_excerpt() ? get_the_excerpt() : healthexx_words_count($slider_excerpt_length, get_the_content() ),
                    'healthexx-feature-image'    => esc_url( $url ),
                    'healthexx-feature-url'      => esc_url( get_permalink() )

                  );
            endwhile;
            wp_reset_postdata();
          endif;
      }
      return $feature_slideer_array;

    }
endif;

if (!function_exists('healthexx_feature_slider')) :
   /**
     * Featured Slider
     *
     * @since healthexx 1.0.0
     *
     * @param null
     * @return null
     *
     */
 function healthexx_feature_slider()
 {

  global $healthexx_customizer_all_values;
  if(  !$healthexx_customizer_all_values['healthexx-enbale-slider'] )
  {
    return null;
  }
  $fetaure_slider_select_post        = $healthexx_customizer_all_values['healthexx-select-post-form'];
  $feature_slide_arrays              = healthexx_feature_slider_array($fetaure_slider_select_post);
  $feature_slider_button_text        = $healthexx_customizer_all_values['healthexx-slider-button-text'];
  $feature_slider_button_text2       = $healthexx_customizer_all_values['healthexx-slider-button-text2'];
  $feature_slider_button_text2_url     = $healthexx_customizer_all_values['healthexx-slider-button-text2-url'];

  if ( is_array($feature_slide_arrays) ) { ?>

  <!-- main-slider -->
  <section class="main-slider">
    <div class="theme-slider owl-carousel owl-theme">
      <?php foreach ( $feature_slide_arrays as $feature_slide_array ) {
          if( !empty( $feature_slide_array['healthexx-feature-image'] ) ) {
              $healthexx_slider_image = $feature_slide_array['healthexx-feature-image'];
          } else {
              $healthexx_slider_image  = '';
          } ?>
              <div class="slide-item">
                <img src="<?php echo esc_url($healthexx_slider_image); ?>" alt="slide">
                <div class="slide-overlay">
                  <div class="slide-table">
                    <div class="slide-table-cell">
                      <div class="container">
                        <div class="slide-content">
                          <?php if( !empty( $feature_slide_array['healthexx-feature-title'] ) ) { ?>
                              <h2><?php echo esc_html( $feature_slide_array['healthexx-feature-title'] ); ?></h2>
                          <?php } ?>
                          <?php if( !empty( $feature_slide_array['healthexx-feature-content'] ) ) { ?>
                              <p><?php echo wp_kses_post( $feature_slide_array['healthexx-feature-content'] ); ?></p>
                          <?php } ?>

                          <?php if( !empty( $feature_slider_button_text2_url ) ) { ?>
                              <a href="<?php echo esc_url( $feature_slider_button_text2_url ); ?>" target="_blank" class="btn btn-white active ml-0"><?php echo esc_html( $feature_slider_button_text2 ); ?><i class="fa fa-long-arrow-right ml-2"></i></a>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      <?php } ?>
    </div>
  </section>
  <!-- main slider ends -->

  <?php
  }
 }
endif;
add_action('healthexx_homepage_slider','healthexx_feature_slider',10);