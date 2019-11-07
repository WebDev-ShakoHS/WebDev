function defeat() { 
    document.getElementById("explain").innerHTML = "Thank You so much! It looks like the other zombies took your reward! Travel to their base to retrieve it!";
    document.getElementById("boo").style.display="none";
    document.getElementById("kill").style.display="none";
}

function ok() {
    document.getElementById("dialogue").innerHTML = " ";
    document.getElementById("agent").style.display="none";
    document.getElementById("understand").style.display="none";
}

function grab() {
    document.getElementById("trophy").style.display="none";
    document.getElementById("grab").style.display="none";
}