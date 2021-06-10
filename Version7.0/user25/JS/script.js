function changeText() {
  document.getElementById("textChange").innerHTML = "All of these pets are actually beings of chaos. If you buy them and have them in your world they will tear it to shreads. Please do not buy. Gerald was able to write his own, that is why his is the only one to hold the truth. Please do not buy. Leave the site now. Don't even think about the site. The devil is an idiot so I was able to hide this right in front of him so please don't tell him. Leave the site now.";
}

function textRevert() {
  document.getElementById("textRevert").innerHTML = "testing";
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

function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);

}

