<?php
//AuctionHouse.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
                                                                            
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_database = "auction";
	
	//delcare PHP variables
	
	$name = "name";
    
    if ($name != "")
    {
        $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
        
        if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
    
    $statement = $mysqli->prepare("SELECT seller FROM sales");
    $result = $conn->query($statement);
        
    if ($result = $name) {
        echo $result
    }
$conn->close();
?>