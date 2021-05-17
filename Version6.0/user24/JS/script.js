var space = " ";
var pos = 0;
var msg = "Why Did You Come Here";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();




function changeText() {
    document.getElementById("textChange").innerHTML = "<u>Thanks for liking my Webpage</u>";
}



function disable() {
  document.getElementById("mySelect").disabled=true;
}
function enable() {
  document.getElementById("mySelect").disabled=false;
}

  function mouseover(){
      document.getElementById("Mouse").innerHTML = "<span style='color: red;'>WHY DID YOU GET CLOSE</span>";

  }
 
  function mouseout() {
    document.getElementById("Mouse").innerHTML = "<span style='color: black;'>Do Not Come Near Me</span>";

  }

  function whereamI(event) {
    document.getElementById("coords").innerHTML = "X = " + event.screenX + "<br>Y = " + event.screenY;
  }

  function error404() {
    window.open("error.HTML");
  }

  function close404() {
    window.close();

  }
  

  function show_coords(event) {
    document.getElementById("coords").innerHTML = "X= " + event.clientX + "<br>Y= " + event.clientY;
  }
