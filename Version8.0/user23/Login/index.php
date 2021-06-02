<?php session_start(); ?>
<html>

<head>
    <title>Homepage</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div id="header">
        Welcome to my page!
    </div>
    <?php
    if (isset($_SESSION['valid'])) {
        include("connection.php");
        $result = mysqli_query($mysqli, "SELECT * FROM login");
    ?>
        Welcome <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Logout</a><br />
        <br />
        <br /><br />
    <?php
    } else {
        echo "You must be logged in to view this page.<br/><br/>";
        echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
    }
    ?>
    <div id="footer">
    </div>
</body>

</html>