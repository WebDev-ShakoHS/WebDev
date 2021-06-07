function changeText() {
  document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
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
<input type="button" onclick="location.href='home.html';" value="Go Home" />

function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);

}

function changeText() {
  document.getElementById("textChange").innerHTML = "Hello"
}

function textRevert() {
  document.getElementById("textRevert").innerHTML = "Hey yeah, I’m the devil, bow down yeah whatever. It’s getting way too cramped down here and I need to make some room but the big man isn’t letting me get rid of you idiots.So I’m giving the pet district of heck up to adoption. There’s only one computer down here and it only runs Windows 95 so it might take a while to update the site. Unsurprisingly I’m bad with coding myself but good thing a little friend decided to come down a few years ago.But hey we got it up and running.Anyways.We've got a lot of weird stuff down here so it would be great if ya guys bought a few.Thanks.I'll be seeing most of you very soon"
}