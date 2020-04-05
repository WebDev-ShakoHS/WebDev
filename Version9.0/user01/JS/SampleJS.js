$(document).ready(function(){
    //Theme changes
    $("#darken").click(function(){
        $("#body").addClass("dark");
    });
    $("#lighten").click(function(){
        $("#content").removeClass("dark");
        $("#content").addClass("light");
    });
    $("#lohmen").click(function(){
        $("#content").removeClass("dark");
        $("#content").addClass("light");
    });
});