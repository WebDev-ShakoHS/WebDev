function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}

function whyType() {
    alert("Why are you typing on my page!");
}
function uppercaseOnly() {
    var x = document.getElementById("uppercase");
    x.value = x.value.toUpperCase();
}
function color(color) {
    document.forms[0].myInput.style.background = color;
}
function selectText() {
    document.getElementById("select").innerHTML = "Stop Stealing!";
}
function show_coords(event) {
    document.getElementById("coords").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}
function message() {
    alert("That is pretty funny!");
}
function myFunction() {
    document.getElementById("demo").innerHTML = "Hey.";
}