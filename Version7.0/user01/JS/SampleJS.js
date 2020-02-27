$(document).ready(function () {
    //Trivia jQuery
    $("#q1").click(function () {
        $("#a1").text("The Chupacabra is a Mexican folk legend (goatsucker) monster who is known to drink the blood of goats. This is why the bartender gives him a goat in a glass when he asks for a drink.");
    });
    $("#q2").click(function () {
        $("#a2").text("Wanda is a mother of 70!");
    });
    $("#q3").click(function () {
        $("#a3").text("One of the biggest animating challenges was Dracs' cape; the cape is almost a whole character in and of itself.");
    });
    $("#q4").click(function () {
        $("#a4").text("The Kraken.");
    });
    $("#q5").click(function () {
        $("#a5").text("Aaron LaPlante.");
    });
    $("#h1").click(function () {
        $("#a1").text("What is a Chupacabra?");
    });
    $("#h2").click(function () {
        $("#a2").text("How many children does Wanda have?");
    });
    $("#h3").click(function () {
        $("#a3").text("What was a big trouble to animate in the movie?");
    });
    $("#h4").click(function () {
        $("#a4").text("What is the largest monster in the franchise?");
    });
    $("#h5").click(function () {
        $("#a5").text("Who are the gremlins from the monster airline voiced by?");
    });
    //Play Again Button on game.html jQuery
    $("#refresher").click(function (){
        location.reload();
    });
    //Plot button shower or hider
    $("#spoiler").click(function (){
        $("#plott").text("Your favorite monster family boards a luxury cruise ship so Dracula can take a summer vacation from the hotel. It's smooth sailing for the pack as they indulge in all of the fun the cruise has to offer, including monster volleyball, exotic excursions and catching up on their moon tans. But the dream vacation soon turns into a nightmare when Mavis realizes Drac has fallen for the mysterious captain of the ship, Ericka, who hides a dangerous secret that could destroy them all.");
    });
    $("#hider").click(function (){
        $("#plott").text("Spoilers?");
    });
});
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
