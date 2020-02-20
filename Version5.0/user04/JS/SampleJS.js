function changeText() {
    document.getElementById("textChange").innerHTML = "<h1 class='blue'>Thanks for liking my Webpage</h1 class='blue'>";
}

var space = " ";
var pos = 0;
var msg = "User 04";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();


function allCaps() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function Color(x) {
    x.style.background = "yellow";
}   

function Submit() {
    fname = document.forms[0].fname.value;
    alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
}

function Reset() {
  alert("This alert box was triggered by the onreset event handler");
}

function Down() {
  alert("You pressed a key inside the input field");
}

function Text() {
  document.getElementById("demo").innerHTML = "Hello World";
}

function displayDate() {
  document.getElementById("date").innerHTML = Date();
}