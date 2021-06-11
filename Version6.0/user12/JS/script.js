function changeText() {
    document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
   }
   var space = " ";
var pos = 0;
var msg = "User 12";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();

flag=1
function f1()
{
	alert("Yup, Im awesome ")
}
function f()
{
    alert("Try again dummy ")
}
