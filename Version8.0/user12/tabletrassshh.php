<?php
echo "<h1>HI</h1>"

$con = mysql_connect("localhost","lightlylife","Rose12131");
     if(!$con){
           die("Database Connection failed".mysql_error());
}else{
$db_select = mysql_select_db($con,"ghost");
     if(!$db_select){
           die("Database selection failed".mysql_error());
}else{ 

   } 
}

$records = mysql_query("SELECT * FROM trashpick");

 

?>

<!-- This piece of PHP code defines the structure of the html table -->

 

<!DOCTYPE html>
<html>
    <link href="tabletrassshh.css" rel="stylesheet" type="text/css"/>
    <head>
        <title> Fetching data </title>
    </head>

    <body>
        <a href="/Version8.0/webDevUser12.html">Return to Website</a>
        <table width="400" border="2" cellpadding="2" cellspacing='1'>

           <tr bgcolor="#2ECCFA">
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Address</th>
           </tr>

<!-- We use while loop to fetch data and display rows of date on html table -->

<?php

     while ($course = mysql_fetch_assoc($records)){

           echo "<tr>";
               echo "<td>".$course['first_name']."</td>";
               echo "<td>".$course['last_name']."</td>";
               echo "<td>".$course['address']."</td>";
           echo "</tr>";

     }
?>
        </table>

<h2>No longer need a trash pick up? Just delete it now!</h2>
    <form method='post' action='delete.php'>
        <input type="text" placeholder="Address" name='address'>
        <!--<input type="text" placeholder="Last Name" name='last_name'>-->
        <input type='submit' value='Delete Entry' name='delete'>
    </form>

<h2>Update Entry</h2>
<p>Did you move, so your address is no longer right? Thats okay, just update it!</p>
    <form method='post' action='update.php'>
        <input type="text" placeholder="Last Name" name='last_name'>
        <input type="text" placeholder="Fist Name" name='first_name'>
        <input type="text" placeholder="address" name='address'>
        <input type='submit' value='Update' name='delete'>
    </form>


   </body>
</html>