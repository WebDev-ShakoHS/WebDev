<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$apiKey = "7c4c44b492486abe022028f0a0d17518"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "metric";//metric-Celcius  imperial-Farhenheit
if ($units == 'metric'){//Changes the $temp varaible to match 
    $temp = "C";
}
else {
    $temp = "F";
}
if ($data->main->temp_max > 10)
  echo "it is ht out";

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
<html lang="en">
<!--Version 7.0 
	Name: Landon
	Date Completed:
    -->

<head>

    <title>McMonalds</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WebDev Version 7.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>

    <style>
        body {
            background-image: url(images/mcdonalds-drive-through-restaurant.jpeg);
            background-size: cover;
        }

        .marginwide {
            margin-left: 200px;
            margin-right: 200px;
            margin-bottom: 200px;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

</head>

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

    <header>
        <center>
            <h1><h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, Welcome to McMonalds!</h1></h1>
        </center>
    </header>
    <div class="dropdown">
        <button onclick="ButtonClick()" class="dropbtn">
            <h3><strong>Locations</h3></strong>
        </button>
        <div id="myDropdown" class="dropdown-content">
            <a href="Map.php">World Locations</a>
            <a href="MiniMap.php">State Locations</a>
        </div>
    </div>
    
    <div class="row marginwide">
        <div class="col-lg-10" style="background-color:Red;">
                    <center>
                    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <h5> See if you can go to McMonalds <?php echo htmlspecialchars($_SESSION["username"]); ?>! <h5>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /><h1> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?></h1><span
                class="min-temperature"><h1> <?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></h1></span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
                    </center>
        </div>
    </div>        
    <div class="row marginwide">
        <div class="col-lg-10" style="background-color:Red;">
            <center>
                <strong>
                    <p>
                    <h1>
                        Try our new Chicken Sandwich on the Menu!
                    </h1>
                    </p>
                </strong>
                <img src="images/1382539317193.jpeg" alt="Picture of Chicken Sandwich" style="height: 450px;">
                <a href="Sign.php"><u>
                        <h1>Earn multiple rewards right here</h1>
                    </u></a>
                <a href="Message.php"><u>Or click here to order the Sandwich on Takeout</u></a>
            </center>
        </div>
    </div>
    <div class="row marginwide">
        <div class="col-lg-10" style="background-color:yellow;">
            <center>
                <h1>
                    <div class="dropdown">
                </h1>
                <button onclick="ButtonClickdes()" class="dropbtn">
                    <h1>See our new French Fries ingredients</h1>
                </button>
                <div id="myDropdown2" class="dropdown-content">
                    <strong><button type="button" onclick="changeText()">
                            <h1>Potataos, Salt, Vegtable Oil and Sodium Acid Pyrophosphate</h1>
                        </button></strong>
                    <img src="images/download.jpeg" alt="Picture of French Fries" style="height: 250px;">
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6" style="background-color:red">
            <center>
                <strong><u>
                        <h1>
                            McMonalds
                        </h1>
                    </u></strong>
                <h3>
                    is helping the community
                </h3>
                <h3>
                    By bringing back famous
                </h3>
                <h3>
                    recipes to the menu
                </h3>
            </center>
        </div>
        <div class="col-lg-6" style="background-color:red">
            <center>
                <img src="images/origin.jpeg" alt="Picture of a Sundae" style="height: 200px; width: 350px;">
            </center>
        </div>
    </div>
    <footer>
        <div class="col-sm-6 bigM" style="background-color:yellow"><span> <center>McMonalds incorperated</center></span></div>
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
                <td>
                    <H4> <a href="Order.php" class="nav-item nav-link"> Click here to add a new item on the menu</a></H4>
                </td>
            </tr>
        </table>
    </footer>
</body>

</html>