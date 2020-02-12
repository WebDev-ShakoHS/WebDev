function changeText() {
    document.getElementById("textChange").innerHTML = "SIKE! you thought";
}

var space = " ";
var pos = 0;
var msg = "WebDev User #21";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();