<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";

 $id = trim($_GET["id"]);

$sql = "DELETE FROM usersx WHERE id = ?";
$stmt = mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt, "s", $param_id);
$param_id = $id;
mysqli_stmt_execute($stmt);

if(mysqli_affected_rows($link) == 1){ 
    header("location: logout.php");
}  
else{ 
    echo "ERROR: Could not able to execute.".mysqli_error($link); 
} 



?>