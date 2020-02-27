function preferedBrowser() {
    prefer = document.forms[0].browsers.value;
    alert("It's awesome that you like " + prefer + ".");
}

document.addEventListener("DOMContentLoaded", function (event) {

    var e = document.getElementById("go");

    e.addEventListener("click", function () {

        var name = prompt("How much do you like HS?", "a lot");
        if (name != null && name != "") {
            output = name + "!? I totally like them more than you.";
        } else {
            output = "Whatever, man.";
        }

        document.getElementById("msg").innerText = output;

    }, false);

});

function myFunction() {
    document.getElementById("demo").innerHTML = "Ryan is really into sci-fi movies and shows!";
}
