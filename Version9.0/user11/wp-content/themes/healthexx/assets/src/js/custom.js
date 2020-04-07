    /*--------------------------------------------------
Project:        healthexx
Version:        1.0
Primary use:    healthexx Health & Medical Responsive HTML5 Template 
Author:         Company Name
-----------------------------------------------------

    JS INDEX
    ================================================
    * preloader js
    * scroll to top js
    * slick menu js
    * search toggle
    * service 3 slider js
    * partner slider js
    * Google map
    ================================================*/

(function ($) {
  "use strict";

  var $main_window = $(window);

  /*====================================
  preloader js
  ======================================*/
  $main_window.on("load", function () {
    $(".preloader").fadeOut("slow");
  });

  /*====================================
  scroll to top js
  ======================================*/
  $(window).load(function(){
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 250) {
      $("#c-scroll").fadeIn(200);
    } else {
      $("#c-scroll").fadeOut(200);
    }
  });
  $("#c-scroll").on("click", function () {
    $("html, body").animate({
        scrollTop: 0
      },
      "slow"
    );
    return false;
  });
  });

  /*====================================
     sticky menu js
  ======================================*/
 $(window).load(function(){
  $main_window.on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
      $(".affix").addClass("sticky-menu");
    } else {
      $(".affix").removeClass("sticky-menu");
    }
  });

});
  /*====================================
      search toggle
  ======================================*/

$(window).load(function(){
  $('a[href="#search"]').on('click', function (event) {
    $('#search').addClass('open');
  });
  $('.close').on('click', function (event) {
    $('#search').removeClass('open');

  });

});


 /*====================================
      Icon Picker
  ======================================*/



  /*====================================
       slick menu js
  ======================================*/
$(window).load(function(){
   var logo_path = jQuery('.logo').html();
  $('#menu').slicknav({
      appendTo:'.mobile-menu',
      removeClasses:true,
      label:'',
      closedSymbol:'<i class="fa fa-angle-right"><i/>',
      openedSymbol:'<i class="fa fa-angle-down"><i/>',
      brand: logo_path
  });
  });



  /*====================================
    main slider js
  ======================================*/

$(window).load(function(){
  var themelider = $(".theme-slider");
  themelider.owlCarousel({
    items: 1,
    autoplay: false,
    autoplayHoverPause: false,
    nav: false,
    smartSpeed: 1500,
    dots: true,
    loop: true,
    mouseDrag: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    navText: [
      '<i class="fa fa-arrow-left"></i>',
      '<i class="fa fa-arrow-right"></i>'
    ]
  });

});


  /*====================================
    before after images js
  ======================================*/
  $main_window.on("load", function () {
    if ($(".before-after").length > 0) {
      $(".before-after").twentytwenty();

    }
  });


  /*====================================
  service 3 slider js
  ======================================*/
  $(window).load(function(){
  var serviceslider = $(".service3-slider");
  serviceslider.owlCarousel({
    margin: 30,
    autoplay: true,
    autoplayHoverPause: true,
    nav: true,
    smartSpeed: 1000,
    dots: false,
    loop: true,
    navText: [
      '<',
      '>'
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1199: {
        items: 3,
      }
    }
  });
});


  /*====================================
    partner slider js
  ======================================*/

  var partnerslider = $(".partner-slider");
  partnerslider.owlCarousel({
    autoplay: true,
    nav: false,
    autoplayHoverPause: true,
    smartSpeed: 350,
    dots:false,
    margin: 0,
    loop: true,
    navText: [
      '<i class="fa fa-arrow-left"></i>',
      '<i class="fa fa-arrow-right"></i>'
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      575: {
        items: 2,
      },
      768: {
        items: 3,
      },
      991: {
        items: 4,
      },
      1199: {
        items: 5,
      }
    }
  });

})(jQuery);


/*======================================
  Google map
 ====================================== */
if (document.getElementById("theme-map")) {
  var myCenter = new google.maps.LatLng(-37.813628, 144.963058);

  function initialize() {
    var mapProp = {
      center: myCenter,
      scrollwheel: false,
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("theme-map"), mapProp);
    var marker = new google.maps.Marker({
      position: myCenter,
      animation: google.maps.Animation.BOUNCE,
      icon: 'assets/img/mapi.png',
      map: map,
    });
    marker.setMap(map);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
}
// map initialization code  ends