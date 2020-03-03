function changeText() {
 document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
}
var space = " ";
var pos = 0;
var msg = "User 22";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();

function confirmInput() {
  fname = document.forms[0].fname.value;
  alert("Hello " + fname);
}

function preferedBrowser() {
  prefer = document.forms[0].browsers.value;
  alert("You prefer browsing internet with " + prefer);
}

function whichButton(event) {
  document.getElementById("demo").innerHTML = event.keyCode;
}

function show_coords(event) {
  document.getElementById("demo").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}

function coordinates(event) {
  document.getElementById("demo").innerHTML = "X = " + event.screenX + "<br>Y = " + event.screenY;
}

function message() {
  alert("This alert box was triggered by the onreset event handler");
}

function isKeyPressed(event) {
  var text = "The shift key was NOT pressed!";
  if (event.shiftKey == 1) {
    text = "The shift key was pressed!";
  }
  document.getElementById("shift").innerHTML = text;
}