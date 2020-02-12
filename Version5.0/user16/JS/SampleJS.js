function changeText() {
 document.getElementById("textChange").innerHTML="i dont like Amos";
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

function confirmInput() {
  fname = document.forms[0].fname.value;
  alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
}