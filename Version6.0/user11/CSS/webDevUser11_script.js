var space = " ";
var pos = 0;
var msg = "Thanos";

function Scroll(){
document.title = Thanos msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();