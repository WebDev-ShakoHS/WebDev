<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
	//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "brandonneri";
    $mysql_password = "123456789";
    $mysql_database = "login";
	
	//delcare PHP variables
	$username = $_POST["username"];
	$password = $_POST["password"];
	
if (true)	
{
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$statement = $mysqli->prepare("INSERT INTO info (username, password) VALUES(?,?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ss', $username, $password); //bind value
	 if($statement->execute()){
		//print output text
		echo nl2br("".$username."". $password ."", false);
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError);
}	
}			
?>