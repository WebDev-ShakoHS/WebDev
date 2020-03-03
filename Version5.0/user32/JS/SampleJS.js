  function changeText() {
      document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
      var space = " ";
      var pos = 0;
      var msg = "User 19";

      function Scroll() {
          document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

          pos++;
          if (pos > msg.length) pos = 0;
          window.setTimeout("Scroll()", 0);
      }
      Scroll();
  }

  function allcaps() {

      var x = document.getElementById("fname");
      x.value = x.value.toUpperCase();
  }

  function changetext() {

      document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
  }

  function Scroll() {

      document.title = msg.substring(pos, msg.lenght) + space + msg.substring(0, pos);
      pos++;
      if (pos > msg.length) pos = 0;
      window.setTimeout("Scroll()", 0);
  }
  Scroll();
