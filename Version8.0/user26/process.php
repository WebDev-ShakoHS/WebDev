<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "nihadsyed28";
    $mysql_password = "Bblue11$";
    $mysql_database = "shoes";
	
	//delcare PHP variables
	
	//$password = $_POST["password"];
	$firstName = $_POST["firstName"];
	//$lastName = $_POST["lastName"];
	//$currentLocation = $_POST["currentLocation"];
	//$destinationLocation = $_POST["destinationLocation"];
	//$postButton = $_POST["givePass"];
    //$passError = ("Please enter a Valid password");
	

if (true)	
{
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$statement = $mysqli->prepare("INSERT INTO shoe (style) VALUES(?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s', $firstName); //bind value
	 if($statement->execute()){
	//print output text
	echo nl2br("Hello ". $firstName .  "\r\n", false);
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError);
}	
}
echo "<a href='WebDevUser26.php'>Home</a>"."\n";
?>