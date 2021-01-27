function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}
var space = " ";
var pos = 0;
var msg = "User 19";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();

function myFunction() {
    document.getElementById("demo").innerHTML = "Hello I am not the best at coding websites";
}

function isKeyPressed(event) {
    var text = "Do what it says above";
    if (event.shiftKey == 1) {
        text = "Congratulations of following a simple direction and pressing shift. I'm proud of you";
    }
    document.getElementById("demoShift").innerHTML = text;
}

function size() {
    var w = window.outerWidth;
    var h = window.outerHeight;
    var txt = "Window size: how big boi is your window=" + w + ", how tall your window boi is=" + h;
    document.getElementById("demoSize").innerHTML = txt;
}

function getEventType(event) {
    document.getElementById("demoMouse").innerHTML = event.type;
}

function box() {
    alert("I can't belive that you could not follow very simple instructions. Please leave this website and don't come back.");
}

function blue() {
    document.getElementById("demoBlue").innerHTML = "Bob is now blue";
}

function Leave() {
    fname = document.forms[0].fname.value;
    alert("Hello " + fname + "! You will now leave this trash site");
}