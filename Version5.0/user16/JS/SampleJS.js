function changeText() {
    document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
    }

    

function Functionbackgroundcolor(x) {
  x.style.background = "yellow";
}

function confirmInput() {
    fname = document.forms[0].fname.value;
    alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
  }
  

  
function message() {
  alert("This alert box was triggered by the onreset event handler");
}

function myFunction() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}

function Functionresize() {
    var w = window.outerWidth;
    var h = window.outerHeight;
    var txt = "Window size: width=" + w + ", height=" + h;
    document.getElementById("demo").innerHTML = txt;
  }

  function coordinates(event) {
    document.getElementById("demo").innerHTML = "X = " + event.screenX + "<br>Y = " + event.screenY;
  }

  function Functionkeypress() {
    alert("You pressed a key inside the input field");
  }

  