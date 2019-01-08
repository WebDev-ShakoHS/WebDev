<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $mysql_host = "localhost";
    $mysql_username = "lightlylife";
    $mysql_password = "Rose12131";
    $mysql_database = "ghost";
    
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $address = $_POST["address"];
    
if (true)	
{
    	$mysqli = new mysqli($mysql_host,$mysql_username, $mysql_password, $mysql_database);
   
   if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	} 
	
		$statement = $mysqli->prepare("INSERT INTO trashpick (first_name, last_name, address) Values(?, ?, ?)");	//prepare sql insert query
	
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	
	$statement->bind_param('sss', $firstName, $lastName, $address); //bind value
	
	 if($statement->execute()){
	     	
	     	echo nl2br("Hello ". $firstName . ", someone will come in 10-12 business days to pick up your trash!". "\r\n", false);
	
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError);
}	
}			

?>
	
	
