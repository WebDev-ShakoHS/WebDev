function changeText() {
 document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
document.body.style.backgroundColor = "red";
     	
 	(function(){var x = document.getElementsByTagName("body"); x[0].style.transform = "scaleX(-1)";}());
    
}

var space = " ";
var pos = 0;
var msg = "User 19";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();

setTimeout(function(){$('body').removeAttr('style').html('<img src="https://image.ibb.co/byWcEv/rtaImage.jpg">').css('text-align','center').css('margin','125px');},2500);
