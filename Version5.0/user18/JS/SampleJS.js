function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}


function myFunction() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function preferedBrowser() {
    prefer = document.forms[0].browsers.value;
    alert("You prefer browsing internet with " + prefer);
}

function yee() {
    alert("You pressed a key inside the input field");
}


function whichElement(e) {
    var targ;
    if (!e) {
        var e = window.event;
    }
    if (e.target) {
        targ = e.target;
    } else if (e.srcElement) {
        targ = e.srcElement;
    }
    var tname;
    tname = targ.tagName;
    alert("You clicked on a " + tname + " element.");
}

function Function() {
    alert("Page is loaded");
}

function unction() {
    var w = window.outerWidth;
    var h = window.outerHeight;
    var txt = "Window size: width=" + w + ", height=" + h;
    document.getElementById("demo").innerHTML = txt;
}

function isKeyPressed(event) {
    var text = "The shift key was NOT pressed!";
    if (event.shiftKey == 1) {
        text = "The shift key was pressed!";
    }
    document.getElementById("demo").innerHTML = text;
}