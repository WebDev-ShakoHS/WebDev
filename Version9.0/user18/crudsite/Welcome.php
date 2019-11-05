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
<img src="Smile.png" height=100px>
    <div class="page-header p4">
        <h1>Hi, <b><?= $_SESSION["firstname"]; ?>   <?php echo $_SESSION["lastname"]; ?></b>.</h1>
        <h2><b><?php echo $_SESSION["username"]; ?></b></h2>
    </div>
    
                <!---Code Here--->
        <a href="user18%20copy/webDevUser18.html" class="btn btn-success">Go to Site</a>
    
    
    
    <p>Your login info has nothing to do with anything for your information.</p>
                <!---End Here--->
    <p>
        <a href="myaccount.php" class="btn btn-warning">My Account</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>        
    </p>
        </div>

</body>
</html>