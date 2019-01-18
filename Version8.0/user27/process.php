<?php
//processStudentLogin.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "brendan238211";
    $mysql_password = "1234567890";
    $mysql_database = "ip";
	
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
	if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
	
	
$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);	

	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$statement = $mysqli->prepare("INSERT INTO block (ip) VALUES(?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s', $ip_address); //bind value
	 if($statement->execute()){
	//print output text
	echo nl2br(" <h1 style='color:Tomato;'> Sorry but your IP adress ". $ip_address ." has been blocked. Shame on you. </h1> ". "\r\n", false);
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }

	
	
	
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$statement = $mysqli->prepare("INSERT INTO shoe (style) VALUES(?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	//$statement->bind_param('s', $firstName); //bind value
	 //if($statement->execute()){
	//print output text
	//echo nl2br("Hello ". $firstName . "\r\n", false);
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError);
}	

if($ip_address = '74.113.122.2') {
	print 'no ';
}else{
for ($i = 1; $i < 7; $i++) {
  for ($j = 1; $j < 7; $j++) {
     if ($j == 1) {
       echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
     } else {
       echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
     }
  }
  echo "\r\n";
}
}

if($ip_address = '74.113.122.2') {
	print 'no ';
}else{
echo 'Current PHP version : ' . phpversion();
  // prints e.g. '2.0' or nothing if the extension isn't enabled
  echo phpversion('tidy')."\n";
}
  
if($ip_address = '74.113.122.2') {
	print 'no ';
}else{  
function remove_duplicates_list($list1) {
  $nums_unique = array_values(array_unique($list1));
  return $nums_unique ;
}
$nums = array(1,1,2,2,3,4,5,5);
print_r(remove_duplicates_list($nums));
}

if($ip_address = '74.113.122.2') {
	print 'no ';
}else{
$text = 'PHP Practice2';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
}

if($ip_address = '74.113.122.2') {
	print 'no';
}else{
echo 'Current script owner: ' . get_current_user()."\n";
}
?>