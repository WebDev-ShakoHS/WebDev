function changeText() {
    document.getElementById("textChange").innerHTML = "<h1 class= 'red'>Thanks for liking my Webpage</h1>";

}

function allCaps() {
    var x = document.getElementById("fname");

    x.value = x.value.toUpperCase();
}

function confirmInput() {
    fname = document.forms[0].gname.value;
    alert("Hello " + fname + "! You will now be redirected to Shakopee Public School");
}

function Hellofriend(e) {
    x = e.clientX;
    y = e.clientY;
    coor = "Coordinates: (" + x + "," + y + ")";
    document.getElementById("demo").innerHTML = coor
}

function clearCoor() {
    document.getElementById("demo").innerHTML = "";
}

function writeText(txt) {
    document.getElementById("desc").innerHTML = txt;
}


function DBLClick() {
    document.getElementById("demo").innerHTML = "Hello World";
}

function bigImg(x) {
    x.style.height = "64px";
    x.style.width = "64px";
}

function normalImg(x) {
    x.style.height = "32px";
    x.style.width = "32px";
}

function displayDate() {
    document.getElementById("demo").innerHTML = Date();
}
