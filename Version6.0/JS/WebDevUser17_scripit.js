function changeText()  {
    document.getElementById("textChange").innerHTML="Thanks for liking my Website";
}

var space = " ";
var pos = 0;
var msg = "Follow me on Instagram @joshwelch17 #BoonkGang";

function Scroll(){
     document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);
     
     pos++;
     if (pos > msg.length) pos = 0;
     window.setTimeout("Scroll()", 0);
     }
     Scroll();
     