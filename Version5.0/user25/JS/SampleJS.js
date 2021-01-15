function changeText() {
    document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
    }

    function myFunction() {
        var x = document.getElementById("fname");
        x.value = x.value.toUpperCase();
      }

      function myFunction(x) {
        x.style.background = "Purple";
      }

      function myFunction() {
        document.getElementById("demo").innerHTML = "yeeee";
      }
      function writeMessage() {
        document.forms[0].mySecondInput.value = document.forms[0].myInput.value;
      }

      function loadImage() {
        alert("Image is loaded");
      }

      function message() {
        alert("This alert box was triggered by the onreset event handler");
      }
      function isKeyPressed(event) {
        var text = "The shift key was NOT pressed!";
        if (event.shiftKey == 1) {
          text = "The shift key was pressed!";
        }
        document.getElementById("demo").innerHTML = text;
      }