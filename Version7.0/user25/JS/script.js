function changeText() {
    document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
   }
   function zoomIn(event) {
    var element = document.getElementById("overlay");
    element.style.display = "inline-block";
    var img = document.getElementById("imgZoom");
    var posX = event.offsetX ? (event.offsetX) : event.pageX - img.offsetLeft;
    var posY = event.offsetY ? (event.offsetY) : event.pageY - img.offsetTop;
    element.style.backgroundPosition = (-posX * 4) + "px " + (-posY * 4) + "px";
  
  }
  
  function zoomOut() {
    var element = document.getElementById("overlay");
    element.style.display = "none";
  }