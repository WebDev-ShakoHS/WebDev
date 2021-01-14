function changeText() {
    document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
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

function message() {
    alert("This alert box was triggered by the onreset event handler");
  }

  function color(color) {
    document.forms[0].myInput.style.background = color;
  }

  function myFunction() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
  }

  function text() {
    alert("This alert box was triggered by the onreset event handler");
  }

  function select() {
    document.getElementById("demo").innerHTML = "You selected some text";
  }

  function backround(x) {
    x.style.background = "yellow";
  }