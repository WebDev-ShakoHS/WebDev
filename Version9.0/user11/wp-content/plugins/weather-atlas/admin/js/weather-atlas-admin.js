/*<![CDATA[*/
(
	function ( $ )
	{
		'use strict';
		function init_basic()
		{
			$( '.city_name' ).autocomplete( {
				                                source: function ( request, response )
				                                {
					                                $.ajax( {
						                                        url: 'https://www.weather-atlas.com/weather/includes/autocomplete_city.php?callback=?',
						                                        dataType: 'jsonp',
						                                        data: {
							                                        limit: 15, language: weather_atlas_language, term: request.term
						                                        },
						                                        success: function ( data )
						                                        {
							                                        response( $.map( data.results, function ( item )
							                                        {
								                                        return {
									                                        label: item.city_name,
									                                        value: item.city_name + ' (' + item.city_selector + ')'
								                                        }
							                                        } ) );
						                                        }
					                                        } );
				                                }, minLength: 2, appendTo: '.autocomplete:visible', close: function ( e, ui )
				{
					if ( $( this ).val() )
					{
						var match = $( this ).val().match( /\((.*)\)/ );
						if ( match )
						{
							var city_selector = match[ 1 ];
						}
						if ( city_selector )
						{
							$( '.city_selector' ).val( city_selector );
							$( '.city_selector_shortcode' ).text( '[shortcode-weather-atlas city_selector=' + city_selector + ']' );
						}
					}
				}
			                                } );
			$( '#widgets-right' ).on( 'click', '.city_selector_shortcode_toggle_link', function ()
			{
				$( '.city_selector_shortcode_toggle_div' ).show();
				return false;
			} );
		}
		
		$( document ).ready( function ( $ )
		                     {
			                     init_basic();
			                     $( '.color_picker' ).hover( function ()
			                                                 {
				                                                 $( '.color_picker' ).wpColorPicker();
			                                                 } );
		                     } );
		$( document ).ajaxComplete( function ()
		                            {
			                            init_basic();
			                            $( '.color_picker' ).wpColorPicker();
		                            } );
	}
)( jQuery );
/*]]>*/