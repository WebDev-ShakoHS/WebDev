function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}

var space = " ";
var pos = 0;
var msg = "User 21";

function UpperCase() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function preferedfnaf() {
    prefer = document.forms[0].fnaf.value;
    alert("You like the FNaF character " + prefer);
}

function SansBackgroundColors(x) {
    x.style.background = 'Gold';
}

function BackgroundChange(x) {
    x.style.background = "Olive";
}

function color(color) {
    document.forms[1].myInput.style.background = color;
} 