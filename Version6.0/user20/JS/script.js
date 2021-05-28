

function changeText() {
  document.getElementById("textChange").innerHTML = "<ul>Thanks for liking my Webpage</ul>";
}

function WhichButton(event) {
  alert("You pressed button: " + event.button)
}
function myName() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}
function myClick() {
  document.getElementById("demo").innerHTML = "Hello World";
}
function writeMessage() {
  document.forms[0].mySecondInput.value = document.forms[0].myInputPink.value;
}
function color(color) {
  document.forms[1].myInput.style.background = color;
}

function myElement(elmnt, clr) {
  elmnt.style.color = clr;
}
function Pageload() {
  alert("Page is loaded");
}
