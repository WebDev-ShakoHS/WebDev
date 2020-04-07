/*<![CDATA[*/
(
	function ( $ )
	{
		'use strict';
		$( document ).ready( function ( $ )
		                     {
			                     $( '.city_name' ).autocomplete( {
				                                                     source: function ( request, response )
				                                                     {
					                                                     $.ajax( {
						                                                             url: 'https://www.weather-atlas.com/weather/includes/autocomplete_city.php?callback=?',
						                                                             dataType: 'jsonp',
						                                                             data: {
							                                                             limit: 15,
							                                                             language: weather_atlas_language,
							                                                             term: request.term
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
				                                                     },
				                                                     minLength: 2,
				                                                     appendTo: '.autocomplete:visible',
				                                                     close: function ( e, ui )
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
							                                                     Cookies.set( 'city_selector', city_selector, {
								                                                     expires: 3650, path: '/'
							                                                     } );
							                                                     location.reload();
							                                                     return false;
						                                                     }
					                                                     }
				                                                     }
			                                                     } );
			                     $( '.city_selector_toggle' ).on( 'click', '.city_selector_toggle_link', function ()
			                     {
				                     $( '.weather-atlas-header-title' ).toggle();
				                     $( '.city_selector_toggle_div' ).toggle();
				                     $( '.city_name' ).focus();
				                     return false;
			                     } );
		                     } );
	}
)( jQuery );
/*]]>*/