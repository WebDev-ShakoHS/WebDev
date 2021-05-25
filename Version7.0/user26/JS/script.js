function ButtonClick() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
function changeText() {
    document.getElementById("textChange").innerHTML = "<b> Click on the boxes to add to your order</b>";
}
function TextAlert() {
    alert("Successful ID");
}
function ButtonClickdes() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
function ButtonClickside() {
    document.getElementById("myDropdown1").classList.toggle("show");
}
function changeTextf() {
    document.getElementById("textChangef").innerHTML = "<b> French Fries</b>";
}
function changeTextd() {
    document.getElementById("textChanged").innerHTML = "<b>Sundae</b>";
}
function changeTextck() {
    document.getElementById("textChangeck").innerHTML = "<b>Chicken</b>";
}
function changeTextm() {
    document.getElementById("textChangem").innerHTML = "<b>Little Mac</b>";
}
function changeTextch() {
    document.getElementById("textChangech").innerHTML = "<b>Cheeseburger</b>";
}
function PressText(event) {
    alert("Takeout Successful")
}
function PressTextReview(event) {
    alert("Thank you for your review")
}
function changeTextsun() {
    document.getElementById("textChangesun").innerHTML = "<b> $7.99</b>";
}
