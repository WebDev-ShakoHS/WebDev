<!DOCTYPE html>

<html lang="en">

<head>

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Preston Keplin</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
                    <a href="index.php" class="nav-item nav-link ">Home/index</a>
                    <a href="weatherR.php" class="nav-item nav-link " tabindex="-2">Weather</a>
                    <a href="games2.html" class="nav-item nav-link " tabindex="-2">Functions</a>
                    <a href="table.php" class="nav-item nav-link active" tabindex="-2">Sports</a>
                    <a href="class.php" class="nav-item nav-link " tabindex="-2">About me</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                </div>
            </div>
        </nav>
    </div>



    <div class="container">
        <h5>My top Favorite NFL players</h5>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Show more</button>
        <div id="demo" class="collapse in">

            <table>
                <table border="10">

                    <thead>
                        <tr>
                            <th>Rank#</th>
                            <th>Team</th>
                            <th>Player</th>
                        </tr>
                    </thead>



                    <tr>
                        <td>1</td>
                        <td>Steelers</td>
                        <td>Antonio brown</td>
                    </tr>



                    <tr>
                        <td>2</td>
                        <td>Steelersk</td>
                        <td>Ben Roethlisberger</td>
                    </tr>


                    <tr>
                        <td>3</td>
                        <td>Falcons</td>
                        <td>Matt Ryan</td>
                    </tr>



                    <tr>
                        <td>4</td>
                        <td>Falcons</td>
                        <td>Julio Jones</td>
                    </tr>



                    <tr>
                        <td>5</td>
                        <td>Patirots</td>
                        <td>Rob Gronkowski</td>
                    </tr>




                </table>




                <div id="footer">

                    <p>




                    </p>

                </div>
        </div>
    </div>



</body>

</html>
