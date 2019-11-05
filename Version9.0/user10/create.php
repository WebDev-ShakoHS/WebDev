<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "root";
    $mysql_password = "shakopeesabers";
    $mysql_database = "shoes";
	
	//delcare PHP variables
	
	$brand = $_POST["brand"];
	$model = $_POST["model"];
    $colorway = $_POST["colorway"];
	$price = $_POST["price"];
	
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
	
		$statement = $mysqli->prepare("INSERT INTO shoelist (brand, model, colorway, price) VALUES(?, ?, ?, ?)"); //prepare sql insert query
		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('ssss', $brand, $model, $colorway, $price); //bind value
		if($statement->execute())
			{
				//print output text
					echo nl2br("Hello! Your item: ". $brand . " costs " .$price.  "\r\n . The colorway of this item is  ". $colorway. ". Your information has been saved!"  , false);
			}
			else{
					print $mysqli->error; //show mysql error if any 
				}

echo"<br><form action= 'goback.php' method = 'get'>";
echo "<input name = 'back'   type = 'submit' value = 'Go Back'></form>";
         }
else{
    echo ("error");
    }         
?>
<body>
<body background="https://c.static-nike.com/a/images/w_1920,c_limit,f_auto/bo2ewj3dpcajmb6yqmpd/air-jordan-1-banned-555088-001.jpg"> 
</body>
</style>
        <title>Add Item</title>
         <link href="style.css" rel="stylesheet" type="text/css"> 
    </style>
