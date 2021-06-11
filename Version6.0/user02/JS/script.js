//
function changeText() {
    document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
    document.getElementById("textChange").innerHTML="tacobell"
}
var space = " ";
   var pos = 0;
   var msg = "User 19";
   
   function Scroll(){
   document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);
   
   pos++;
   if (pos > msg.length) pos = 0;
   window.setTimeout("Scroll()", 0);
   }
   Scroll();
function myFunction() {
    var x = document.getElementById("dream");
    x.value = x.value.toUpperCase();
} 
function preferedBrowser() {
    prefer = document.forms[0].browsers.value;
    alert("You prefer browsing internet with " + prefer);
}
function myTrap() {
    document.getElementById("demo").innerHTML = "You selected some text";
}
function myPress() {
    alert("You pressed a key inside the input field");
}
function confirmInput() {
    fname = document.forms[0].fname.value;
    alert("Hello " + fname + "! You will now be redirected to www.w3Schools.com");
}
function myFam() {
    var x = document.getElementById("taco");
    x.value = x.value.toUpperCase();
}