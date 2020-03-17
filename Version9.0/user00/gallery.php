<?php
// Initialize the session
session_start();
require_once "config.php";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html lang="en">
<!--Version 9.0
        Name:Mr. M
        Date Completed:
    -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Photo Gallery">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">

    <title>Web Dev User 00 </title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Custom styles for this template -->
    <style type="text/css">
        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 15px;
        }

        #footer {
            font-size: 12px;
            text-align: center;
        }

        .red {
            background-color: red;
            font-family: cursive;
        }

        .rounded-XL {
            border-radius: 4rem !important;
        }

    </style>
</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com/WebDev" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="#" class="nav-item nav-link">About Me</a>
                    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Music</a>
                    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Lists</a>
                    <a href="gallery.php" class="nav-item nav-link active" tabindex="-1">Photo Gallery</a>
                    <a href="mailto:sample@gmail.com?Subject=Hello" class="nav-item nav-link disabled" tabindex="-1">Contact</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                </div>
            </div>
        </nav>
    </div>

    <div class="wideMargin" id="content">

        <h2 class="text-left my-3"><?php echo htmlspecialchars($_SESSION["username"]); ?>'s Photo Gallery</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-11">

                    <img src="images/web1.jpg" class="rounded-XL" alt='Photo by <a href="/photographer/mmagallan-38172">Mario Alberto Magallanes Trejo</a> from <a href="https://freeimages.com/">FreeImages</a>' width="100%">
                </div>
                <div class="col-md-1">
                    <div class="row">
                        <div class="col-md-12 col-sm-6">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <input type="submit" class="far fa-thumbs-up fa-5x">
                            </form>
                        </div>
                        <div class="col-md-12 col-sm-6">
                            # of likes
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-11">

                    <img src="images/web2.jpg" class="rounded-XL" alt="" width="100%">
                </div>
                <div class="col-md-1">
                    <div class="row">
                        <div class="col-md-12 col-sm-6">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            </form>
                            <input type="submit" class="far fa-thumbs-up fa-5x">
                        </div>
                        <div class="col-md-12 col-sm-6">
                            # of likes
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="wideMargin" id="footer">
        <p>

            Webpage made by <a href="https://github.com/rmainhar" target="_blank">[Mainhardt 2020]</a>
        </p>
    </div>
</body>

</html>
