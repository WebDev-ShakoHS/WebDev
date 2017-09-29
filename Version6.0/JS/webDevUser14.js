// rock paper scissors

points = 0; // initial points
past = ""; // NO HISTORY
clicks = 0; // NO HISTORY
move = ["rock", "paper", "scissors"] // available moves
comment = ["wow", "sugoi desu ne", "omae wa mou shindeiru", "nani!?", "nice job", "brielle is such a cool person", "git gud. haha ... git", "wow try harder", "is that so...", "MADA MADA", "hey!", "there!", "boku no yaiba", "I'M NOT A FAKE", "NEW DROP! it's yagen.", "laugh with nikkari", "genji banzai", "ryuu ga waga teki wo kurau", "tada, my special move!", "odoroitaka", "ryujin no ken wo kurae", "it's high noon", "YAA YAA KORENARU WA", "KAMAKURA JIDAI NO UCHIGATANA", "NAKIGITSUNE TOMOUSHIMASU", "YAA YAA", "the rng here is rigged", "are you reading these?", "(giddy excitement)", "NEW DROP! just another kane-san", "how's that, amazing right?",
"you smith ... 1:30", "you smith once more... 1:30", "you smith again ... 1:30", "you smith another ... 1:30", "gotta catch 'em all, but what is there to catch", "I WANNA BE THE VERY BEST", "LIKE NO ONE EVER WAS", "TO CATCH THEM IS MY REAL TEST", "TO TRAIN THEM IS MY CAUSE", "I WILL TRAVEL ACROSS THE LAND", "SEARCHING FAR AND WIDE", "TEACH POKÉMON TO UNDERSTAND", "THE POWER THAT'S INSIDE", "POKÉMON", "GOTTA CATCH 'EM ALL", "IT'S YOU AND ME", "I KNOW IT'S MY DESTINY", "OOH, YOU'RE MY BEST FRIEND", "IN A WORLD WE MUST DEFEND", "A HEART SO TRUE", "OUR COURAGE WILL PULL US THROUGH", "YOU TEACH ME AND I'LL TEACH YOU",
"EVERY CHALLENGE ALONG THE WAY", "WITH COURAGE I WILL FACE", "I WILL BATTLE EVERYDAY", "TO CLAIM MY RIGHTFUL PLACE", "COME WITH ME, THE TIME IS RIGHT", "THERE'S NO BETTER TEAM", "ARM IN ARM, WE'LL WIN THE FIGHT", "IT'S ALWAYS BEEN OUR DREAM", "credit to my best bot hotaru", "love ya ~ <3", "kudos to the individual that gets the whole pokémon theme in order", "will you marry me? hehe", "the grind is real", "you can't spell pain without paint", "pika ~", "pika pi ~", "KA KA KA KA KA", "UOOOOOH!", "these comments don't make sense, do they", "yolo", "the rng here is really rigged"]
// many comments because ... ya

// the backbone of this game
function botRNG() {
    botMove = move[Math.floor(Math.random() * move.length)] // bot: rock, paper, or scissors
    botComment = comment[Math.floor(Math.random() * comment.length)] // comment
}

// debugging purposes but idk maybe you're lazy at rps
function userRNG() {
    userMove = move[Math.floor(Math.random() * move.length)] // user: rock, paper, or scissors
}

