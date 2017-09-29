function changeText() {
	document.getElementById("textChange").innerHTML="Oh no! You just got bamboozled!";
}

var space = " ";
var pos = 0;
var msg = "User 9";

function Scroll() {
	document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);
	pos++;
	if (pos > masg.length) pos = 0;
	window.setTimeout("Scroll()", 0);
	}
	Scroll();