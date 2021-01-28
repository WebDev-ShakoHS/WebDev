function randomMusic() {
    var number = Math.floor(Math.random() * 3);

    if(number === 0)
    {
        document.getElementById("songName").innerHTML = "Panzerkampf, By Sabaton. (This song is about the Battle of Kursk)";
    }
    else if(number === 1)
    {
        document.getElementById("songName").innerHTML = "The Only Thing They Fear Is You, By Mick Gordon.";
    }
    else
    {
        document.getElementById("songName").innerHTML = "Light In The Black, By Sabaton. (This song is about peacekeeping forces, ex. The United Nations) ";
    }
}


function onloadindex() {
    alert ("Welcome to the Index page!") ;
}

function onloadaboutme() {
    alert ("Welcome to the About me page!") ;
}

function onloadmusic() {
    alert ("Welcome to the Music page!") ;
}

function onloadlists() {
    alert ("Welcome to the Lists page!") ;
}

function onloadgames() {
    alert ("Welcome to the Games page!") ;
}

function onloadFAQ() {
    alert ("Welcome to the FAQ page!") ;
}

