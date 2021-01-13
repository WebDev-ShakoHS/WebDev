
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

function show_coords(event) {
    document.getElementById("demo").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}

function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World";
}



function myFunction() {
    var txt;
    if (confirm("Press a button!")) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}

var c = 0;
function myCounter() {
    document.getElementById("demo").innerHTML = ++c;
}

function myFunction() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function confirmInput() {
    fname = document.forms[0].fname.value;
    alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
}
function getEventType(event) {
    document.getElementById("demo").innerHTML = event.type;
}

var c = 0;
function myCounter() {
    document.getElementById("demo").innerHTML = ++c;
}
function preferedBrowser() {
    prefer = document.forms[0].browsers.value;
    alert("You prefer browsing internet with " + prefer);
}
function myFunction(elmnt, clr) {
    elmnt.style.color = clr;
}