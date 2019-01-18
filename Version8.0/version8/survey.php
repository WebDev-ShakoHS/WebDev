<!DOCTYPE HTML>
<html>
	<head>
		<style>
	/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
    <style>
	article {
		width: 600px;
		margin: auto;
	}
	blockquote.co {
		float: right;
		background: #e3e3e3;
		font-size: 2em;
		width: 35%;
		text-align: center;
	}
	</style>
    <style>
        body {
            background: blue;
            color:white;
        }
    </style>
		
	</head>
	<body>
		<div class="topnav">
  <a href="webDevUser4.html">Home</a>
  <a class="active" href="survey.html">Survey</a>
  <a href="images.php">Images</a>
  <a href="poll.html">Poll</a>
  <a href="rewind.html">Meme of The Year</a>
  <a href="donate.html">Donate</a>
  <a href="/version8/phpEventCalendar_Lite/index.php">Calender</a>
</div>
	</body>
</html>
<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "jappleseed235";
    $mysql_password = "Tanner236";
    $mysql_database = "user4";
	
	//delcare PHP variables
	
//	$password = $_POST["password"];
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$question_1 = $_POST["question_1"];
	$question_2 = $_POST["question_2"];
	$question_3 = $_POST["question_3"];
	$question_4 = $_POST["question_4"];
//	$currentLocation = $_POST["currentLocation"];
//	$destinationLocation = $_POST["destinationLocation"];
//	$postButton = $_POST["givePass"];
//    $passError = ("Please enter a Valid password");
	
  
if (true)	
{
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$statement = $mysqli->prepare("INSERT INTO survey (firstName, lastName, question_1, question_2, question_3, question_4) VALUES(?, ?, ?, ?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ssssss', $firstName, $lastName, $question_1, $question_2, $question_3, $question_4); //bind value
	 if($statement->execute()){
	//print output text
	echo nl2br("Hello ". $firstName ." ". $lastName .  "\r\nThank you for your participation in the survey ". $currentLocation . "\r\n", false);
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError);
}	
}			
?>