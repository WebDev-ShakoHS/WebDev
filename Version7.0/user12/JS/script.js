var space = " ";
var pos = 0;
var msg = "Welcome";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout(Scroll, 0);
}
Scroll();

function changeText() {
    document.getElementById("textChange").innerHTML = "<span class='text-bg-success'>Thanks for liking my Webpage</span>";
}

function myHoverFunction(elmnt) {
    elmnt.style.color = 'red';
}

function myNormalFunction(elmnt) {
    elmnt.style.color = 'black';
}

function bigImg(x) {
    x.style.height = "128px";
    x.style.width = "128px";
}

function normalImg(x) {
    x.style.height = "64px";
    x.style.width = "64px";
}

function whichButton(event) {
    document.getElementById("keycode").innerHTML = event.keyCode;
}

function show_coords(event) {
    document.getElementById("cursorcoords").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}

function doubleclick() {
    document.getElementById("doubleclick").innerHTML = "Flash Gordon will save everyone";
}

function displayDate() {
    document.getElementById("date").innerHTML = Date();
}

function isKeyPressed(event) {
    var text = "The shift key was NOT pressed!";
    if (event.shiftKey) {
        text = "The shift key was pressed!";
    }
    document.getElementById("shift").innerHTML = text;
}

function TextSelect() {
    document.getElementById("textselect").innerHTML = "You selected some text";
}