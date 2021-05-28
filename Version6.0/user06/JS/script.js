function changeText() {
    document.getElementById("textChange").innerHTML = "Have a good day!";
}

function changeColor(elmnt, clrT, clrB) {
    elmnt.style.color = clrT;
    elmnt.style.backgroundColor = clrB;
}
function capitalText() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function windowSize() {
    var w = window.outerWidth;
    var h = window.outerHeight;
    var txt = "Window size: width=" + w + ", height=" + h;
    document.getElementById("report").innerHTML = txt;
}

function charCode(event) {
    var char = event.which
    document.getElementById("keystroke").innerHTML = "The character ID is " + char;
}

function isKeyPressed(event) {
    var text = "The shift key was NOT pressed!";
    if (event.shiftKey == 1) {
        text = "The shift key was pressed!";
    }
    document.getElementById("reporter").innerHTML = text;
}
function pageLoad() {
    alert("Welecome to my javascript page!");
}


function mOver(obj) {
    obj.innerHTML = "Oh my! O.o"
  }
  
  function mOut(obj) {
    obj.innerHTML = "Mouse Over Me"
  }
