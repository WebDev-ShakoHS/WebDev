function changeText() {
    document.getElementById("textChange").innerHTML = "<b> Thanks for liking my Webpage</b>";
}
function TextAlert() {
    alert("You pressed a key inside the input field");
}
function PressText(event) {
    alert("You pressed button: " + event.button)
}
function MouseCord(e) {
    x = e.clientX;
    y = e.clientY;
    coor = "Coordinates: (" + x + "," + y + ")";
    document.getElementById("Cord").innerHTML = coor
}
function clearCoor() {
    document.getElementById("Cord").innerHTML = "";
}
function show_coords(event) {
    document.getElementById("CordClick").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
}
function isKeyPressed(event) {
    var text = "The shift key was NOT pressed!";
    if (event.shiftKey == 1) {
      text = "The shift key was pressed!";
    }
    document.getElementById("Shift").innerHTML = text;
}
function whichButton(event) {
    document.getElementById("KeyId").innerHTML = event.keyCode;
}