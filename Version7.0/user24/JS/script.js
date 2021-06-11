var space = " ";
var pos = 0;
var msg = "Shift Reviews";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();



function openwar() {
    window.open("https://www.pcgamesn.com/war-thunder/war-thunder-beginners-guide-tips-and-tricks-for-air-battles")
}



function openrust() {
    window.open("https://www.rustafied.com/rust-guides ")


}

function openr6() {
    window.open("https://guides.gamepressure.com/tom-clancys-rainbow-six-siege/ ")

}

function openD2() {
    window.open("https://www.shacknews.com/article/101225/destiny-2-complete-strategy-guide")

}

function login() {
    document.getElementById("logchange").innerHTML = "<h1><center>You Have Logged In</center></h1><center><h2>Here is your code 20OFFXB</h2></center>"

}

function alfachange() {
    document.getElementById("textChange").innerHTML = "<h3>War Thunder Sale</h3><p><i>Up to 30% on game items.</i></p><h3> War Thunder Update Soon? </h3><p><i>There have been possible leaks on an update for War Thunder.</i></p><h3>War Thunder plans to add modern day vehicles </h3> <p><i>During an interview the lead game designer hinted at modern day vehicles.</i></p>";
}

function betachange() {
    document.getElementById("textChange").innerHTML = "<h3>Rust Releases On Console</h3> <p><i>The Offical Rust Servers are now up and running for everyone to enjoy.</i></p>  <h3>Bugs/Glitch Fix</h3>  <p><i>The Developers have already released a statment that a bug fix will be coming in the following weeks. </i></p>  <h3>Plans to Add Cars</h3> <p><i>The plan to add cars to console version, which are in the PC version of the game are still not know.</i></p>";

}

function charliechange() {
    document.getElementById("textChange").innerHTML = "<h3>Siege Esports Leauge</h3> <p><i>Siege Leauge will have games on this Saturday from 12am to 5pm.</i></p> <h3>New Season</h3> <p><i>The new seasaon of siege will be releasing later this month which included two new opertators.</i></p> <h3>Invisible Glitch</h3>  <p><i>Ubisoft says they are aware of the new invisibility glitch and are working on a fix.</i></p>";

}

function deltachange() {
    document.getElementById("textChange").innerHTML = "<h3>Trials To Get An Update</h3> <p><i>The competitive mode trials will recive a new update following the season release.</i></p> <h3>Destiny 2 Adds old Destiny raids</h3> <p><i>Destiny 2 Developers have said that they plan to add old Destiny (1) raids into the game.</i></p> <h3>30 New Guns</h3> <p><i>Developers of Destiny 2 have released statments saying they plan to add up to 30 new guns during the new season set to release next month.</i></p>";

}