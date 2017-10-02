function changeText() {
	document.getElementById("textChange").innerHTML="Justin Bieber is my hero";
}
	
var space = " ";
var pos = 0;
var msg = "Justin Bieber is Great";

function Scroll () {
	document.title = msg.substring(pos,msg.length) + space +msg.substring(0,pos) ; 
	
		pos++;
		if (pos > msg.length) pos = 0;
		window.setTimeout("Scroll()",0);
		}
		Scroll();
