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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="R6S.php" class="nav-item nav-link ">R6S</a>
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://cdn.mos.cms.futurecdn.net/YeaMUB2bXEYnBEnWxwCnuN.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://blog.playstation.com/tachyon/2015/08/blackops31.jpg?resize=1088,612&crop_strategy=smart" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://cdn2.unrealengine.com/Diesel%2Fproductv2%2Fgrand-theft-auto-v%2Fhome%2FGTAV_EGS_Artwork_1920x1080_Hero-Carousel_V06-1920x1080-1503e4b1320d5652dd4f57466c8bcb79424b3fc0.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div>
        <div class="card">
            <a href="R6S.html"><img src="https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2015/09/30/1331750916642_2/tom-clancy%E2%80%99s-rainbow-six-siege"></img></a>
            <div class="nameplate">
                <h4><b>Rainbow Six Siege</b></h4>
                <p>It has been one of my favorite games for many years and it is very fun.</p>
            </div>
        </div>

        <div class="card">
            <a href="BO3.html"><img src="https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2015/11/09/1331758482843_2/what-were-you-exspectreing"></img></a>
            <div class="nameplate">
                <h4><b>Black Ops 3</b></h4>
                <p>I have just recently gotten into it and the zombies is very fun.</p>
            </div>
        </div>

        <div class="card">
            <a href="GTAV.html"><img src="https://images.indianexpress.com/2020/08/GTA-Online-1200-1.jpg"></img></a>
            <div class="nameplate">
                <h4><b>Grand Theft Auto V</b></h4>
                <p>Very fun if you play with friends and still fun alone.</p>
            </div>
        </div>
    </div>


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