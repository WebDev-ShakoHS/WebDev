<?php
//processexercise.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_database = "workout";
	
	//delcare PHP variables
	
    $password = $_POST["password"];
	$name = $_POST["name"];
	$exercise = $_POST["exercise"];
	$sets = $_POST["sets"];
	$reps = $_POST["reps"];
	$postButton = $_POST["post"];
    $passError = ("Please enter a Valid password");
    $passError1 = ("Please!");
	//echo nl2br("Hello ". $name ."! You are doing ". $exercise.  "\r\nDo Your Best". "\r\n", false);
	if (empty($password)){
        die($passError);
	}
if ($password =="asdfghj234r5t6yuixcvbnmuhygtfrdeswxdcfvg")
{

	
	echo nl2br("Hello ". $name . " ! You are doing". $exercise .  "\r\nDo Your Best". "\r\n", false);
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError1);
}	
}			
?>