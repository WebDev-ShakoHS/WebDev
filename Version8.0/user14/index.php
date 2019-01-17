<html lang="en">
<!--Version 3.0 
	Name: Michael Morgovsky
	Date Completed: 9/18/18
 -->
<head>
<!-- your webpage info goes here -->
<style>  
  td {color: #FF0000;}
  body {background-image: linear-gradient(to right, #00FFFF , #FF0000)}
</style>
<script src="JS/webDevUser14_script.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="page">
<div id="logo">
<h1>The Flat Earth Society</h1>
<form method='POST'>
<h2>Please input your name:</h2>
<input type="text" name="name">
<input type="submit" value="Submit Name">
</form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name, fellow flat Earther </h3>";
?>



</div>
<img src='images/user14/flatearth.jpg' style="width:200px;height:200px;">
<div id="nav">
<ul>
<li><a href="homeuser14.php">Home</a></li>
<li><a href="javascriptgamesuser14.php">Math Scripts</a></li>
<li><a href="mytopsongsuser14.php">Music</a></li>
</ul>        
</div>
<div id="content">
</div>
</form>
</body>
</html>