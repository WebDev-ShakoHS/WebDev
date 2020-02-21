function changeText() {
    document.getElementById("textChange").innerHTML = "<h1>Thanks :3 </h1>";
}

function cry() {
    document.getElementById("textChange").innerHTML = "<h1><strong> >:( </strong></h1>";
}

function noCat() {
    document.getElementById("cat").innerHTML = " ";
}

function ohNo() {
    document.getElementById("cat").innerHTML = "<img src='images/table%20cat.png' width='300px'>";
}

function ohYea() {
    document.getElementById("cat").innerHTML = "<img src='images/corn%20cat.jpg' width='300px'>";
}

function Bunny () {
    document.getElementById("bunny").innerHTML = '<img src="images/cute%20bunny.jpg" width="300px">';
}

function petBunny() {
    document.getElementById("bunny").innerHTML = '<img src="images/bunny%20attack.jpg" width="500px" id="bunny" type="button" onclick="petBunny()">';
}

function OHGOD() {
   document.getElementById("bunnyText").innerHTML = "OH GOD IT'S GONNA KILL US ALL";
}

function resetMessage() {
    alert("Thank you for your sacrifice.");
}
