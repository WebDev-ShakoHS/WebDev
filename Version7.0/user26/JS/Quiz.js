var body = document.getElementById("MainBody");
var selection = document.getElementById("Options");
var selectbutton = document.getElementById("SelectButton");
var currentquestion = document.getElementById("CurrentQuestion");
var quizname = document.getElementById("QuizName")

var quizzes = {
    [0]:{
        name:"About me",
        question:"What is my last name?",
        correct:"Nomo",
        options:{
            [0]:"Nemo",
            [1]:"Nomo",
            [2]:"NomoNachos",
        }
    },
    [1]:{
        name:"Teachers",
        question:"Who is a great teacher?",
        correct:"Literally every teacher",
        options:{
            [0]:"Mr. Mainehardt",
            [1]:"Mr. Mainehardt",
            [2]:"Literally every teacher",
        }
    },
    [2]:{
        name:"Games",
        question:"What is the best selling game of all time?",
        correct:"Minecraft",
        options:{
            [0]:"Minecraft",
            [1]:"GTA V",
            [2]:"Among us",
        }
    }
};

var select;
var index = 0;

function NextQuestion() {
    if(index != Object.keys(quizzes).length) {
        selection.innerHTML = null;
        select = quizzes[index];
        currentquestion.innerHTML = select.question;
        quizname.innerHTML = select.name;
        var empty = document.createElement("option");
        selection.append(empty);
        selection.value = empty;
        for(var i = 0;i < Object.keys(select.options).length; i++) {
            var option = document.createElement("option");
            option.innerHTML = select.options[i];
            selection.append(option);
        }
    } else {
        currentquestion.innerHTML = "That was the last of the questions!";
    }
}

NextQuestion()

function SubmitAnswer() {
    console.log(selection.value);
    if(quizzes[index] != undefined) {
        var text = "Incorrect!";
        var color = "red";
        var oldcolor = currentquestion.style.color;
        if(quizzes[index].correct == selection.value) {
            text = "Correct!";
            color = "green";
        }
        currentquestion.innerHTML = text;
        currentquestion.style.color = color;
        setTimeout(function() {
            index += 1;
            currentquestion.style.color = oldcolor;
            NextQuestion()
        },
        1000,
        )
    }
}
