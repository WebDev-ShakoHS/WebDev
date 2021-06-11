<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
//if(isset($_SESSION["loggedin"]) === false){
  //  header("location: login.php");
  //  exit;
    
//}
$API_KEY = "UN9SCS0BZG1BYA0S.";
$ch = curl_init();
$stock = "NVT";
curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=".$stock."&apikey=" . $API_KEY));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
$result = json_decode($server_output);

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
    <meta name="description" content="SHS WebDev Menu Sample">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">

    <title>Wide World of Web Development</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/fontawesome.css">

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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Me</a>
                    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Music</a>
                    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Lists</a>
                    <a href="gallery.php" class="nav-item nav-link" tabindex="-1">Photo Gallery</a>
                    <a href="review.php" class="nav-item nav-link" tabindex="-1">Review</a>
                    <a href="reviews.php" class="nav-item nav-link" tabindex="-1">Reviews</a>
                    <a href="mailto:rmainhar@shakopeeschools.org?Subject=Hello" class="nav-item nav-link disabled" tabindex="-1">Contact</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                        } 
                        else{ 
                            echo "<a href='login.php' class='nav-item nav-link'> Login </a>";
                        } ?>
                </div>
            </div>
        </nav>
    </div>

    <div class="wideMargin" id="content">
        <div class="row">
            <div class="col-md-2">
                <h2 class="text-left my-3">Home</h2>
            </div>

        </div>
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Hello,
                    <?php 
                    if(isset($_SESSION["loggedin"]) === false){
                        echo "Web Developers";
                    }
                    else{
                        echo htmlspecialchars($_SESSION["username"]);
                    }?>
                    !
                </h1>
                <p>Web Development @ SHS is pretty lit! You will learn all about how to make a website.</p>
                <p><a class="btn btn-primary btn-lg" href="https://www.shakopee.k12.mn.us/Page/8605" target="_blank" role="button">Learn more »</a></p>
            </div>
        </div>
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>HTML</h2>
                    <p>You will learn the basic HTML that will give you an idea of how a webpage is put together. Syntax and how we add HTML elements to make up a page will be our jumping off point.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Bootstrap Styling</h2>
                    <p>How to make a website that is not only appealing, but can adapt to any device you decide to view it on. You will learn how to use the Bootstrap library to make your website look awesome!</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div>
                <div class="col-md-4">
                    <h2>PHP</h2>
                    <p>You will learn how to login to a website and where the information goes when you hit submit!</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div>
                <hr>
            </div>
                <?php
                    $dataForAllDays = $result->{'Time Series (Daily)'};
                    $dataForSingleDate = $dataForAllDays->{'2020-04-03'};
                        echo '<table border="1px">';
                            echo'<tr>';
                                echo'<td>';
                                    echo $dataForSingleDate->{'1. open'} . '<br/>';
                                echo'</td>';
                                echo'<td>';
                                    echo $dataForSingleDate->{'4. close'} . '<br/>';
                                echo "</td>";
                            echo"</tr>";
                        echo "</table>";
                ?>
        </div>


    </div>
    <div class="wideMargin" id="footer">
        <p>

            Webpage made by <a href="index.php" target="_blank">[Mainhardt 2020]</a>
        </p>
    </div>

</body>

</html>
