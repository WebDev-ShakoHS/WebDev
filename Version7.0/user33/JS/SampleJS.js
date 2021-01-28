var space = " ";
var pos = 0;
var msg = "Welcome to Tanner's Website!";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();

function myFunction() {
    var greeting;
    var time = new Date().getHours();
    if (time < 10) {
      greeting = "Take life one step at a time.";
    } else if (time < 12) {
      greeting = "Use your best friend google if you have any problems.";
    } else if (time < 15) {
      greeting = "Moving quote.";
    } else {
      greeting = "bruh moment.";
    }
    document.getElementById("quote").innerHTML = greeting;
  }

  

  var x = document.getElementById("browser");
if (x) {
  document.getElementById("browser").innerHTML = navigator.appVersion}