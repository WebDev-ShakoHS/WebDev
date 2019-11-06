<?php
require_once("db_connect.php"); 

?>

<html>
<head>
<link href="WebDevUser12.css" rel="stylesheet" type="text/css">
 <title>My Phobias</title>
</head>
<body class ="home">
<h1>
My Phobias:
</h1>
<p class = "hey"><a href="create.php">Add Phobias</a></p>
<?php
db();
global $link;
$query = "SELECT id, phobiaTitle, phobiaDescription, date FROM phobias";
$result = mysqli_query($link, $query);
//check if there’s any data inside the table
if(mysqli_num_rows($result) >= 1){
 while($row = mysqli_fetch_array($result)){
 $id = $row['id'];
 $title = $row['phobiaTitle'];
 $date = $row['date'];
?>
<ul>
 <li><a href="detail.php?id=<?php echo $id?>"><?php echo $title ?></a></li> <?php echo "[[ $date ]]";?>
     <a href="delete.php?del_task=<?php echo $id ?>">x</a> 
 </ul>
<!--<input name="delete" type="text">
<input type="submit" name="submit" value="Delete">-->
<?php
 }
}
?>
    

</body>

<?php
    
    //if (isset($_GET['del_task'])) {
	//$id = $_GET['del_task'];

	//mysqli_query($link, "DELETE FROM todo WHERE id=".$id);
	//header('location: index.php');
//}

    
    //if(isset($_GET["submit"])){
	   //$idd = $_GET['delete'];

	//mysqli_query($link, "DELETE FROM tasks WHERE id=".$idd);
    //header('location: index.php');
   // }
            
        //$title = $_POST["todoTitle"]; IGNORE
        //$description = $_POST["todoDescription"]; IGNORE
        //connect to database IGNORE
    
    // db();
    // global $link;
    
     //$query = "INSERT INTO todo(todoTitle, todoDescription, date) VALUES ('$title', '$description', now())";
    //$insertTodo = mysqli_query($link, $query);
    //if($insertTodo){
        //echo "Successful.";
        //}
    //}
        
    //if (isset($_GET['delete'])) {
	//$id = $_GET['delete'];

	//mysqli_query($link, "DELETE FROM tasks WHERE id=".$id);
	//header('location: index.php');
//}
?>
</html>