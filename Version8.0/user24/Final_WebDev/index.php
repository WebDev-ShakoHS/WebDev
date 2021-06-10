<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<?php
$apiKey = "ebd65c93d2e951a2e0db3da4cb7b919f"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial"; //metric-Celcius  imperial-Farhenheit
if ($units == 'metric') { //Changes the $temp varaible to match 
    $temp = "C";
} else {
    $temp = "F";
}
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=" . $units . "&APPID=" . $apiKey;



$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="../Final_WebDev/images/favicon.ico" />
    <title>Shift Reviews</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Version 3.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Final_WebDev/CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>

    <style>
        header h1 {
            margin-bottom: 10px;

        }

        .jumbotron {

            margin-bottom: 0%;
            background-color: rgb(56, 56, 56);
            overflow: hidden;
            height: 400px;
            width: 1050px;
            justify-content: center;
            padding-top: 32px;
        }

        .vaxban {


            width: 500px;

            padding-top: 0%;
            margin: auto;
            text-align: center;
            margin-bottom: 50px;
        }

        #bannerimg {
            margin: 0%;
            height: 500px;
            width: 1050px;
            float: left;

        }

        .col-lg-2 {
            height: 100px;
            background-color: rgb(146, 146, 146);
            border-top: 3px solid rgba(0, 0, 0, 0.5);
            border-bottom: 3px solid rgba(0, 0, 0, 0.5);
            margin-bottom: 50px;


        }

        .user1 {
            color: rgb(62, 107, 137);
        }

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 10px 20px 20px 20px;
            border-radius: 2px;
            width: 300px;
            margin: 0 auto;
            background-color: darkgrey;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: #212121;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-left: 15px;
            color: black;
        }

        .time {
            line-height: 25px;
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
              

            </div>
            <div>
                <center> <a href="password_reset.php" class="user1 nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a> </center>

                <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    echo "<center><a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a></center>";
                } else {
                    echo "<a href='login.php' class='nav-item nav-link'> Login </a>";
                } ?>
            </div>
    </nav>
    <!---------------------------------- End the nav-bar ------------------------------------->
</menu>
<header>

    <h1>
        <center>Shift Reviews</center>
    </h1>



    <div class="container">
        <div class="jumbotron">
            <img id="bannerimg" src="../Final_WebDev/images/offBanner.png">
        </div>
    </div>

    <div class="vaxban">
        <h2>Make Sure You Get Your <a href="#" style="color: rgb(62, 107, 137);">Vaccination</a> </h2>
    </div>

</header>
<!------------------------------------------------------------------------------------>

<body>
    <h1>
        <center>Game Guides</center>
    </h1>


    <div class="row">
        <div class="card col-md-3">
            <img class="Cardimg" src="images/Warthunderimg.png" alt="War Thunder title image" style="width:100%">
            <div class="container">
                <a href="#" target="_blank" onclick="openwar()">
                    <h4><b>War Thunder</b></h4>
                </a>
                <p>By: Gaijin Entertainment</p>
            </div>

        </div>
        <div class="card col-md-3">

            <img src="images/Rustimg.png" alt="Rust title image" style="width:100%">
            <div class="container">
                <a href="#" target="_blank" onclick="openrust()">
                    <h4><b>Rust</b></h4>
                </a>
                <p>By: Facepunch Studios</p>
            </div>

        </div>
        <div class="card col-md-3">

            <img src="images/Rainbow6img.png" alt="Rainbow six siege title image" style="width:100%">
            <div class="container">
                <a href="#" target="_blank" onclick="openr6()">
                    <h4><b>Rainbow Six Siege</b></h4>
                </a>
                <p>By: Ubisoft</p>
            </div>

        </div>
        <div class="card col-md-3">

            <img src="images/Destiny2img.png" alt="Destiny two title image" style="width:100%">
            <div class="container">
                <a href="#" target="_blank" onclick="openD2()">
                    <h4><b>Destiny 2</b></h4>
                </a>
                <p>By: Bungie Inc</p>
            </div>

        </div>
    </div>
    <!------------------------------------------------------------------------------------>
    <h1>
        <center>Top News Stories</center>
    </h1>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-2">

                <p>
                    <center><i>Siege Leauge will have games on this Saturday from 12am to 5pm.</i> </center>
                </p>
            </div>
            <div class="col-lg-2">
                <p>
                    <center><i>The Offical Rust Servers are now up and running for everyone to enjoy.</i> </center>
                </p>
            </div>
            <div class="col-lg-2">
                <p>
                    <center><i>There have been possible leaks on an update for War Thunder.</i> </center>
                </p>
            </div>
            <div class="col-lg-2">
                <p>
                    <center><i>During an interview the lead game designer hinted at modern day vehicles.</i> </center>
                </p>
            </div>
            <div class="col-lg-2">
                <p>
                    <center><i>The plan to add cars to console, which are in the PC game, are still not know.</i> </center>
                </p>
            </div>
            <div class="col-lg-2">
                <p>
                    <center><i>The competitive mode trials will recive a new update following the season release.</i> </center>
                </p>
            </div>

        </div>

    </div>
    <!------------------------------------------------------------------------------------>
    <h1>
        <center>In Game Items Discounted With Your Code</center>
    </h1>

    <div class="row">

        <div class="card col-md-2">
            <div class="container">
                <h4><b>War Thunder</b></h4>
                <p>(T34)</p>
            </div>
        </div>
        <div class="card col-md-2">
            <div class="container">
                <h4><b>War Thunder</b></h4>
                <p>(Bf 109 E4)</p>
            </div>
        </div>

        <div class="card col-md-2">
            <div class="container">
                <h4><b>Rust</b></h4>
                <p>(Hatchet)</p>
            </div>
        </div>
        <div class="card col-md-2">
            <div class="container">
                <h4><b>Rust</b></h4>
                <p>(Spear)</p>
            </div>
        </div>

        <div class="card col-md-2">
            <div class="container">
                <h4><b>Siege</b></h4>
                <p>(Bandit Elite Skin)</p>
            </div>
        </div>
        <div class="card col-md-2">
            <div class="container">
                <h4><b>Siege</b></h4>
                <p>(Season Pass)</p>
            </div>
        </div>

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

    <!-- API -->
    <?php if ($data->main->temp_max > "55") {
        echo ("<style> .report-container {background-color: rgba(255, 0, 0, 0.5);} </style>");
    } else {
        echo ("<style> .report-container {background-color: rgba(0, 0, 255, 0.5);} </style>");
    }


    ?>
    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y", $currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
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