function changeText() {
	document.getElementById("textChange").innerHTML="Thanks for liking";
	}
	
	var space = " ";
	var pos = 0;
	var msg = "User 0";
	
function Scroll() {
	document.title = msg.substring(pos, msg, length) + space + msg, substring(0, pos);
	
	pos++;
	if (pos > msg.length) pos = 0;
	window.setTimeout("Scrolling!!!", 0);
	}
	Scroll();