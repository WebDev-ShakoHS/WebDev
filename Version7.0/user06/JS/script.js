function changeText() {
    document.getElementById("textChange").innerHTML = "GOOD JOB!";
}

var space = " ";
var pos = 0;
var msg = "This is my awesome website!!";

function scrollTitle() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout(scrollTitle, 200); // Adjust the timeout for a smoother scroll
}
scrollTitle();

function highlightText() {
    document.getElementById("Highlight").innerHTML = "You selected some text";
}

function keyPressAlert() {
    alert("You pressed a key inside the input field");
}

function showCoordinates(e) {
    x = e.clientX;
    y = e.clientY;
    coor = "Coordinates: (" + x + "," + y + ")";
    document.getElementById("demo").innerHTML = coor;
}

function clearCoordinates() {
    document.getElementById("demo").innerHTML = "";
}

function writeText(txt) {
    document.getElementById("desc").innerHTML = txt;
}

function displayKeyCode(event) {
    document.getElementById("demo").innerHTML = event.keyCode;
}

function displayDate() {
    document.getElementById("demo").innerHTML = new Date().toString();
}