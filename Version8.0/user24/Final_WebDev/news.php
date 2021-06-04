<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="../user24/images/favicon.ico" />
    <title>Shift Reviews</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Version 3.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <style>
        #bodychange {

            margin: 32px;
        }

        h3 {

            color: rgb(62, 107, 137);

        }

        body {
            color: white;

        }

        .dropdown {
            color: white;

            padding: 10px;
        }

        
    </style>

</head>

<menu>
<nav class="navbar navbar-expand-md navbar-dark navbar2">
        <a href="index.php" class="navbar-brand"><img src="images/WebLogo_100x100.png"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="reviews.php" class="nav-item nav-link">Reviews</a>
                <a href="news.php" class="nav-item nav-link">News</a>
                <a href="registration.php" class="nav-item nav-link">Register</a>

            </div>
            <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
        </div>
    </nav>
    <!---------------------------------- End the nav-bar ------------------------------------->
</menu>

<header>
    <h1>
        <center>
            <div class="nav-item dropdown">
                <a class="dropdown nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Select The Game Here
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <form onsubmit="alfachange(); return false"><button type="submit" class="dropdown-item">War Thunder
                            News</button>
                    </form>
                    <form onsubmit="betachange(); return false"><button type="submit" class="dropdown-item">Rust
                            News</button>
                    </form>
                    <form onsubmit="charliechange(); return false"><button type="submit" class="dropdown-item">Rainbow6
                            Siege News</button>
                    </form>
                    <form onsubmit="deltachange(); return false"><button type="submit" class="dropdown-item">Destiny 2
                            News</button>
                    </form>

                </div>
            </div>
        </center>
    </h1>

</header>


<body>



    <div id="textChange">
        <h3></h3>
        <p><i></i></p>
        <h3></h3>
        <p><i></i></p>
        <h3></h3>
        <p><i></i></p>
    </div>

</body>
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 mx-auto">

                <!-- Content -->
                <img src="images/WebLogo_100x100.png">

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4"></h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Contact Us</a>
                    </li>
                    <li>
                        <a href="#!">Store</a>
                    </li>
                    <li>
                        <a href="#!">About US</a>
                    </li>
                    <li>
                        <a href="#!">FAQ</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">



            <hr class="clearfix w-100 d-md-none">


            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
            <a href="registration.php">
                <h5 class="mb-1" style="color: rgb(37, 78, 105);"><u>Register for free</u></h5>
            </a>
        </li>

    </ul>
    <!-- Call to action -->

    <hr>

    <!-- Social buttons -->


    <table>
        <tr>
            <td>
                <a href="https://www.facebook.com/" target="_blank">
                    <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                </a>
            </td>
            <td>
                <a href="https://twitter.com/?lang=en" target="_blank">
                    <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                </a>
            </td>
            <td>
                <a href="https://www.instagram.com/" target="_blank">
                    <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
    </table>


    <!-- Social buttons -->

</html>