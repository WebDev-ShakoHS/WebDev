<html>
<link href="WebDevUser12.css" rel="stylesheet" type="text/css">
</html>
<?php
require_once "db_connect.php";

db();
global $link;

if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];
    $sql = "DELETE FROM phobias WHERE ID= '$id'";
}
if(mysqli_query($link, $sql)){ 
    echo "Record was deleted successfully."; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                   . mysqli_error($link); 
} 
mysqli_close($link); 

//if (isset($_GET['del_task'])) {
	//$id = $_GET['del_task'];
    //db();
   // global $link;
	//mysqli_query($link, "DELETE FROM todo WHERE id=",$id);
	//header('location: index.php');

    //}
//else{
    //echo 'Nothing to delete.';
 //}
?>

<a href="index.php">Back</a>