$(document).ready(function() {
    $("#hidden").hover(function() {
        $(this).css("color", "black");
    },
    function() {
        $(this).hide();
        $(this).css("display", "none");
    });
    $("#Darkm").click(function() {
        $("#body").removeClass("day");
        $("#body").addClass("night");
    });
    $("#Lightm").click(function() {
        $("#body").removeClass("night");
        $("#body").addClass("day");
    });
});
