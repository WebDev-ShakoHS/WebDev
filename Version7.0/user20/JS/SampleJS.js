function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

/**

* Sets a Cookie with the given name and value.

*

* name       Name of the cookie

* value      Value of the cookie

* [expires]  Expiration date of the cookie (default: end of current session)

* [path]     Path where the cookie is valid (default: path of calling document)

* [domain]   Domain where the cookie is valid

*              (default: domain of calling document)

* [secure]   Boolean value indicating if the cookie transmission requires a

*              secure transmission

*/                        

function setCookie(name, value, expires, path, domain, secure) {

  document.cookie= name + "=" + escape(value) +

      ((expires) ? "; expires=" + expires.toGMTString() : "") +

      ((path) ? "; path=" + path : "") +

      ((domain) ? "; domain=" + domain : "") +

      ((secure) ? "; secure" : "");

}
/**

* Gets the value of the specified cookie.

*

* name  Name of the desired cookie.

*

* Returns a string containing value of specified cookie,

*   or null if cookie does not exist.

*/

function getCookie(name) {

  var dc = document.cookie;

  var prefix = name + "=";

  var begin = dc.indexOf("; " + prefix);

  if (begin == -1) {

      begin = dc.indexOf(prefix);

      if (begin != 0) return null;

  } else {

      begin += 2;

  }
  /**

* Deletes the specified cookie.

*

* name      name of the cookie

* [path]    path of the cookie (must be same as path used to create cookie)

* [domain]  domain of the cookie (must be same as domain used to create cookie)

*/

function deleteCookie(name, path, domain) {

  if (getCookie(name)) {

      document.cookie = name + "=" +

          ((path) ? "; path=" + path : "") +

          ((domain) ? "; domain=" + domain : "") +

          "; expires=Thu, 01-Jan-70 00:00:01 GMT";

  }

}


  var end = document.cookie.indexOf(";", begin);

  if (end == -1) {

      end = dc.length;

  }

  return unescape(dc.substring(begin + prefix.length, end));

}
var images = new Array();

function preloadImages(){

    for (i=0; i < preloadImages.arguments.length; i++){

         images[i] = new Image();

        images[i].src = preloadImages.arguments[i];

    }

}

preloadImages("logo.jpg", "main_bg.jpg", "body_bg.jpg", "header_bg.jpg");
if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {

  if (document.cookie.indexOf("iphone_redirect=false") == -1) {

      window.location = "http://m.espn.go.com/wireless/?iphone&i=COMR";

  }

}
