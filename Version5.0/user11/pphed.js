function changeText() {
    document.getElementById("textChange").innerHTML = "Thanks for liking my Webpage";
}

function changeText2() {
    document.getElementById("textChange").innerHTML = "ahaha";
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
