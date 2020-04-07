function feedbackFunction() {
  var txt;
  var person = prompt("PLease leave your feedback here.");
  if (person == null || person == "") {
    txt = "Prompt cancelled";
  } else {
    txt = "Thank-you";
  }
  document.getElementById("demo").innerHTML = txt;
}

function mytime()
   {
   var d=new Date();
   ap="am";
   h=d.getHours();
   m=d.getMinutes();
   s=d.getSeconds();
   if (h>11) { ap = "pm"; }
   if (h>12) { h = h-12; }
   if (h==0) { h = 12; }
   if (m<10) { m = "0" + m; }
   if (s<10) { s = "0" + s; }
   document.getElementById('timehere').innerHTML=h + ":" + m + ":" + s + " " + ap;
   t=setTimeout('mytime()',500);
   }

function pageloadFunction() {
  alert("Page is loaded");
}

function changeText() {
 document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
}




