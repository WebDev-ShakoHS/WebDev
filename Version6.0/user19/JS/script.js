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
    alert("You've had a mistake");
}
function Buttonclickme() {
    var str = "Version 3.0 Music!";
    var result = str.link("file:///Users/234496/Applications/mampstack/apache2/htdocs/WebDev/Version3.0/user19/Music.html");
    document.getElementById("music").innerHTML = result;
}
function Size() {
    var w = window.outerWidth;
    var h = window.outerHeight;
    var txt = "Window size: width=" + w + ", height=" + h;
    document.getElementById("window").innerHTML = txt;
}
function show_coords(event) {
    document.getElementById("cords").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}
function Type() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}
function coordinates(event) {
    document.getElementById("demo").innerHTML = "X = " + event.screenX + "<br>Y = " + event.screenY;
}
function confirmInput() {
    fname = document.forms[0].fname.value;
    alert("You will now be redirected to tetris");
}
function close() {
    alert("Sad that you can't stay for longer!");
}
function Shift(event) {
    var text = "The shift key was NOT pressed!";
    if (event.shiftKey == 1) {
        text = "The shift key was pressed!";
    }
    document.getElementById("shift").innerHTML = text;
}
function breakout() {
    if (window.top != window.self) {
        window.top.location = "tryjs_breakout.htm";
    }
}
function His() {
    document.getElementById("his").innerHTML = history.length;
}
function Con() {
    var txt;
    if (confirm("Hit yes!")) {
        txt = "You did the right thing";
    } else {
        txt = "What why!";
    }
    document.getElementById("con").innerHTML = txt;
}
function text(id) {
    id.innerHTML = "Amongus";
  }