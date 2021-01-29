


function change(){
var image = document.getElementById('Tree');
image.src ="images/Acacia_Tree.png";
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });

  function operatingSytem() {  
    var OSName="Unknown OS"; 
    if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows Is Able To Run Minecraft"; 
    if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS Is Able To Run Minecraft"; 
    if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX Is Able To Run Minecraft"; 
    if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux Is Able To Run Minecraft"; 
      
    // Display the OS name 
    document.getElementById("OS").innerHTML = OSName; 
}  
function Evoker(){
  var image = document.getElementById('Evoker');
  image.src ="images/EvokerV2.png";
  }
  function Vex(){
    var image = document.getElementById('Vex');
    image.src ="images/Vex.png";
    }