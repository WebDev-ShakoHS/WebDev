function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}

function changeText2() {
    document.getElementById("textChange").innerHTML = "ahaha";
}

function GetUrlValue(VarSearch) {
    var SearchString = window.location.search.substring(1);
    var VariableArray = SearchString.split('&');
    for (var i = 0; i < VariableArray.length; i++) {
        var KeyValuePair = VariableArray[i].split('=');
        if (KeyValuePair[0] == VarSearch) {
            return KeyValuePair[1];
        }
    }
}
var name22 = GetUrlValue('name')
if (name22 == null) {
    var name2 = "I Don't Know Your Name Yet!";
} else {
    name2 = "Your Name Is: " + name22
}
document.write(name2.replace('+', ' '));

function txtchng() {
    document.getElementById("txtchng").innerHTML = (name2.replace('+', ' '));
}
var stupidButton = {
    init: function () {
        this.attachEvents();
    },

    attachEvents: function () {
        $('#runaway-container').on('hover', this.flyAway);
        $('#runaway').on('click', this.showWin);
    },

    flyAway: function (e) {
        mLeft = Math.random() * 400;
        mTop = Math.random() * 400;

        $('#runaway-container').css('margin-left', mLeft);
        $('#runaway-container').css('margin-top', mTop);
    },

    showWin: function (e) {
        alert('you are cheater leave my website.');
        window.location.replace("https://lmgtfy.com/?q=how+to+get+a+life+and+stop+cheating+on+bad+websites+I+have+a+problem+help+me&iie=1");
    }
};

stupidButton.init();

var space = " ";
var pos = 0;
var msg = "User 19";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();
var space = " ";
var pos = 0;
var msg = "Version 5 Frame";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();

function whichElemente(e) {
    var targ;
    if (!e) {
        var e = window.event;
    }
    if (e.target) {
        targ = e.target;
    } else if (e.srcElement) {
        targ = e.srcElement;
    }
    var tname;
    tname = targ.tagName;
    alert("You clicked on a " + tname + " element.");
}

function validateForm() {
    var x = document.forms["your_form"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}

function yourFunction() {
    var action_src = "#" + document.getElementsByName("name")[0].value;
    var your_form = document.getElementById('your_form');
    your_form.action = action_src;
}

function validateForm() {
    var x = document.forms["your_form"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
