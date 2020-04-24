<?php 
if( !function_exists('healthexx_content_section') ) :
	/**
	*
	* content Section
	*
	* @since healthexx 1.0.0
	*
	* @param null
	* @return null
	*
	*/ 
	function healthexx_content_section(){
		global $healthexx_customizer_all_values;

		if(have_posts()) : 
			while(have_posts()) : the_post();
				if(get_the_content()!= "") { ?>
					<section>
						<div class="container">
					   		<div class="row">
					    		<?php the_content(); ?> 
					    	</div>
						</div> 
					</section>  
				<?php } 
			endwhile;
		endif;
	}
endif;
add_action('healthexx_homepage','healthexx_content_section', 20);     