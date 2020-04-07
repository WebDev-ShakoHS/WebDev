<?php
if(!function_exists('healthexx_contact_us') ) :
	/**
	*
	* Contact US
	*
	* @since healthexx 1.0.0
	*
	* @param null
	* @return null
	*
	*/

	function healthexx_contact_us(){
		global $healthexx_customizer_all_values;

		$healthexx_address_logo 		= $healthexx_customizer_all_values['healthexx-contact-address-logo'];
		$healthexx_address_title 		= $healthexx_customizer_all_values['healthexx-contact-address-title'];
		$healthexx_address_sub_text 	= $healthexx_customizer_all_values['healthexx-contact-address-sub-text'];
		$healthexx_phone_logo 		= $healthexx_customizer_all_values['healthexx-contact-phone-logo'];
		$healthexx_phone_title 		= $healthexx_customizer_all_values['healthexx-contact-phone-title'];
		$healthexx_phone_sub_text 	= $healthexx_customizer_all_values['healthexx-contact-phone-sub-text'];
		$healthexx_email_logo 		= $healthexx_customizer_all_values['healthexx-contact-email-logo'];
		$healthexx_email_title 		= $healthexx_customizer_all_values['healthexx-contact-email-title'];
		$healthexx_email_sub_text 	= $healthexx_customizer_all_values['healthexx-contact-email-sub-text'];

		if( 1 != $healthexx_customizer_all_values['healthexx-contact-section-enable'] ){
			return null;
		} ?>
			<section class="contact-section bt-bg-primary py-5 wow fadeIn" data-wow-duration="1.2s">
				<div class="container">
					<div class="row">
						<?php if( !empty( $healthexx_address_logo ) || !empty( $healthexx_address_title ) || !empty( $healthexx_address_sub_text ) ) { ?>
							<div class="col-12 col-md-4 position-relative bt-contact-wrapper mb-4 mb-md-0">
								<div class="bt-contact-border-right">
									<i class="fa <?php echo esc_attr($healthexx_address_logo);?> contact-icon d-flex align-items-center justify-content-center rounded-circle"></i>
									<div class="bt-contact-info">
										<?php if( !empty( $healthexx_address_title ) ) { ?>
							            	<h5 class="text-white mb-1"><?php echo esc_html( $healthexx_address_title ); ?></h5>
							            <?php } ?>
							            <?php if( !empty( $healthexx_address_sub_text ) ) { ?>
							            	<span class="text-white"><?php echo esc_html( $healthexx_address_sub_text ); ?></span>
							            <?php } ?>
							         </div>
							     </div>
							</div>
						<?php } ?>
						<?php if( !empty( $healthexx_phone_logo ) || !empty( $healthexx_phone_title ) || !empty( $healthexx_phone_sub_text ) ) {  ?>
							<div class="col-12 col-md-4 position-relative bt-contact-wrapper mb-4 mb-md-0">
								<div class="bt-contact-border-right">
									<?php if( !empty( $healthexx_phone_logo ) ) { ?>
										<i class="fa <?php echo esc_attr($healthexx_phone_logo);?> contact-icon d-flex align-items-center justify-content-center rounded-circle"></i>
									<?php } ?>
									<div class="bt-contact-info">
										<?php if( !empty( $healthexx_phone_title ) ) { ?>
							            	<h5 class="text-white mb-1"><?php echo esc_html( $healthexx_phone_title ); ?></h5>
							            <?php } ?>
							            <?php if( !empty( $healthexx_phone_sub_text ) ) { ?>
							            	<span class="text-white"><?php echo esc_html( $healthexx_phone_sub_text ); ?></span>
							            <?php } ?>
							         </div>
							     </div>
							</div>
						<?php } ?>
						<?php if( !empty( $healthexx_email_logo ) || !empty( $healthexx_email_title ) || !empty( $healthexx_email_sub_text ) ) { ?>
							<div class="col-12 col-md-4 position-relative bt-contact-wrapper mb-0">
								<div class="bt-contact-border-right">
									<?php if( !empty( $healthexx_email_logo ) ) { ?>
										<i class="fa <?php echo esc_attr($healthexx_email_logo);?> contact-icon d-flex align-items-center justify-content-center rounded-circle"></i>
									<?php } ?>
									<div class="bt-contact-info">
										<?php if( !empty( $healthexx_email_title ) ) { ?>
							            	<h5 class="text-white mb-1"><?php echo esc_html( $healthexx_email_title ); ?></h5>
							            <?php } ?>
							            <?php if(!empty( $healthexx_email_sub_text ) ) { ?>
							            	<span class="text-white"><?php echo esc_html( $healthexx_email_sub_text ); ?></span>
							            <?php } ?>
							         </div>
							     </div>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>
	<?php }

endif;
add_action( 'healthexx_homepage','healthexx_contact_us',90 );