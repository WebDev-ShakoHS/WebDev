<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
		//mysql credentials
   $mysql_host = "localhost";
    $mysql_username = "lightlylife";
    $mysql_password = "Rose12131";
    $mysql_database = "ghost";
	
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$address = $_POST["address"];


if (true)
{
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$sql = "DELETE FROM sharkAdoptionList WHERE shark_name='${sharkName}'";
	$mysqli->query($sql);
	
		$statement = $mysqli->prepare("INSERT INTO trashpick (first_name, last_name, address) Values(?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sss', $firstName, $lastName, $address); //bind value
	 if($statement->execute()){
	//print output text
	echo nl2br("Entry successfully updated!");
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
    		<title></title>
    	</head>
    	<body>
    		<a href="https://php-practice-samyuravikumar.c9users.io/V8.0/webDevUser21.html">Return to Website</a>
    	</body>
    </html>