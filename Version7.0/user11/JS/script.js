var space = " ";
var pos = 0;
var msg = "Welcome To JS";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();

function changeText() {
    document.getElementById("textChange").innerHTML = "«span class='text-bg-success'>Thanks for liking my Webpage<span>"
}

function message() {
    alert("This alert box was triggered by the onreset event handler");
}

function myFunction(elmnt, clr) {
    elmnt.style.color = clr;
}


function show_coords(event) {
    document.getElementById("demo").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}