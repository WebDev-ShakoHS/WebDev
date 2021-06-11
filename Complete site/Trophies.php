<!DOCTYPE html>
<html lang="en">
<!--Version 4.0
        Name:
        Date Completed:
    -->

<head>
     <!--Favicon-->
    <link rel="icon" type="image/png" sizes="16x16"
    href="images/MessiHead.ico/favicon-16x16.png">

    <title>MESSI Site</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WebDev Version 4.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <style type="text/css">
        menu {
            margin: 0;
            padding: 0;
        }

        .wideMargin {
            margin: 15px;
        }

        footer {
            font-size: 12px;
            text-align: center;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 32%;
            margin-bottom: .6em;
            display: inline-block;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .nameplate {
            padding: 2px 16px;
        }

        .paragraph p {
            font-family: Arial, Helvetica, sans-serif;
            display: inline;
        }


        .orange {
            color: orange;
        }

        h2,
        h3,
        h4 {
            white-space: nowrap
        }
    </style>
</head>

<body>
    <!---------------------------------- Begin the nav-bar ------------->
    <menu>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">Lionel Messi</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index1.php" class="nav-item nav-link active">Home</a>
                    <a href="Biography.php" class="nav-item nav-link">Biography</a>
                    <a href="statsAndGames.php" class="nav-item nav-link">Stats</a>
                    <a href="Trophies.php" class="nav-item nav-link">Trophies</a>
                    <a href="SHOP.php" class="nav-item nav-link">Messi Shop</a>
                    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Edit These Items in your Menu ↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="index.php" class="nav-item nav-link active">CART</a>
                    <a href="login.php" class="nav-item nav-link active">Login</a>
                    <a href="logout.php" class="nav-item nav-link active">Logout</a> 
                </div>
            </div>
        </nav>
    </menu>
    <!---------------------------------- End the nav-bar ------------------------------------->

    <main class="wideMargin">

        <h1 class="text-left my-3 title" tabindex="0">Trophy Page</h1>
        <!-- Edit this line for the title of your page -->

        <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Put your content below this line ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
        <div class="card">
            <img src="images/Champions league.jpeg"
                alt="champions League" style="width:100%;">
            <div class="nameplate">
                <h4><b>Champions League Trophy</b></h4>
                <p>Messi has won this 4 times</p>
            </div>
        </div>
        <div class="card">
            <img src="images/Laliga.jpeg"
                alt="La Liga" style="width:100%;">
            <div class="nameplate">
                <h4><b>La Liga</b></h4>
                <p>Messi has won this 10 times</p>
            </div>
        </div>
        <div class="card">
            <img src="images/MessiTrophies.jpeg"
                alt="All Trophies" style="width:100%;">
            <div class="nameplate">
                <h4><b>All Trophies</b></h4>
                <p>This is a collage of all trophies Messi has won(as of 2020)</p>
            </div>
        </div>
        <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Make sure all your content is above this line ↑↑↑↑↑↑↑↑↑-->
    </main>

</body>
<!---------------------------------- Begin the footer ------------->
<footer>
    <div class="foot">
        <span class="title">Follow Messi Here!</span>
        <table id="footerTable">
            <tr>
                <td>
                    <a href="https://www.facebook.com/leomessi"><i class="fa fa-facebook fa-3x"
                            aria-hidden="true"></i></a>
                </td>
                <td>
                    <a href="https://twitter.com/TeamMessi"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
                </td>
                <td>
                    <a href="https://www.instagram.com/leomessi/"><i class="fa fa-instagram fa-3x"
                            aria-hidden="true"></i></a>
                </td>
            </tr>
        </table>
    </div>
</footer>
<!---------------------------------- End the footer ------------->
</html>