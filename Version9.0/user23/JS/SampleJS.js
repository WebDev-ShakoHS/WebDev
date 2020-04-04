function openWin() {
  window.open("https://en.wikipedia.org/wiki/Udaipur");
}

var i = 0;
var txt = 'Jaisalmer stands on a ridge of yellowish sandstone and is crowned by the ancient Jaisalmer Fort. The town also lies in the heart of the Thar Desert - The Great Indian Desert.';
var speed = 40;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}