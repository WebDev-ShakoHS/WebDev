<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<html lang="en">
<!--Version 7.0 
	Name:
	Date Completed:
    -->

<head>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- Confirmation meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Confirmation">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


</head>

<body ondblclick="whichElement(event)">
<menu>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="#" class="nav-item nav-link disabled"><img src="images/favicon.ico" style="height: 40px;"></img></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="R6S.php" class="nav-item nav-link active">R6S</a>
                    <a href="BO3.php" class="nav-item nav-link">BO3</a>
                    <a href="GTAV.php" class="nav-item nav-link">GTAV</a>
                    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Edit These Items in your Menu ↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                    <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                        echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else {
                        echo "<a href='login.php' class='nav-item nav-link'> Login </a>";
                    } ?>
                </div>
            </div>
        </nav>
    </menu>
    <div class="container">
        <div class="jumbotron">
            <h1>Tom Clancy's Rainbow Six Siege</h1>
            <p>Very Serious Tactical Realism 5v5 Objective Based Round Gameplay. No Time For Jokes!</p>
        </div>
    </div>
    <img onclick="r6Pic(event)" src="https://i.ytimg.com/vi/Ed4BH_M8_fk/hqdefault.jpg" class="animated bounceInLeft delay-5s" style="text-align: center;"></img>
</body>
<footer>
    <span class="title title-small">Footer</span>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <b>Sources</b>
                <p>My Brain</p>
                <p>Mr. M</p>
            </div>
            <div class="col-sm-6">
                <b>JavaScript</b>
                <p>Double Click Elements to See What I Used</p>
                <p>Jump Scare Warning on Black Ops 3</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table id="footerTable">
                    <tr>
                        <td>
                            <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                        </td>
                        <td>
                            <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                        </td>
                        <td>
                            <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</footer>

</html>