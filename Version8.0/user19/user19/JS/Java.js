function mtg() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Click here for more info about the game MTG";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"
src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
var hello;
$(document).ready(function () {
    $("#myBtn").click(function () {
        $('.toast').toast('show');
    });
});