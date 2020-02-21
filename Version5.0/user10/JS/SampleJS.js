function changeText() {
 document.getElementById("textChange").innerHTML="<p class='red'> Thanks for liking my Webpage</p>";
}

function allcaps() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}


function mirror() {
  document.forms[0].mySecondInput.value = document.forms[0].myInput.value;
}


function sign() {
  alert("You pressed a key inside the input field");
}

function reset() {
  alert("This alert box was triggered by the onreset event handler");
}

function color(x) {
  x.style.background = "lightgreen";
}


function paragraph() {
  document.getElementById("demos").innerHTML = Date();
}


function button() {
  document.getElementById("demo").innerHTML = "HELLO WORLD!";
}


function double() {
  document.getElementById("demoss").innerHTML = "Sabers";
}
