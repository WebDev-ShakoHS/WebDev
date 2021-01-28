var button = document.getElementById("Button");
var currentnumber = document.getElementById("CurrentNumber");
var correctelement = document.getElementById("CorrectElement");
var targetelement = document.getElementById("TargetElement");
var currentstreak = document.getElementById("Streak");
var difficultyinput = document.getElementById("DifficultyInput");

var number = 0;
var difficulty = 2;
var canclick = true;
var cooldown = 2;
var streak = 0;
var target;

var correctsound = new Audio("sounds/Ding.mp3");
var wrongsound = new Audio("sounds/Wrong.mp3");

function Random(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function UpdateTarget() {
    target = Random(0,difficulty);
    targetelement.innerHTML = "Click the button when the numbers on " + target + "! (" + cooldown + " second cooldown)"
}

function SetDifficulty() {
    difficulty = difficultyinput.value;
    UpdateTarget()
}

UpdateTarget()

function Loop() {
    setTimeout(
        function() {
            number = Random(0, difficulty);
            currentnumber.innerHTML = number;
            Loop()
        },
        500
    )
}

Loop()

function ButtonClicked() {
    if (canclick == true) {
        if (number == target) {
            correctelement.innerHTML = "Nice!";
            correctsound.play();
            correctsound.currentTime = 0.3;
            canclick = false;
            streak += 1;
            currentstreak.innerHTML = "Streak : " + streak;
            setTimeout(function() {
                UpdateTarget()
                correctelement.innerHTML = ""
                canclick = true;
            },
            cooldown * 1000
            )
        } else {
            correctelement.innerHTML = "Missed it!";
            canclick = false;
            wrongsound.play();
            wrongsound.currentTime = 0.5;
            streak = 0;
            currentstreak.innerHTML = "Streak : " + streak;
            setTimeout(function() {
                correctelement.innerHTML = "";
                canclick = true;
            },
            cooldown * 1000
            )
        }
    } else {
        correctelement.innerHTML = "In cooldown!";
    }
}

difficultyinput.addEventListener("keypress",function(input) {
     console.log(input);
     if(input.key == "Enter") {
        SetDifficulty()
    }
})