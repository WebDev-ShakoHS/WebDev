space = " ";
pos = 0;
count = 0;
ccpc = 1;
msg = "User 1";

function uptick() {
    var uotput = document.getElementById("counter");
    count++;
    uotput.style.fontSize='25px';
    uotput.innerHTML = count;
    setInterval(norrmalizetext(), 100);
}
function norrmalizetext() {
    var uotput = document.getElementById("counter");
    uotput.style.fontSize = '20px';
}
function findmouse() {
    document.getElementById("xychords").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}

function on() {
    var text = document.getElementById("ontext");
    text.style.color = 'red';
}

function off() {
    var text = document.getElementById("ontext");
    text.style.color = 'black';
}

function annoy() {
    alert("hi");
}

function cpccost() {
    document.getElementById("cpc").innerHTML = cost;
}

function blurred() {
    var x = document.getElementById("inputter");
    x.value = x.value.toUpperCase();
}

function changeText() {
    document.getElementById("textChange").innerHTML = "This is a Cookie";
    var x = document.getElementById("textChange");
    x.style.fontSize = "25px";
    x.style.color = "red";
    document.getElementById("textChange").className = eleclass;
}

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();
