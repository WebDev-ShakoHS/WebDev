function changeText() {
 document.getElementById("textChange").innerHTML = "According to all known laws of aviation, there is no way a bee should be able to fly. Its wings are too small to get its fat little body off the ground. The bee, of course, flies anyway because bees dont care what humans think is impossible. Yellow, black. Yellow, black. Yellow, black. Yellow, black. Ooh, black and yellow! Lets shake it up a little. Barry! Breakfast is ready! Coming! Hang on a second. Hello?"
 document.body.style.backgroundColor = "salmon"; 
}

var space = " ";
var pos = 0;
var msg = "Yeeeehawwwwww!!!!!";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();

<!-- this script got from www.javascriptfreecode.com-Coded by: Krishna Eydat -->

{
var name = prompt ('Hand over your name.','');
var color = prompt ('Next, the color of your deepest temptations.','');
document.write("<CENTER><FONT FACE=ARIAdL,VERDANA COLOR="+color+" SIZE=5>Welcome To Home of Phobia "+name+"!!!</FONT><HR NOSHADE WIDTH=450></CENTER><P>")
}

