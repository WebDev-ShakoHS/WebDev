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
	$paypal_email = $_POST["paypal_email"];
	$amount = $_POST["amount"];
	$words = $_POST["words"];
//	$question_4 = $_POST["question_4"];
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
    
	$statement = $mysqli->prepare("INSERT INTO donate (firstName, lastName, paypal_email, amount, words) VALUES(?, ?, ?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sssss', $firstName, $lastName, $paypal_email, $amount, $words); //bind value
	 if($statement->execute()){
	//print output text
	echo nl2br("Hello ". $firstName ." ". $lastName .  "\r\nThank you for your generous donation". "\r\n", false);
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError);
}	
}			
?>

<!DOCTYPE HTML>
<html>
	<head>
		
	</head>
	<body>
		<a href="webDevUser4.html">Return Home</a>
	</body>
</html>