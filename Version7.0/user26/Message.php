<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html lang="en">
<!--Version 7.0 
	Name: Landon
	Date Completed:
    -->

<head>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>McMonalds Message</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WebDev Version 7.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>

</head>
<style type="text/css">
    body {
        background-image: url(images/mcdonalds-drive-through-restaurant.jpeg);
        background-size: cover;
    }
</style>

<body>
    <!---------------------------------- Begin the nav-bar ------------->
    <menu>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">McMonalds</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">

                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="Menu.php" class="nav-item nav-link">Menu</a>
                    <a href="Message.php" class="nav-item nav-link">Order</a>
                    </div>
                                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                    </div>

                </div>
                <div class="navbar-nav ml-auto">
                    <a href="Sign.php" class="nav-item nav-link">Review</a>
                </div>
            </div>
        </nav>
    </menu>
    <!---------------------------------- End the nav-bar ------------------------------------->

    <header>
        <center>Select Takoeut</center>
    </header>

    <div class="row">
        <div class="col-sm-4" style="background-color:red; ">
            <center><button type="button" onclick="changeText()">Click if you want to make an order</button></center>
        </div>
        <div class="col-sm-4" style="background-color:red;">
            <center>
                <p id="textChange"> You have not selected an order</p>
            </center>
        </div>

        <div class="col-sm-4" style="background-color:Red;"><input type="text" onkeydown="TextAlert()"> Enter your ID
            number</div>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-4" style="background-color:yellow;">
            <center>
                <div class="dropdown">
                    <button onclick="ButtonClick()" class="dropbtn">Select main dish</button>
                    <div id="myDropdown" class="dropdown-content">
                        <strong><button type="button" onclick="changeTextm()"> Little Mac</button></strong>
                        <strong><button type="button" onclick="changeTextck()"> Chicken Sandwich</button></strong>
                        <strong><button type="button" onclick="changeTextch()"> Cheeseburger</button></strong>
            </center>
        </div>
        <div class="col-sm-4" style="background-color:yellow;">
            <center>
                <div class="dropdown">
                    <button onclick="ButtonClickside()" class="dropbtn">Select side dish</button>
                    <div id="myDropdown1" class="dropdown-content">
                        <strong><button type="button" onclick="changeTextf()"> French Fries</button></strong>
            </center>
        </div>
        <div class="col-sm-4" style="background-color:yellow;">
            <center>
                <div class="dropdown">
                    <button onclick="ButtonClickdes()" class="dropbtn">Select dessert dish</button>
                    <div id="myDropdown2" class="dropdown-content">
                        <strong><button type="button" onclick="changeTextd()"> Sundae</button></strong>
            </center>
        </div>
    </div>
    <p><strong>
            <h3>
                Your order is <p id="textChangef"> </p>
                <p id="textChanged"> </p>
                <p id="textChangech"> </p>
                <p id="textChangeck"> </p>
                <p id="textChangem"> </p>
            </h3>
        </strong></p>
    <div class="col-lg-3" style="background-color:red;">
        <div onmousedown="PressText(event);">
            <h1>Proceed to Takeout</h1>
            <p>
            <h1><u> here for Takeout</u></h1><br>
        </div>
    </div>    
<footer>
    <div class="col-sm-6 bigM" style="background-color:yellow"><span> <center>McMonalds incorperated</center></span></div>
    <table id="footerTable">
        <tr>
            <td>
                <i class="fa fa-facebook fa-5x" aria-hidden="true"></i>
            </td>
            <td>
                <i class="fa fa-twitter fa-5x" aria-hidden="true"></i>
            </td>
            <td>
                <i class="fa fa-instagram fa-5x" aria-hidden="true"></i>
            </td>
            <td>
                <H4> McMonalds 1883-2021, All rights reserved</H4>
            </td>
        </tr>
    </table>
</footer>
</body>

</html>