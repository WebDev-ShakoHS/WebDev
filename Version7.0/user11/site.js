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
    var name2 = "I Don't Know Your Name Yet, but that's okay! Feel free to enter it so I know it for this session.";
} else {
    name2 = "Your Name Is: " + name22
}
if (name22 == "I Don't Know Your Name Yet, but that's okay! Enter your name in the box below!") {
    name2 = "Anon";
}

function txtchng() {
    document.getElementById("txtchng").innerHTML = (name2.replace('+', ' '));
}


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
var msg = "SavvyTech        ";

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

function cmds() {
    console.log("Commands:                                                                 changeText()                                                                 changeText2()                                                                 yourFunction()                                                                 validateForm()                                                                 whichElemente()                                                                 Scroll()                                                                 txtchng()                                                                 GetUrlValue()                                                                 name2 = 'what will be displayed'                                                                 then run txtchng()                          ");
}

function warning() {
    console.log("WARNING!                                                                 DO NOT PASTE ANYTHING IN THE DEVELOPER CONSOLE                                                                 YOU COULD POTENTIALLY BREAK THE WEBSITE OR                                                                 LEAVE YOURSELF AT RISK OF A SECURITY BREACH!                                                                                                                                  Site Loaded!")
}
