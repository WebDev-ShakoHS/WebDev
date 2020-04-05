<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
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
 <link href="CSS/SampleCSSV7.css" rel="stylesheet" type="text/css">
    <link rel='icon' href='home.png' type='image/x-icon'/>
    <title>Welcome</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        body {
            font: 14px sans-serif;
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
                    <a href="#" class="nav-item nav-link active ">Home</a>
                    <a href="newyork.php" class="nav-item nav-link">New York City</a>
                    <a href="Bronx.php" class="nav-item nav-link ">The Bronx</a>
                    <a href="Brooklyn.html" class="nav-item nav-link" tabindex="-1">Brooklyn</a>
                    <a href="Manhattan.html" class="nav-item nav-link " tabindex="-1">Manhattan</a>
                    <a href="Queens.html" class="nav-item nav-link" tabindex="-1">Queens</a>
                    <a href="Staten%20Island.html" class="nav-item nav-link " tabindex="-1">Staten Island</a>
                    <a href="FAQs.php" class="nav-item nav-link " tabindex="-1">FAQs</a>
                    <a href="ebayAPI.php" class="nav-item nav-link" tabindex="-1">New York Souvenirs</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='index.php' class='nav-item nav-link'> Login </a>";} ?>
                </div>
            </div>
        </nav>
    </div>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>


</body>

     <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 item">
                            <h3>Email</h3>
                            <ul>
                                <li><a href="#">School email</a></li>
                                <li><a href="#">Personal email</a></li>
                            
                            </ul>
                        </div>
                        
                    
                        <div class="col-md-6 item text">
                            <h3>About the Web Designer</h3>
                            <p>Ajay Inampudi is currently a freshman attending shakopee high school.</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                   
                </div>
            </footer>
    

</html>