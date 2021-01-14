const newLocal = "Thanks!";
function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks!"
}

function preferedBrowser() {
    prefer = document.forms[0].browsers.value;
    alert(`You prefer browsing internet with ${prefer}`);
}


function confirmInput() {
    fname = document.forms[0].fname.value;
    alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
}

function writeMessage() {
    document.forms[0].mySecondInput.value = document.forms[0].myInput.value;
}




function getEventType(event) {
    document.getElementById("demo").innerHTML = event.type;
}

function message() {
    alert("This alert box was triggered by the onreset event handler");
}

function Capitalize() {
    var x = document.getElementById("Uppercase");
    x.value = x.value.toUpperCase();
}

function changebackground(x) {
    x.style.background = "green";
  }

  function getEventType(event) { 
    document.getElementById("Eventpopup").innerHTML = event.type;
  }


