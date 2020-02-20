function changeText() {
    document.getElementById("textChange").innerHTML = "div class='isiah'> Thanks for liking my webpage</div>";
}

function message() {
  alert("This alert box was triggered by the onreset event handler");
}

function writeMessage() {
  document.forms[2].mySecondInput.value = document.forms[2].myInput.value;
}

function myFunction() {
  alert("You pressed a key inside the input field");
}

function myFunction(elmnt, clr) {
  elmnt.style.color = clr;
}

function myFunction() {
  alert("Page is loaded");
}

function displayDate() {
  document.getElementById("demo").innerHTML = Date();
}

