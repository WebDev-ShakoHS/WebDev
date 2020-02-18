var space = " ";
var pos = 0;
var count = 0;
var ccpc = 1;
var msg = "User 1";
add1cpost = 25;

function uptick() {
    var uotput = document.getElementById("counter");
    count + ccpc;
    uotput.innerHTML = count;

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
function cpcu() {
    if (cost <= count){
        ccpc +=1;
        count - cost;
        cost + 20;
    }
}
function blurred() {
    var x = document.getElementById("inputter");
    x.value = x.value.toUpperCase();
}

function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
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


