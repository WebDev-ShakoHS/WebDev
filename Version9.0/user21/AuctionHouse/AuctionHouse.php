<?php
//AuctionHouse.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
                                                                            
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_database = "auction";
	
	//delcare PHP variables
	
	$item = $_POST["item"];
	$description = $_POST["description"];
	$price = $_POST["price"];
	$seller = $_POST["seller"];
	$sellbutton = $_POST["sell"];
    $saleError = ["please enter more information"];
	
	if (empty($price or $item or $seller)){
        die($priceError);
	}   
if ($item and $price and $seller != "")
{
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$statement = $mysqli->prepare("INSERT INTO sales (item, description, price, seller) VALUES(?, ?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ssis', $item, $description, $price, $seller); //bind value
	 if($statement->execute()){
	//print output text
	echo nl2br("Hello ". $seller. "! You are selling ". $item.  " for ". $price . " dollars");
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($saleError);
}	
}			
?>