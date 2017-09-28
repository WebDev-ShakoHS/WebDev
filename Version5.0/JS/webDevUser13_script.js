function changeText() {
	document.getElementById("textChange").innerHTML="Justin Bieber is my hero";
}


var space = " ";
var pos = 0;
var msg = "Bieber Is Great";

function Scroll() {
	document.title = msg.substring(pos, msg.legnth) + space +mgs.substring(0,pos);
	
	pos++;
	if (pos > msg.legnth) pos = 0;
	window.setTimeout("Scroll()", 0);
	}
	Scroll();