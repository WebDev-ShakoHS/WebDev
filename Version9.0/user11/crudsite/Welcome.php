<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!--style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style-->
</head>
<body>    <div class="container p4">

    <div class="page-header p4">
        <h1>Hi, <b><?= $_SESSION["username"]; ?></b>. Welcome to AntiSocial SocialMedia.</h1>
    </div>
   
    <p>
        <a href="createpost.php" class="btn btn-warning">Create Post</a>
        <a href="settings.php" class="btn btn-danger">Settings</a>
    <a href="crudsite/Version8.0/user11/webDevUser11.html" class="btn btn-warning">Go to Website</a>
    </p>
        </div>
 <img src="tyisgay.jpeg"> 
    <img src="thanosss.jpeg">
    
    </body>
</html>