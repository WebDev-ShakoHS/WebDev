function changeText() {
    document.getElementById("textChange").innerHTML="<u>Thanks for liking my Webpage!</u>";
}
function showCoords(event) {
    document.getElementById("coordsShown").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}
function keyPressed() {
    alert("Congrats! You clicked on this and pressed a random key!");
}
function upperCase() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}
function whichElement(e) {
    var targ;
    if (!e) {
      var e = window.event;
    }
    if (e.target) {
      targ=e.target;
    } else if (e.srcElement) {
      targ=e.srcElement;
    }
    var tname;
    tname = targ.tagName;
    alert("You clicked on a " + tname + " element.");
}
function isKeyPressed(event) {
    var text = "The shift key was NOT held!";
    if (event.shiftKey == 1) {
      text = "The shift key was held!";
    }
    document.getElementById("ShiftKeyresponse").innerHTML = text;
}
function doubleClicked() {
    document.getElementById("DoubleClickresponse").innerHTML = "Thanks for double clicking me! Alright, gotta go home to feed me family.";
}