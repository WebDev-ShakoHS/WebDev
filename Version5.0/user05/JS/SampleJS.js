function allcaps() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function preferedBrowser() {
    prefer = document.forms[0].browsers.value;
    alert("You prefer browsing internet with " + prefer);
}

function keydown() {
    alert("You pressed a key inside the input field");
}

function writeText(txt) {
    document.getElementById("desc").innerHTML = txt;
}

function myFunction(elmnt, clr) {
  elmnt.style.color = clr;
}

function changecolor(x) {
    x.style.background = "yellow";
}
function message() {
  alert("This alert box was triggered by the onreset event handler");
}
