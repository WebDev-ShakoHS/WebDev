function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}

function Onselect() {
    document.getElementById("demo").innerHTML = "You selected some text";
}

function confirmInput() {
    fname = document.forms[0].fname.value;
    alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
}

function myFunction() {
    alert("Page is loaded");
}

function pressDown() {
    alert("You pressed a key inside the input field");
}

function message() {
    alert("This alert box was triggered by the onreset event handler");
}

function capitalFunction() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

function keydownFunction() {
    alert("You pressed a key inside the input field");
}

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
        h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }; // add zero in front of numbers < 10
    return i;
}

var c = 0;

function myCounter() {
    document.getElementById("demo").innerHTML = ++c;
}

function boxFunction() {
    var txt;
    if (confirm("Press a button!")) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 30);
        }
    }
}

function feedbackFunction() {
    var txt;
    var person = prompt("Please leave any feedback here:", "");
    if (person == null || person == "") {
        txt = "User cancelled the prompt.";
    } else {
        txt = "Thank-you";
    }
    document.getElementById("dif").innerHTML = txt;
}

function timedText() {
    setTimeout(myTimeout1, 1000)
    setTimeout(myTimeout2, 2000)
    setTimeout(myTimeout3, 3000)
    setTimeout(myTimeout4, 4000)
    setTimeout(myTimeout5, 5000)
}

function myTimeout1() {
    document.getElementById("timed").innerHTML = "5 ";
}

function myTimeout2() {
    document.getElementById("timed").innerHTML = "4 ";
}

function myTimeout3() {
    document.getElementById("timed").innerHTML = "3 ";
}

function myTimeout4() {
    document.getElementById("timed").innerHTML = "2 ";
}

function myTimeout5() {
    document.getElementById("timed").innerHTML = "1 ";
}
