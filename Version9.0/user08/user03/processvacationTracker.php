<?php
//processvacationTracker.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_database = "vacation";
    
    
//declare PHP variables
    
    
	$password = $_POST["password"];
	$destination = $_POST["destination"];
	$dateLeft = $_POST["dateLeft"];
	$dateArrived = $_POST["dateArrived"];
	$postButton = $_POST["continue"];
    $passError = ("Please enter a Valid password");
	//echo nl2br("You Are going to ". $destination ."! You will leave on ". $dateLeft.  "\r\nYou will arive on". $dateArrived . "\r\n", false);
	if (empty($password)){
        die($passError);
	}   
if ($password == "0930")	
{
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$statement = $mysqli->prepare("INSERT INTO vacationinfo (destination, dateLeft, dateArrived) VALUES(?, ?, ?)");
	//(s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sss', $destination, $dateLeft, $dateArrived); //bind value
	 if($statement->execute()){
	
	echo nl2br("You Are going to ". $destination ."! You will leave on ". $dateLeft.  "\r\nYou will arive on". $dateArrived . "\r\n", false);
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError);
}	
}			
?>