// the true backbone of this whole file
function rpsResult() {
    if (botMove == userMove) { // user = bot
        result = "it's a tie!" // tie
    }
    else if (botMove == "rock") { // bot: rock
        if (userMove == "paper") { // user: paper
            result = "you win!" // user wins, bot loses
            points = points + 1; // points system +1
        }
        if (userMove == "scissors") { // user: scissors
            result = "you lose!" // user loses, bot wins
            points = points - 1; // points system -1
        }
    }
    else if (botMove == "paper") { // bot: paper
        if (userMove == "rock") { // user: rock
            result = "you lose!"
            points = points - 1;
        }
        if (userMove == "scissors") { // user: scissors
            result = "you win!"
            points = points + 1;
        }
    }
    else if (botMove == "scissors") { // bot: scissors
        if (userMove == "rock") { // user: rock
            result = "you win!"
            points = points + 1;
        }
        if (userMove == "paper") { // user: paper
            result = "you lose!"
            points = points - 1;
        }
    }
    clicks = clicks + 1; // to keep track
    past = past + clicks + ". (" + userMove + ") " + botMove + "! " + result + "<br>" // aggregator
    document.getElementById("rps").innerHTML = "(" + userMove + ") " + botMove + "! " + result; // current result
    document.getElementById("score").innerHTML = "you have " + points + " points. <br>" + botComment; // current score
    document.getElementById("moves").innerHTML = past // aggregator textbox
}

// debugging purposes but idk maybe you're lazy at rps
function tsugiNi() { // t/n: tsugi ni means next
    for (i = 0; i < times; i++) {
        botRNG(); // bot move
        userRNG(); // user move
        rpsResult(); // result
    }
    document.getElementById("rps").innerHTML = "<br>"; // removes current result
}

// erase the mistakes you have done
function horikawa() { // *cough*
    clicks = 0; // clear clicks
    past = ""; // CHANGE HISTORY!!! no more
    points = 0; // clear points
    document.getElementById("rps").innerHTML = "<br>"; // removes current result
    document.getElementById("score").innerHTML = "you have " + points + " points.<br><br>"; // removes current points
    document.getElementById("moves").innerHTML = ""; // shows the effects of changing history *cough*
}



// reaction time thing from 1.5

var startTime=new Date();
var endTime=new Date();
var startPressed=false;
var bgChangeStarted=false;
var maxWait=20;
var timerID;

function startTest()
{
 document.body.style.background=document.response.bgColorChange.options[document.response.bgColorChange.selectedIndex].text;
 bgChangeStarted=true;
 startTime=new Date();
}

function remark(responseTime)
{
 var responseString="";
 if (responseTime < 0.10)
 responseString="well done!";
 if (responseTime >= 0.10 && responseTime < 0.20)
 responseString="nice!";
 if (responseTime >=0.20 && responseTime < 0.30)
 responseString="could be better...";
 if (responseTime >=0.30 && responseTime < 0.60)
 responseString="keep practicing!";
 if (responseTime >=0.60 && responseTime < 1)
 responseString="have you been drinking?";
 if (responseTime >=1)
 responseString="did you fall asleep?";

 return responseString;
}

function stopTest()
{
 if(bgChangeStarted)
 {
 endTime=new Date();
 var responseTime=(endTime.getTime()-startTime.getTime())/1000;

 document.body.style.background="white"; 
 alert("your response time is: " + responseTime + " seconds " + "\n" + remark(responseTime));
 startPressed=false;
 bgChangeStarted=false;
 }
 else
 {
 if (!startPressed)
 {
 alert("press start first to start test");
 }
 else
 { 
 clearTimeout(timerID);
 startPressed=false; 
 alert("cheater! you pressed too early!");
 } 
 }
}

var randMULTIPLIER=0x015a4e35;
var randINCREMENT=1;
var today=new Date();
var randSeed=today.getSeconds();
function randNumber()
{
 randSeed = (randMULTIPLIER * randSeed + randINCREMENT) % (1 << 31);
 return((randSeed >> 15) & 0x7fff) / 32767;
}

function startit()
{
 if(startPressed)
 {
 alert("Already started. Press stop to stop");
 return;
 }
 else
 {
 startPressed=true; 
 timerID=setTimeout('startTest()', 6000*randNumber());
 }
}



// from 1.6

function changeText() {
    document.getElementById("textChange").innerHTML = "y-you clicked it...! omg...! (my blog still links <a href=\"http://sweden-da.tumblr.com\" target=\"_blank\">here</a>, hehe)";
}

var space = " ";
var pos = 0;
var msg = "watashi no website";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}

Scroll();