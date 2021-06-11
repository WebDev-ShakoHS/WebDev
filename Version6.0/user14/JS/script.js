function changeText() {
    document.getElementById("textChange").innerHTML="<u>Thanks for liking my Webpage</u>";
   }
   function openWin() {
    window.open("https://shakopee.instructure.com/courses/131334");
  }
  function openwindow() {
    w = window.open('','', 'width=100,height=100');
    w.focus();
  }
  
  function Function1() {
    w.resizeBy(50, 50);
    w.focus();
  }
  function breakout() {
    if (window.top != window.self) {
      window.top.location = "HI";
    }
}
function Function2() {
    var txt;
    var person = prompt("Please enter your name:", "Harry Potter");
    if (person == null || person == "") {
      txt = "User cancelled the prompt.";
    } else {
      txt = "Hello " + person + "! How are you today?";
    }
    document.getElementById("demo").innerHTML = txt;
  }
  function Msg1(){
    document.getElementById('myText').innerHTML = 'Hey <strong>Thanks!</strong>';
  }
  function Msg2(){
    document.getElementById('myText').innerHTML = 'Try <strong>message 1</strong> again...';
  }
  function showMsg(){
    var userInput = document.getElementById('userInput').value;
    document.getElementById('userMsg').innerHTML = userInput;
  }
  function changeColor(){
    var newColor = document.getElementById('colorPicker').value;
      document.getElementById('colorMsg').style.background = newColor;
  }