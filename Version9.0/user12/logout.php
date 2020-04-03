<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image.png" href="images/write.ico">
    <link rel="stylesheet" href="CSS/CSS.css">
</head>

</html>
