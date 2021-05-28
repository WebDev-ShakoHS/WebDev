function changeText() {
    document.getElementById("textChange").innerHTML="<u>Thanks for clicking you sheep<u>";
   }
   var space = " ";
var pos = 0;
var msg = "According to all known laws of avation, there is no way a bee should be able to fly.";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();

