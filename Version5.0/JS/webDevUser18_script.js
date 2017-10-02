function changeText() 
{ document.getElementById("textChange").innerHTML = "I wanna go home";
}

var space = " ";
var pos = 0;
var msg = "User18";

function Scroll () {
		document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);
		
		post++;
		if (pos > msg.length) pos = 0
		window.setTimeout("scroll()", 0);
}
Scroll();
		