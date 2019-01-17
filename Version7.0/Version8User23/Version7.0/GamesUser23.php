<html lang="en">
<!--Version 3.0
	Name: Matthew Scalf
	Date Completed: 9/18/18
 -->
<head> 

<!-- your webpage info goes here -->
<style>  
  td {color: #FF0002;}
    body {background-image: linear-gradient(to right, skyblue, silver);

    }
</style>
<script src="JS/WebDevUser23_script.js"></script>
        
</head>
<body>
<li><a href="index.php">Back</a></li>
<link rel="stylesheet" href="WebDevUser23.css" type="text/css" />
<img src="https://foundrysu.com/asset/Event/6013/mancity.png" style="width:100px;height:100px;">
<h1>Reaction time test</h1>
<form method='POST'>
<input type="text" name="email" placeholder='gmail.com'>
<input type="submit" value="Submit Number">

<?php
$servername = "localhost";
$username = "mattscalf";
$password = "Thunder21";
$dbname = "emails";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
function valid_email($email)
{
  $result = trim($email);
  if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
  {
    return " is a valid email";
  } 
  else 
  {
    return " is not a valid email";
  }
}
$sql = "INSERT INTO validemails (cmails) VALUES ('{$email}')";
if (mysqli_query($conn, $sql)) {
      echo " New record created ";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo $email . valid_email($email);
?>

 


<!-- webpage content goes here in the body -->


<script language="JavaScript">

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
 responseString="Well done!";
 if (responseTime >= 0.10 && responseTime < 0.20)
 responseString="Nice!";
 if (responseTime >=0.20 && responseTime < 0.30)
 responseString="Could be better...";
 if (responseTime >=0.30 && responseTime < 0.60)
 responseString="Keep practising!";
 if (responseTime >=0.60 && responseTime < 1)
 responseString="Have you been drinking?";
 if (responseTime >=1)
 responseString="Did you fall asleep?";

 return responseString;
}

function stopTest()
{
 if(bgChangeStarted)
 {
 endTime=new Date();
 var responseTime=(endTime.getTime()-startTime.getTime())/1000;

 document.body.style.background="white"; 
 alert("Your response time is: " + responseTime + " seconds " + "\n" + remark(responseTime));
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

</script>

<p>Test your Response time! and see how close you are to the pros</p>
Click on "Start" first, and wait until the background color changes. As soon as it changes, hit "stop!"


<form name="response">
Change background color in: 
<select name="bgColorChange">
<option selected>deeppink
<option>aliceblue
<option>crimson
<option>darkkhaki
<option>cadetblue
<option>darkorchid
<option>coral
<option>chocolate
<option>mediumslateblue
<option>tomato
<option>darkslategray
<option>limegreen
<option>cornflowerblue
<option>darkolivegreen
</select>
<input type="button" value="start" onClick="startit()">
<input type="button" value="stop" onClick="stopTest()">

 
                <div id="footer">
                
        </div>
<script LANGUAGE="JavaScript">
<!--

/*
Submitted by David Gardner (davidgardner7@yahoo.com)
Featured on JavaScript Kit (http://javascriptkit.com)
For this and over 400+ free scripts, visit http://javascriptkit.com
*/

function startGame() {
    myGamePiece = new component(30, 30, "red", 10, 120);
    myGamePiece.gravity = 0.05;
    myScore = new component("30px", "Consolas", "black", 280, 40, "text");
    myGameArea.start();
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 480;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.frameNo = 0;
    },
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}
    </script>
    </form>
<h1>Enter a number here</h1>
<form method='post'>
<input type="text" name="number" placeholder='enter'>
 <input type="submit" value="Submit Number">
 </form>
<?php
$numbs = $_POST['number'];
function sum_of_digits($numbs) {
    $digits_sum = 0;
      for ($i = 0; $i < strlen($numbs); $i++) {
             $digits_sum += $numbs[$i];
               }
      return $digits_sum;
}
echo $numbs . ' becomes ' . sum_of_digits($numbs);
?>
<h1>Now try this</h1>
<p>Convert your words to numbers below!</p>
<form method='POST'>
<input type="text" name="var" placeholder='one;two;three'>
<input type="submit" value="Submit Number">
</form>
<?php
$word = $_POST['var'];
function word_digit($word) {
    $warr = explode(';',$word);
    $result = '';
    foreach($warr as $value){
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;    
        }
    }
    return $result;
}

echo $word . ' in numbers is:' . '</br>';
echo word_digit($word)."\n";
?>
    </body>
</html>