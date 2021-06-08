<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="images/JS6.ico"/>

    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <br>
    <h1>
        <center>You are now logged in!<center>
    </h1>

    <h2 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to my travel site.</h2>
    <p>
        <a href="logout.php" class="btn btn-secondary">Sign Out of Your Account</a>
        <a href="reset-password.php" class="btn btn-secondary">Change Password</a>
        <a href="index.php" class="btn btn-success">Return to Website</a>

    </p>
</body>

</html>