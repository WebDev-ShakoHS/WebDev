var space = " ";
var pos = 0;
var msg = "Piano For People with Tiny Hands";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();


{
var name = prompt ('What Name Have You Adopted As Of Late?','');
var color = prompt ('What Color Do You Desire?','');
document.write("<CENTER><FONT FACE=Lucida Console, Monaco COLOR="+color+" SIZE=5>Welcome to Piano, "+name+".</FONT><HR NOSHADE WIDTH=450></CENTER><P>")
}