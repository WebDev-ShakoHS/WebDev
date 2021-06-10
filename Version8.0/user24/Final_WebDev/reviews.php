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

        header {

            border-bottom: solid 3px rgb(146, 146, 146);
        }

        .user1 {
            color: rgb(62, 107, 137);
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
        <center>Reviews</center>
    </h1>
</header>


<body>

    <h1>
        <center>War Thunder</center>
    </h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam pellentesque nec nam aliquam sem. Quisque sagittis purus sit amet volutpat. Cras pulvinar mattis nunc sed blandit libero volutpat sed cras.</p>

    <h1>
        <center>Rust</center>
    </h1>
    <p>Est placerat in egestas erat imperdiet sed euismod nisi porta. Vulputate enim nulla aliquet porttitor lacus luctus. Aliquam ultrices sagittis orci a scelerisque purus semper eget duis. Massa placerat duis ultricies lacus. Urna neque viverra justo nec ultrices dui sapien.</p>

    <h1>
        <center>Rainbow Six Siege</center>
    </h1>
    <p>Commodo ullamcorper a lacus vestibulum sed arcu non. Varius duis at consectetur lorem. Semper risus in hendrerit gravida. Libero enim sed faucibus turpis in. Nisl nunc mi ipsum faucibus vitae aliquet. Amet facilisis magna etiam tempor orci eu lobortis elementum nibh. Viverra orci sagittis eu volutpat odio.</p>

    <h1>
        <center>Destiny 2</center>
    </h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam pellentesque nec nam aliquam sem. Quisque sagittis purus sit amet volutpat. Cras pulvinar mattis nunc sed blandit libero volutpat sed cras. Est placerat in egestas erat imperdiet sed euismod nisi porta.</p>





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