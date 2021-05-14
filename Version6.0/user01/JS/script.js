function changeText() {
    document.getElementById("textChange").innerHTML = "<u>Thanks for liking my Webpage<u>";
}
function show_coords(event) {
    document.getElementById("coordinates").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}

function changeBackground() {
    document.body.style.backgroundColor = "coral";
}

function resetBackground() {
    document.body.style.backgroundColor = "white";
}

function bigImg(x) {
    x.style.height = "64px";
    x.style.width = "64px";
}

function normalImg(x) {
    x.style.height = "32px";
    x.style.width = "32px";
}

function inputBackground(x) {
    x.style.background = "yellow";
}

function message() {
    alert("This alert box was triggered by the onreset event handler");
}

function pageLoad() {
    alert("Page succesfully loaded. Beep Boop.");
}


var space = " ";
var pos = 0;
var msg = "Gideon's Javascript Examples";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();