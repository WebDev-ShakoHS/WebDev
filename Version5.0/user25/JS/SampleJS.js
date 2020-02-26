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

function allCaps() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function confirmInput() {
    iname = document.forms[0].iname.value;
    alert("Hello " + iname + "! You will now be redirected to www.w3Schools.com");
}

function message() {
    alert("You have successfully clicked reset.");
}

function myFunction(x) {
    x.style.background = "purple";
}

function alphaFunction() {
    document.getElementById("textselect").innerHTML = "You selected some text";
}

function clickFunction(elmnt, clr) {
    elmnt.style.color = clr;
}
