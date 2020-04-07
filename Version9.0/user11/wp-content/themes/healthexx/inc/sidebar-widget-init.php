<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function healthexx_widgets_init() {
    

    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'healthexx' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-items p-4">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="widget-title"><h5>',
        'after_title'   => '</div></h5>',
    ) );
    
    $healthexx_get_all_options = healthexx_get_all_options( absint( 1 ) );

        register_sidebar(array(
            'name'          => esc_html__( 'Footer Column One', 'healthexx' ),
            'id'            => 'footer-col-one',
            'description'   => esc_html__( 'Displays items on footer section.', 'healthexx' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="foot-title">
                                <h4>',
            'after_title'   => '</h4>
                                <svg class="title-sep" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path fill-rule="evenodd" d="M84.984,12.694 L79.882,10.095 L79.882,11.932 L64.245,11.932 L61.106,8.293 L56.967,14.271 L52.820,-0.015 L50.653,15.583 L47.773,7.208 L45.062,11.932 L0.011,11.932 L0.011,13.452 L45.916,13.452 L47.432,10.819 L51.272,21.984 L53.335,7.129 L56.410,17.713 L61.235,10.749 L63.568,13.452 L79.882,13.452 L79.882,15.296 L84.984,12.694 Z"
                                    /> </svg>
                            </div>',
        ));
        
        register_sidebar(array(
            'name'          => esc_html__( 'Footer Column Two', 'healthexx' ),
            'id'            => 'footer-col-two',
            'description'   => esc_html__( 'Displays items on footer section.','healthexx' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="foot-title">
                                <h4>',
            'after_title'   => '</h4>
                                <svg class="title-sep" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path fill-rule="evenodd" d="M84.984,12.694 L79.882,10.095 L79.882,11.932 L64.245,11.932 L61.106,8.293 L56.967,14.271 L52.820,-0.015 L50.653,15.583 L47.773,7.208 L45.062,11.932 L0.011,11.932 L0.011,13.452 L45.916,13.452 L47.432,10.819 L51.272,21.984 L53.335,7.129 L56.410,17.713 L61.235,10.749 L63.568,13.452 L79.882,13.452 L79.882,15.296 L84.984,12.694 Z"
                                    /> </svg>
                            </div>',
        ));
        
        register_sidebar(array(
            'name'          => esc_html__( 'Footer Column Three', 'healthexx' ),
            'id'            => 'footer-col-three',
            'description'   => esc_html__( 'Displays items on footer section.', 'healthexx' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="foot-title">
                                <h4>',
            'after_title'   => '</h4>
                                <svg class="title-sep" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path fill-rule="evenodd" d="M84.984,12.694 L79.882,10.095 L79.882,11.932 L64.245,11.932 L61.106,8.293 L56.967,14.271 L52.820,-0.015 L50.653,15.583 L47.773,7.208 L45.062,11.932 L0.011,11.932 L0.011,13.452 L45.916,13.452 L47.432,10.819 L51.272,21.984 L53.335,7.129 L56.410,17.713 L61.235,10.749 L63.568,13.452 L79.882,13.452 L79.882,15.296 L84.984,12.694 Z"
                                    /> </svg>
                            </div>',
        ));
        
        
}
add_action( 'widgets_init', 'healthexx_widgets_init' );