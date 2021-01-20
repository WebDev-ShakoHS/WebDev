function preferedBrowser() {
    prefer = document.forms[2].browsers.value;
    alert("You prefer browsing internet with " + prefer);
}

function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}

function confirmInput() {
    fname = document.forms[0].fname.value;
    alert("Hello " + fname + "! You will now be redirected to https://shakopee.instructure.com/");
}

function imgError() {
    alert('The image could not be loaded.');
}

function displayDate() {
    document.getElementById("demo").innerHTML = Date();
}

function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World";
}

function message() {
    alert("This alert box was triggered by the onreset event handler");
}

function myFunctio(x) {
    x.style.background = "yellow";
}

