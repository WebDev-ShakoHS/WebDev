(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	 
	 
	 	var currentRequest = null;
		
		var apww_wishlist_ajax_action_function = function( $el, $action, $id, $alert ){

		var id			= $id,
			alert_type  = $alert,
			archive 	= $( $el ).data('archive');
		
		
		if( $action == '' ){ return  false; }
		
		if( id == ''){  return false; }	
		
		
			currentRequest = jQuery.ajax({
				url : apww_object.ajaxurl,
				type : 'post',
				data : {
					action 		: $action,
					id 			: id,
					security 	: apww_object.ajax_nonce,
					archive 	: archive,
				},
				beforeSend : function()    {
					
					if(currentRequest != null) {
						currentRequest.abort();
					}
					$('.apww-error-'+ id ).append('<img class="apww-loading" src="' +  apww_object.apww_url + '/public/image/loading.gif"/>');
					
				},
				complete: function (response) {
						$( "img.apww-loading" ).remove();
				},
				success : function( response ) {
					
					var json = jQuery.parseJSON( response );
					
					if( json.success != "" ){
						
						if( alert_type == 'css_modal_alert' )
						{
							$('.apww-wishlist-action-receive').addClass('active').find('.apww-txt').html( json.success );
							
						}else if( alert_type == 'javascript_popup_alert' )
						{
							alert( json.success );
							
						}else if( alert_type == 'default_alert' )
						{
							$('.apww-error-'+ id ).append('<span class="apww-success alert alert-success">'+ json.success +'</span>');		
						}
						
						
					}
					
					var explode = function(){
						
						if( $( ".apww-success.alert.alert-success" ).length )
						{
							$('.apww-success.alert.alert-success').remove();
						}
						
						if( $action == 'apww_remove_wishlist' ){
							$($el).parents('li.product').remove();
							
							$('.appw-row-id'+ id).remove();
						}
						
					}
					setTimeout(explode, 2000);
					
				}
			});		
		
			
		};
		
		
		/* ajax add to cart */
		
		var apww_woocommerce_ajax_add_to_cart = function( $this, $product_id, $product_qty, $variation_id, $alert ){
			
			if( $product_id == '' ){ return  false; }
			
				var data = {
					action			: 'apww_woocommerce_ajax_add_to_cart',
					product_id		: $product_id,
					product_sku		: '',
					quantity		: $product_qty,
					variation		: $variation_id,
					security 		: apww_object.ajax_nonce
				};
				
				$(document.body).trigger('adding_to_cart', [$this, data]);
		 
				$.ajax({
					type: 'post',
					url: apww_object.ajaxurl,
					data: data,
					beforeSend: function (response) {
						
						$this.append('<img class="apww-loading" src="' +  apww_object.apww_url + '/public/image/loading.gif"/>');
					},
					complete: function (response) {
						$( "img.apww-loading" ).remove();
					},
					success: function (response) {
					
						if( $alert == 'css_modal_alert' )
						{
							$('.apww-wishlist-action-receive').addClass('active').find('.apww-txt').html( response.success );
							
						}else if( $alert == 'javascript_popup_alert' )
						{
							alert( json.success );
							
						}else if( $alert == 'default_alert' )
						{
							$('.apww-error-'+ id ).append('<span class="apww-success alert alert-success">'+ response.success +'</span>');		
						}
						
						
					},
				});
		 
		
		};
		
		
	 $(function() {
		
		
		$(document).on('click',".appw-onclick-action-url",function(e){	
			e.stopPropagation();
			if( $(this).data( 'url' ) != "" ){
				 location.replace( $(this).data( 'url' ) );
			}
		});
		
		$(document).on('click',".appw-modal-close-button",function(e){	
			e.stopPropagation();
			$('.apww-wishlist-modal').removeClass('active').find('.apww-txt').html();
		});
			
		/* action for wishlist saveing ad removing */
		 if( $('.apww-wishlist-action.appw-add').length ){  
			$(document).on('click',".apww-wishlist-action.appw-add",function(e){	
				e.stopPropagation();
				apww_wishlist_ajax_action_function( $( this ) ,'apww_save_wishlist', $(this).data('apww-button-id'),$(this).data('alert') );
			});
		 }
		 
		 if( $('.apww-wishlist-action.appw-remove').length ){  
			$(document).on('click',".apww-wishlist-action.appw-remove",function(e){	
				e.stopPropagation();
				apww_wishlist_ajax_action_function( $( this ) ,'apww_remove_wishlist', $(this).data('apww-button-id'),$(this).data('alert') );
			});
		 }
		 
		  if( $('.apww-wishlist-action.appw-remove').length ){  
			$(document).on('click',".apww-wishlist-action.appw-remove",function(e){	
				e.stopPropagation();
				apww_wishlist_ajax_action_function( $( this ) ,'apww_remove_wishlist', $(this).data('apww-button-id'),$(this).data('alert') );
			});
		 }
		 
		 /** bulk remove wishlist */
		  if( $('.apww-wishlist-bulk-remove-action').length ){  
			$(document).on('click',".apww-wishlist-bulk-remove-action",function(e){	
				e.stopPropagation();
				
				var bulk_id = $('input[name="apww-bulk-action[]"]:checked').map(function () {
					return this.value; // $(this).val()
				}).get();
				
				apww_wishlist_ajax_action_function( $( this ) ,'apww_remove_wishlist', bulk_id, $( this ).data('alert') );
				
				$('input[name="apww-bulk-action[]"]:checked').each( function() {
					
                   	var id_v = $(this).val();
					var explode = function(){ $('.appw-row-id'+ id_v ).hide(); }
					setTimeout(explode, 4000);
					
					
                });
				
				
			});
		 }
		 
		 /* action for wishlist saveing ad removing */
		 
		 
		 
		 
		 if( $('.apww-share-button-wrap').length ){  
		  
			$(document).on('click',".apww-share-button-wrap a",function(e){	
				
				var  unique_id = $(this).data('unique_id') ;
				
				if( typeof unique_id == "undefined" ){
					e.preventDefault();
				}
				
				jQuery.ajax({
					url : apww_object.ajaxurl,
					type : 'post',
					data : {
						action 		: 'apww_social_share_data_create',
						security 	: apww_object.ajax_nonce,
						unique_id 	: unique_id
					}
				});	
				
			});
			
		 }
		 
		 
		 
		 if( $('.appw-action-wishlist-load-modal').length ){  
		  
			$(document).on('click',".appw-action-wishlist-load-modal",function(e){	
			
				$('.apww-wishlist-create-wishlist-action').addClass('active');
				
			});
			
		 }
		 if( $('.appw-wishlist-archive-action').length ){  
		  
			$(document).on('click',".appw-wishlist-archive-action",function(e){	
			
				var  user_id   = $(this).data('user_id'),
					 name	   = $('#apww-wishlist-input-'+user_id).val(),
					 pre_name  = $('#apww-choose-wishlit-'+user_id).val(),
					 $this	   = $(this);
				
					
				if( typeof user_id == "undefined" ){
					return false;
				}
				
				jQuery.ajax({
					url  : apww_object.ajaxurl,
					type : 'post',
					data : {
						action 		: 'apww_create_wishlist_category',
						security 	: apww_object.ajax_nonce,
						user_id 	: user_id,
						name 		: name,
						pre_name 	: pre_name,
					},
					beforeSend : function()    {
						$this.append('<img class="apww-loading" src="' +  apww_object.apww_url + '/public/image/loading.gif"/>');
					
					},
					success : function( response ) {
						$this.find('img').remove();
						$('.apww-wishlist-save-wrap').hide();
						$('.appw-wishlist-archive-action').hide();
						$('.apww-wishlist-info').show();
					}
				});	
				
			});
			
		 }
		
		
		 if( $('.appw-wishlist-archive-action-delete').length ){  
		  
			$(document).on('click',".appw-wishlist-archive-action-delete",function(e){	
			
				var  user_id   = $(this).data('user_id'),
					 del_key   = $(this).data('key'),
					  $this	   = $(this),
					alert_type = $(this).data('alert');
				
				
					
				if( typeof user_id == "undefined" && typeof del_key == "undefined" ){
					return false;
				}
			
				jQuery.ajax({
					url  : apww_object.ajaxurl,
					type : 'post',
					data : {
						action 		: 'apww_delete_wishlist_archive',
						security 	: apww_object.ajax_nonce,
						user_id 	: user_id,
						del_key 	: del_key,
						
					},
					beforeSend : function()    {
						$this.append('<img class="apww-loading" src="' +  apww_object.apww_url + '/public/image/loading.gif"/>');
					
					},
					success : function( response ) {
						
						
						
						$this.find('img').remove();
						
						if( response != "" ){
							
							if( alert_type == 'css_modal_alert' )
							{
								$('.apww-wishlist-action-receive').addClass('active').find('.apww-txt').html( response );
								$('.apww-wishlist-action-receive').find('.appw-onclick-action-url').hide();
								
							}else if( alert_type == 'javascript_popup_alert' )
							{
								alert( response );
								
							}else if( alert_type == 'default_alert' )
							{
								$('.apww-error-'+ id ).append('<span class="apww-success alert alert-success">'+ response +'</span>');		
							}
						}
						
					}
				});	
				
			});
			
		 }
		
		
	
		 if( $('.apww_single_add_to_cart_button').length ){  
		 
			$(document).on('click',".apww_single_add_to_cart_button",function(e){	
				
				e.preventDefault();
		 
				var $thisbutton		  = $(this),
						product_id 	  = $thisbutton.val(),
						product_qty   = $('input[name="apww-get-product-quantity-'+ product_id +'"]').val() || 1,
						variation_obj = {},
						$alert		  = $(this).data('alert');
						
						if( $('select[name="apww-get-variation-attribute-'+ product_id +'[]"]').length ){
							
							$('select[name="apww-get-variation-attribute-'+ product_id +'[]"]').each( function() {
								
								if( $(this).find('option:selected').val() != "" ){
								   variation_obj[ $(this).data('attribute_name') ] = $(this).find('option:selected').val();
								}
								
							});
							
						}
						
				 apww_woocommerce_ajax_add_to_cart( $thisbutton, product_id, product_qty, variation_obj, $alert );
				
				
				return false;
				
				
			});
			
		 }
		 
		  if( $('.apww_wishlist_bulk_add_to_cart_action').length ){  
		 
			$(document).on('click',".apww_wishlist_bulk_add_to_cart_action",function(e){	
				
				e.preventDefault();
				
				var $thisbutton		  = $(this),
						product_id 	  = $thisbutton.val(),
						product_qty   = $('input[name="apww-get-product-quantity-'+ product_id +'"]').val() || 1,
						variation_obj = {},
						$alert		  = $(this).data('alert');
						
						
				
		 		var product_id    = [],
					product_qty   = {},
					variation_obj = {},
					variation	  = {},
					$alert		  = $(this).data('alert');
				
				$('input[name="apww-bulk-action[]"]:checked').each( function() {
					
					product_id.push( this.value );
					
					product_qty[ this.value ] = $('input[name="apww-get-product-quantity-'+ this.value +'"]').val() || 1;
					
					if( $('select[name="apww-get-variation-attribute-'+ this.value +'[]"]').length ){
							
							$('select[name="apww-get-variation-attribute-'+ this.value +'[]"]').each( function() {
								
								if( $(this).find('option:selected').val() != "" ){
								   variation[ $(this).data('attribute_name') ] = $(this).find('option:selected').val();
								}
								
							});
					variation_obj[ this.value ] = variation;
					}
						
					
				});
					
				apww_woocommerce_ajax_add_to_cart( $( this ), product_id, product_qty, variation_obj, $alert );
				
				
				//apww_woocommerce_ajax_add_to_cart( $( this ) , bulk_id, $( this ).data('alert') );
				
				return false;
				
				
			});
			
		 }
		
		 
		 
		 
		 
	 
	 });
})( jQuery );


