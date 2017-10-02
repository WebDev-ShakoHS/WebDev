function changeText() {
	document.getElementById("textChange").innerHTML="U r Kool Vro";
}
	
var space = " ";
var pos = 0;
var msg = "wat is up gamrs?";

function Scroll(){
	document.title = msg.substring(pos, msg.length) + space + msg.substring(0,pos);
	
	
	pos++;
	if (pos > msg.length) pos = 0;
	window.setTimeout("Scroll()",0);
	}
	scroll();