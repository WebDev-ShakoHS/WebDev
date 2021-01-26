var space = " ";
var pos = 0;
var msg = "User 19";

function Scroll() {
  document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

  pos++;
  if (pos > msg.length) pos = 0;
  window.setTimeout("Scroll()", 0);
}
Scroll();

function changeText() {
  document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}


function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
function myFunction2(p1, p2) {
  return p1 * p2;

  document.getElementById("Number").innerHTML = myFunction(4, 4);
}