function changeText() {
    document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
   }
   
   function preferedBrowser() {
    prefer = document.forms[0].browsers.value;
    alert("You prefer browsing internet with " + prefer);
  }
  function myFunction() {
    document.getElementById("demo").innerHTML = "You selected some text";
  }
  function confirmInput() {
    fname = document.forms[0].fname.value;
    alert("Hello "+ fname +"! You will now be redirected to www.w3Schools.com");
  }
  function message() {
    alert("This alert box was triggered by the onreset event handler");
  }
  function myFunction(elmnt, clr) {
    elmnt.style.color = clr;
  }