function changeText() {
		document.getElementById("textChange").innerHTML="thanks for liking my webpage!"
}

var space=" ";
var pos= 0;
var msg="user 2";

function Scroll() {
	document.title = msg.substring(pos, msg.length) + space +msg.substring(0, pos);
	
	pos++;
	if(pos > msg.length) pos = 0;
	window.setTimeout("Scroll()", 0);
}
Scroll();