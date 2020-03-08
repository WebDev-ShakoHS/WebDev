function changeText() {
    document.getElementById("textChange").innerHTML = "SIKE! you thought";
}

var space = " ";
var pos = 0;
var msg = "WebDev User #21";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();

var space = " ";
var pos = 0;
var msg = "WebDev user #21";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();



function allCaps() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}



function annoyingAlert() {
    alert("You pressed a key inside the input field");
}

function changeParagraph() {
    document.getElementById("changeclick").innerHTML = "Hello World";
}

function typenametoreset() {
    alert("This alert box was triggered by the onreset event handler");
}

function writeMessage() {
    document.forms[0].mySecondInput.value = document.forms[0].myInput.value;
}

function color(color) {
    document.forms[0].myInput.style.background = color;
}

function confirmInput() {
    fname = document.forms[0].fname.value;
    alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
}

function myFunction(x) {
    x.style.background = "yellow";
}
