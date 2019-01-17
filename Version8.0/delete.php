<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "trang11";
    $mysql_password = "Roblox11";
    $mysql_database = "cars";
	
	$sharkName = $_POST["carBrand"];


if (true)
{
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$sql = "DELETE FROM carDreamList WHERE car_brand='${carBrand}'";
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	// $statement->bind_param('ssss', $firstName, $carBrand, $carModel, $carYear); //bind value
	//  if($statement->execute()){
	// //print output text
	// echo nl2br("¡¡You have successfully enter your dream car!!");
	//  }else{
	// 	 print $mysqli->error; //show mysql error if any 
	//  }
	
	if ($mysqli->query($sql) === TRUE) {
    echo "Dream Car has been successfully Delete";

	} else {
    echo "Error deleting record: " . $mysqli->error;
	}
}
else{ 
die($passError);
}	
}			
?> 

    