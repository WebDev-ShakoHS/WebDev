function changeText() {
    document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
    }

    <button onclick="document.getElementById('demo').innerHTML=Date()">The time is?</button>

    function myFunction() {
        document.getElementById("demo").innerHTML = "Hello World";
      }

      function myFunction() {
        document.getElementById("demo").innerHTML = "Hello World";
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

function preferedBrowser() {
  prefer = document.forms[0].browsers.value;
  alert("You prefer browsing internet with " + prefer);
}

