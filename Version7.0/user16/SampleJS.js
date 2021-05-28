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
  
  function myFunction() {
    var btn = document.createElement("BUTTON");
    document.body.appendChild(btn);
  }
  var el_up = document.getElementById("GFG_UP");
  var el_down = document.getElementById("GFG_DOWN");
  var str = "Click on button to change the background color";

  el_up.innerHTML = str;

  function changeColor(color) {
      document.body.style.background = color;
  }
    
  function gfg_Run() {
      changeColor('yellow');
      el_down.innerHTML = "Background Color changed";
  }        
  // button to switch image
  function changeImage()
{
var img = document.getElementById("image");
img.src="images/badmovie.jpg";
return false;
}
// button to switch color
function chBackcolor(color) {
  document.body.style.background = color;
}
preloadimage("images/Pixar-Soul-Poster.jpeg",);




if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {

    if (document.cookie.indexOf("iphone_redirect=false") == -1) {

        window.location = "http://m.espn.go.com/wireless/?iphone&i=COMR";

    }

}

