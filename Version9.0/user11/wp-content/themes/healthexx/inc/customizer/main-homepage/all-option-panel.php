<?php

global $healthexx_panels;

/*creating panel for theme settings*/
$healthexx_panels['healthexx-main-page-options'] = array(
        'title'          => esc_html__( 'Homepage / Front Page', 'healthexx' ),
        'priority'       => 230
    );
    
/*top headerbar*/
require get_template_directory().'/inc/customizer/main-homepage/top-header-bar.php';

/*feature slider*/
require get_template_directory().'/inc/customizer/main-homepage/feature-slider-setting.php';

/*about us*/
require get_template_directory().'/inc/customizer/main-homepage/about-us.php';

/*service*/
require get_template_directory().'/inc/customizer/main-homepage/service-section.php';

/*Blog-section*/
require get_template_directory().'/inc/customizer/main-homepage/blog-section.php';

/*footer options */
require get_template_directory().'/inc/customizer/main-homepage/footer.php';

// color options
require get_template_directory().'/inc/customizer/color/color-section.php';