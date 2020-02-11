function changeText() {
 document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
}
function joe() {
 document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
}
var stupidButton = {
	init: function() {
		this.attachEvents();
	},

	attachEvents: function() {
		$('#runaway-container').on('hover', this.flyAway);
		$('#runaway').on('click', this.showWin);
	},

	flyAway: function(e) {
		mLeft = Math.random() * 400;
		mTop = Math.random() * 400;

		$('#runaway-container').css('margin-left', mLeft);
		$('#runaway-container').css('margin-top', mTop);
	},

	showWin: function(e) {
		alert('you are cheater leave my website.');
        window.location.replace("https://lmgtfy.com/?q=how+to+get+a+life+and+stop+cheating+on+bad+websites+I+have+a+problem+help+me&iie=1");
	}
};

stupidButton.init();