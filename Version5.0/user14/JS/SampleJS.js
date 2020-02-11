function changeText() {
    document.getElementById("textChange").innerHTML = "YEET";
}
var space = " ";
var pos = 0;
var msg = "User 14";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();


function myFunction() {
  document.getElementById("textChange").innerHTML = "You press button";
}
