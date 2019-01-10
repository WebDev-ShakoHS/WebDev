
<?php

$con = mysql_connect("localhost","samyuravikumar","Minnesota1858");
     if(!$con){
           die("Database Connection failed".mysql_error());
}else{
$db_select = mysql_select_db("sharks", $con);
     if(!$db_select){
           die("Database selection failed".mysql_error());
}else{ 

   } 
}

$records = mysql_query("SELECT * FROM sharkAdoptionList");

 

?>

<!-- This piece of PHP code defines the structure of the html table -->

 

<!DOCTYPE html>
<html>
    <head>
        <title> Fetching data </title>
    </head>

    <body>
        <a href="https://php-practice-samyuravikumar.c9users.io/V8.0/webDevUser21.html">Return to Website</a>
        <table width="400" border="2" cellpadding="2" cellspacing='1'>

           <tr bgcolor="#2ECCFA">
                     <th>Name</th>
                     <th>Shark Name</th>
                     <th>Shark Age</th>
                     <th>Shark Gender</th>
           </tr>

<!-- We use while loop to fetch data and display rows of date on html table -->

<?php

     while ($course = mysql_fetch_assoc($records)){

           echo "<tr>";
               echo "<td>".$course['name']."</td>";
               echo "<td>".$course['shark_name']."</td>";
               echo "<td>".$course['shark_age']."</td>";
               echo "<td>".$course['shark_gender']."</td>";
           echo "</tr>";

     }
?>
        </table>

<h2>Delete Entry</h2>
    <form method='post' action='delete.php'>
        <input type="text" placeholder="Shark Name" name='sharkName'>
        <input type='submit' value='Delete Entry' name='delete'>
    </form>

<h2>Update Entry</h2>
<p>Fill out what you would like to update.</p>
    <form method='post' action='update.php'>
        <input type="text" placeholder="Your Name" name='firstName'>
        <input type="text" placeholder="Shark Name" name='sharkName'>
        <input type="text" placeholder="Shark Age" name='sharkAge'>
        <input type="text" placeholder="Shark Gender" name='sharkGender'>
        <input type='submit' value='Update' name='delete'>
    </form>


   </body>

</html>