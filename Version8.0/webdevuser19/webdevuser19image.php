<div id="nav">
    <title>PEDER</title>
        <ul>
            <h2><a href="index.html">Back</a></h2>
        </ul>
    </div>
<title>Peder</title>
<style>  
  td {color: #FF0000;}
    body {background: linear-gradient(blue,white,red)}
</style>
<!doctype html>
<html>
<head>
	<meta charset=utf-8>
    <link rel="stylesheet" href="lessonfive.css">
	<title>Appending Content</title>
</head>
<body>
<img src="user19/Peder.jpg" alt="Peder.jpg" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</body>

   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Please rate this Picture:</h2>
 <input type="text" placeholder="Name" name="name">
 <input type='number' placeholder="Rate this pic. 1-10" name="rating" min='0' max'10'>
 <input type="submit" value="Submit Name">
 </form>
<?php
$host = "localhost";
$dbname ="peter";
$username = "peterno";
$password = "password";
$link = mysqli_connect($host, $username, $password, $dbname);
$name = $_POST['name'];
$rate = $_POST['rating'];

$sql = "INSERT INTO petertable (name, rate) VALUES ('{$name}', '{$rate}')";
if(mysqli_query($link, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
if ($rate>5)
{echo "<h3> Thanks for rating $rate, $name! </h3>";}
else;
?>
</body>
</html>
