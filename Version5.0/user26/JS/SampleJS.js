var potentialmessages = {
    [0]: "pls stop",
    [1]: "i like coffee",
    [2]: "hello",
    [3]: "goodbye",
    [4]: "why r u clicking me",
    [5]: "dhurejwhsdfukrejhsbdfkuhjdf",
};

var selectedsize = "h1";

function randomNumber(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

function sizeChanged(id) {
    var select = document.getElementById(id);
    selectedsize = select.value;
}

function createSizeOptions() {
    var form = document.getElementById("InteractionForm");
    var select = document.getElementById("Sizes");
    for (var i = 1; i < 9; i++) {
        var option = document.createElement("option");
        var text = "h" + i.toString();
        option.innerHTML = text;
        option.value = text;
        select.append(option);
    }
}

function imageAdded(id) {
    var currentimage = document.getElementById("InputImage");
    var input = document.getElementById(id);
    var reader = new FileReader();
    reader.onload = function (e) {
        currentimage.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}

function createRow(id) {
    var textbox = document.getElementById("ElementCreationBox");
    if (textbox.value != "") {
        var form = document.getElementById(id).parentElement;
        var row = form.parentElement;
        var newcontent = document.createElement(selectedsize);
        newcontent.innerHTML = textbox.value;
        row.append(newcontent);
    }
    return false;
}

function randomColorText(id) {
    var button = document.getElementById(id);
    var letters = button.innerHTML;
    button.innerHTML = "Click for RANDOM COLORS";
    var chosencolor = "#" + Math.floor(Math.random() * 16777215).toString(16);
    button.style.color = chosencolor;
}

function transparentButton(id) {
    var button = document.getElementById(id);
    button.style.background = "none";
    button.style.border = "none";
}

function randomMessage(id) {
    var num = randomNumber(Object.keys(potentialmessages).length);
    alert(potentialmessages[num]);
}



