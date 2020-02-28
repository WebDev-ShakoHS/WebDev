function myFunction() {
    document.getElementById("demo").innerHTML="Lorelai and Rory Gilmore.";
}

function openWin() {
  window.open("https://en.wikipedia.org/wiki/Friends");
}

function mOver(obj) {
  obj.innerHTML = "2,532 miles per hour"
}

function mOut(obj) {
  obj.innerHTML = "How fast is the Flash?"
}

var i = 0;
var txt = 'Ted, Barney, Robin, Marshall, and Lily.';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}