
<?php

$con = mysql_connect("localhost","trang11","Roblox11");
     if(!$con){
           die("Database Connection failed".mysql_error());
}else{
$db_select = mysql_select_db("cars", $con);
     if(!$db_select){
           die("Database selection failed".mysql_error());
}else{ 

   } 
}

$records = mysql_query("SELECT * FROM carDreamList");

 

?>

<!-- This piece of PHP code defines the structure of the html table -->

 

<!DOCTYPE html>
<html>
    <head>
        <title> Fetching data </title>
        
        <style>  
  td {color: #FF0000;}
  body {background-image: linear-gradient(to right, #7CFC00 , #FFFFFF)}
    
  blockquote.co {
		float: right;
		background: #e3e3e3;
		font-size: 2em;
		width: 35%;
		text-align: center;
	}
        </style>
        
    </head>

    <body>
        <h1><center></hi><a href="https://php-practice-trang11.c9users.io/Version8.0/webDevUser18.html">Go back</a></center></h1>
        <center><table width="400" border="3" cellpadding="3" cellspacing='2'></center>

           <tr bgcolor="#7CFC00">
                     <th>Name</th>
                     <th>Car Brand</th>
                     <th>Car Model</th>
                     <th>Car Year</th>
           </tr>

<!-- We use while loop to fetch data and display rows of date on html table -->

<?php

     while ($course = mysql_fetch_assoc($records)){

           echo "<tr>";
               echo "<td>".$course['name']."</td>";
               echo "<td>".$course['car_brand']."</td>";
               echo "<td>".$course['car_model']."</td>";
               echo "<td>".$course['car_year']."</td>";
           echo "</tr>";

     }
?>
        </table>

<h2>Delete Your Dream Car</h2>
    <form method='post' action='delete.php'>
        <input type="text" placeholder="Car Name" name='carBrand'>
        <input type='submit' value='Delete Car' name='delete'>
    </form>

<h2>Change Your Dram Car</h2>
<p>Fill out the boxes below to change your mind abot your dream car.</p>
    <form method='post' action='Update.php'>
        <input type="text" placeholder="Your Name" name='firstName'>
        <input type="text" placeholder="Car Brand" name='carBrand'>
        <input type="text" placeholder="Car Model" name='carModel'>
        <input type="text" placeholder="Car Year" name='carYear'>
        <input type='submit' value='Update' name='delete'>
    </form>


   </body>

</html>