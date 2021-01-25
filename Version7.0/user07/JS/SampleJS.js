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