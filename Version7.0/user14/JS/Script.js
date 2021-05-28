var myShow = w3.slideshow(".nature", 0);
let myText = 'I am a string';
let newString = myText.replace('string', 'sausage');
console.log(newString);
// the replace() string function takes a source string,
// and a target string and replaces the source string,
// with the target string, and returns the newly formed string
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
}
function changeColor(){
    var newColor = document.getElementById('colorPicker').value;
      document.getElementById('colorMsg').style.background = newColor;
  }
  function Msg1(){
    document.getElementById('myText').innerHTML = 'Hey <strong>Thanks!</strong>';
  }
  function myFunction() {
    alert("Thank you for liking my website See you next time:)");
  }