function changeText() {
    document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
   }

   var space = " ";
   var pos = 0;
   var msg = "Does anyone even use this event anymore?";
   
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

function Capital() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
  }

  function message() {
    alert("You buffoon! You clicked the button to clear your name!");
  }

  function Reply() {
  document.getElementById("demo").innerHTML = "Look at what you've done.";
  }

  function show_coords(event) {
    document.getElementById("demo").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
  }

  function myFunction() {
    var greeting;
    var time = new Date().getHours();
    if (time < 10) {
      greeting = "What do you want from me?!";
    } else if (time < 12) {
      greeting = "Leave me alone!";
    } else if (time < 15) {
      greeting = "Did you really have to wake me up from my nap? I have a seminar at 4!";
    } else {
      greeting = "bruh moment";
    }
    document.getElementById("demo").innerHTML = greeting;
  }