<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
   
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "nethergolem";
    $mysql_password = "Aik0@wCake";
    $mysql_database = "story_requests";
	
	//delcare PHP variables
	
//	$password = $_POST["password"];
	$title = $_POST["title"];
	$request = $_POST["request"];
//	$currentLocation = $_POST["currentLocation"];
//	$destinationLocation = $_POST["destinationLocation"];
//	$postButton = $_POST["givePass"];
//  $passError = ("Please enter a Valid password");
	
if (true)	
{
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$statement = $mysqli->prepare("INSERT INTO requests (title, request) VALUES(?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ss', $title, $request); //bind value
	 if($statement->execute()){
	//print output text
	echo nl2br("Your request ". $title . " will be processed now.", false);
	echo '<center><li><a href="webDevUser29.html">Home</a></li></center>';
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError);
}	
}			
?>