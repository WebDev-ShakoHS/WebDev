<?php
if ( class_exists( 'WP_Customize_Control' ) && !class_exists( 'healthexx_Customizer_Message_Control' ) ){
    /**
     * Custom Control for html display
     * @since 1.0.0
     *
     */
    class healthexx_Customizer_Message_Control extends WP_Customize_Control {

        /**
         * Declare the control type.
         *
         * @access public
         * @var string
         */
        public $type = 'message';

        /**
         * Function to  render the content on the theme customizer page
         *
         * @access public
         * @since 1.0.0
         *
         * @param null
         * @return void
         *
         */
        public function render_content() {
            if ( empty( $this->description ) ) {
                return;
            }
            ?>
            <div class="evision-customizer-message">
                <?php echo wp_kses_post( $this->description ); ?>
            </div> <!-- .evision-customizer-message-->
            <?php
        }
    }
}

