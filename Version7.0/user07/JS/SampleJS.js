function randomMusic() {
    var number = Math.floor(Math.random() * 3);

    if(number === 0)
    {
        document.getElementById("songName").innerHTML = "First message.";
    }
    else if(number === 1)
    {
        document.getElementById("songName").innerHTML = "Second message.";
    }
    else
    {
        document.getElementById("songName").innerHTML = "Third message.";
    }
}