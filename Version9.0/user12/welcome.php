<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Login">

    <title>Summer Activities</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="CSS/CSS.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="image.png" href="images/sun.ico">

    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
            background: linear-gradient(to right, rgba(147, 184, 116, 0), rgba(234, 195, 195, 1));
            font-family: "Verdana", sans-serif;
        }

        .foottext {
            font-family: "Verdana", sans-serif;
        }

    </style>
</head>

<body>

    <div class="topnav">
        <a class="active" href="welcome.php">Home</a>
        <a href="index.html">Bonfires</a>
        <a href="two.html">Sunsets</a>
        <a href="three.html">Movies</a>
        <a href="four.html">Water</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

        <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
    </div>


    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the summer fun site!</h1>
    </div>

    <img src="https://d.newsweek.com/en/full/1310267/best-hawaii-beaches.jpg" width="600" alt="pretty beach with sunset">

    <p> </p>

    <u>
        <h3>Most Popular Summer Activites Per Generation</h3>
    </u>

    <div class="container">
        <table class="table table-striped table-bordered">
            <tr>
                <th>Generation</th>
                <th>Activity</th>
                <th>Percentage</th>
            </tr>
            <tr>
                <td>Millenial</td>
                <td>going to the beach</td>
                <td>43%</td>
            </tr>
            <tr>
                <td>Millenial</td>
                <td>having a picnic/barbeque</td>
                <td>40%</td>
            </tr>
            <tr>
                <td>Gen X</td>
                <td>having a pincic/barbeque</td>
                <td>54%</td>
            </tr>
            <tr>
                <td>Gen X</td>
                <td>going for a walk/hike</td>
                <td>46%</td>
            </tr>
            <tr>
                <td>Baby Boomer</td>
                <td>having a pincic/barbeque</td>
                <td>64%</td>
            </tr>
            <tr>
                <td>Baby Boomer</td>
                <td>going for a walk/hike</td>
                <td>58%</td>
            </tr>
        </table>
    </div>

    <p> </p>

    <div class="footer-basic">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="welcome.php">Home</a></li>
                <li class="list-inline-item"><a href="welcome.php">About</a></li>
                <li class="list-inline-item"><a href="welcome.php">Terms</a></li>
            </ul>
            <p class="copyright">Summer Fun © 2020</p>
        </footer>
    </div>

</body>

</html>
