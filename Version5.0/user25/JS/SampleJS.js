function changeText() {
  document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}

function myFunction() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}




function writeMessage() {
  document.forms[0].mySecondInput.value = document.forms[0].myInput.value;
}


function confirmInput() {
  fname = document.forms[0].fname.value;
  alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
}
function myFunction(elmnt, clr) {
  elmnt.style.color = clr;
}
function myFunction(x) {
  x.style.background = "red";
}

