<?php
//processStudentLogin.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "trang11";
    $mysql_password = "Roblox11";
    $mysql_database = "cars";
	
	//delcare PHP variables
	
	//$password = $_POST["password"];
	$firstName = $_POST["firstName"];
	$carBrand = $_POST["carBrand"];
	$carModel = $_POST["carModel"];
	$carYear = $_POST["carYear"];
	//$currentLocation = $_POST["currentLocation"];
	//$destinationLocation = $_POST["destinationLocation"];
	//$postButton = $_POST["givePass"];
    //$passError = ("Please enter a Valid password");
	
	//if (empty($password)){
    //    die($passError);
	//}   
//if ($password == "123")	
if (true)
{
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$statement = $mysqli->prepare("INSERT INTO carDreamList (name, car_brand, car_model, car_year) VALUES(?, ?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ssss', $firstName, $carBrand, $carModel, $carYear); //bind value
	 if($statement->execute()){
	//print output text
	echo nl2br("/n¡¡You have successfully enter your dream car!!");
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError);
}	
}			
?>