function changeText() {
    document.getElementById("textChange").innerHTML = "YEET";
}
var space = " ";
var pos = 0;
var msg = "User 14";
var song = document.getElementById("myAudio");

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();


function myFunction() {
    var x = document.getElementById("fname");
    x.value = x.value
    document.getElementById("textChange").innerHTML = x.value;
}

function preferedBrowser() {
    prefer = document.forms[0].browsers.value;
    prefer.value = prefer.value
    document.getElementById("textChange").innerHTML = "I am " + prefer;
}

function audio() {
    
    document.getElementById("textChange").innerHTML = "Now playing: Roundabout";
    song.play();

}

function load() {
    document.getElementById("textChange1").innerHTML = "page loaded";
}

function bigImg(x) {
  x.style.height = "64px";
  x.style.width = "64px";
}

function normalImg(x) {
  x.style.height = "32px";
  x.style.width = "32px";
}

function color(color) {
  document.forms[1].myInput.style.background = color;
}