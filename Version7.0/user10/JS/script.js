var space = " Hi";
var pos = 0;
var msg = "Hello";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();

function changeText() {
    document.getElementById("textChange").innerHTML = "<span class='text-bg-sucess'>Thanks for liking my Webpage<span>";
}