<html lang="en">
<!--Version 7.0 
	Name: Landon
	Date Completed:
    -->

<head>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>McMonalds Map</title>
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

</head>
<style>
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

    <center>
        <header>
            <h2>locations of McMonalds Globaly</h2>
        </header>
    </center>
    <main>
        <center><img src="images/MC global.jpeg" style="height: 90%;" </center>
            <u>
                <h2><a href="MiniMap.php">State Locations</a>
            </u></h2>
    </main>
    <footer>
        <div class="col-sm-6 bigM" style="background-color:yellow"><span>
                <center>McMonalds incorperated</center>
            </span></div>
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