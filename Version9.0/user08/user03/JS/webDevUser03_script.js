function changeText() {
 document.getElementById("textChange").innerHTML="Thanks for liking my Webpage"
document.body.style.backgroundColor = "grey";
}
var space = " ";
var pos = 0;
var msg = "Gavin Fee Version 6.0";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();
