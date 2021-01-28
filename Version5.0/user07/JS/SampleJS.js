function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}
var space = " ";
var pos = 0;
var msg = "User 19";

function inputfieldFunction() {
    alert("You pressed a key inside the input field");
}

function capsFunction() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function clickFunction() {
    document.getElementById("click").innerHTML = "Hello World";
}

function isKeyPressed(event) {
    var text = "The shift key was NOT pressed!";
    if (event.shiftKey == 1) {
        text = "The shift key was pressed!";
    }
    document.getElementById("shift").innerHTML = text;
}

function resizeFunction() {
    var w = window.outerWidth;
    var h = window.outerHeight;
    var txt = "Window size: width=" + w + ", height=" + h;
    document.getElementById("resize").innerHTML = txt;
}

function writeMessage() {
    document.forms[0].mySecondInput.value = document.forms[0].myInput.value;
}

function loadFunction() {
    alert("Page is loaded");
}