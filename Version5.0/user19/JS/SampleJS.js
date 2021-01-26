function changeText() {
    document.getElementById("textChange").innerHTML = "Thank you for liking my Webpage :)";
}
function changeText2() {
    document.getElementById("textChange").innerHTML = "That's not very nice :(";
}
function changeBackgroundGray() {
    document.body.style.backgroundColor = "gray"; document.getElementById("textChange").innerHTML = "So gloomy :(";
}
function changeBackgroundPink() {
    document.body.style.backgroundColor = "pink"; document.getElementById("textChange").innerHTML = "So bright :(";
}
function changeBackgroundBlue() {
    document.body.style.backgroundColor = "lightblue"; document.getElementById("textChange").innerHTML = "This is nice :)";
}
function changeBackgroundPurple() {
    document.body.style.backgroundColor = "purple"; document.getElementById("textChange").innerHTML = "Ew :(";
}
function changeBackgroundWhite() {
    document.body.style.backgroundColor = "white"; document.getElementById("textChange").innerHTML = "Back to normal :)";
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