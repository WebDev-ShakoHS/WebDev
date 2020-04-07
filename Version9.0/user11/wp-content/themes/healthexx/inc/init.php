<?php
/**
 * healthexx themes init file
 *
 * @package healthexx themes
 * @subpackage healthexx
 * @since healthexx 1.0.0
 */

require trailingslashit(get_template_directory() ).'/inc/customizer/customizer.php';

require trailingslashit(get_template_directory() ) .'/inc/hooks/header.php';

require trailingslashit(get_template_directory() ).'/inc/hooks/homepage-slider.php';

require trailingslashit(get_template_directory() ).'/inc/hooks/thecontent.php'; 

require trailingslashit(get_template_directory() ).'/inc/hooks/about-us.php';

require trailingslashit(get_template_directory() ).'/inc/hooks/service-section.php';

require trailingslashit(get_template_directory() ).'/inc/hooks/blog-section.php';

require trailingslashit(get_template_directory() ) .'/inc/sidebar-widget-init.php';

require trailingslashit(get_template_directory() ) .'/inc/hooks/excerpt.php';

require trailingslashit(get_template_directory() ) .'/inc/function/words-count.php';

require trailingslashit(get_template_directory() ) .'/inc/function/inner-head.php';

require trailingslashit(get_template_directory() ) .'/inc/function/single-image-align.php';

require trailingslashit(get_template_directory() ) .'/inc/hooks/footer.php';