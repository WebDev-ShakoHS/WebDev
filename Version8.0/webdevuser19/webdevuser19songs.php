<html lang="en">
 <div id="nav">
     <title>Songs</title>
        <h2><a href="index.html">Back</a></h2>
    </div>
<style>
 p{
  color: red;
 }
	body {
		width: 300px;
		margin: 100px auto 0;
	}
	* { margin: 0; padding: 0; }
    img{
    width: 300px;
    }
    td {color: #000000;}
    body {background: linear-gradient(red,white,blue)}
</style>
	<link rel="stylesheet" href="user19/user19slider.css">
<?php
//$host = "localhost";
//$dbname ="peter";
//$username = "peterno";
//$password = "password";
//$link = mysqli_connect($host, $username, $password, $dbname);
//$query="SELECT * FROM petertable ORDER BY 'rate' DESC ";
//$result = mysql_query($query);
//echo "<table>"; // start a table tag in the HTML
//while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
//echo "<tr><td>" . $row['name'] . "</td><td>" . $row['rate'] . "</td></tr>";  //$row['index'] the index here is a field name
//}
//echo "</table>"; //Close the table in HTML

//mysql_close();
//?>
<?php
$connection = mysql_connect('localhost', 'peterno', 'password'); //The Blank string is the password
mysql_select_db('peter');

$query = "SELECT * FROM petertable WHERE rate <> 0 ORDER BY rate DESC"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>
<h2>Top Things of All Time</h2>
<tr><th>Name</th><th>Rate</th></tr>"; // start a table tag in the HTML
while($row = mysql_fetch_array($result)){//Creates a loop to loop through results
echo "
<tr><td>" . $row['name'] . "</td><td>" . $row['rate'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close();
?>

</body>
</html>