<?php
$apiKey = "e271e34c230a09d9bbb0ea7075422c5e"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'imperial'){//Changes the $temp varaible to match 
    $temp = "F";
}
else {
    $temp = "C";
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
<html lang="en">

<!--Version 9.0
	Name: Dominik Rettinger
	Date Completed: 4/8/2020
    -->

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="SHS WebDev Menu Sample">

    <link rel="icon" type="image/png" href="./images/favicon.ico">

    <title>Web Dev User 25</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="JavaScript Games">
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

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
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
            color: #929292;
        }

        .time {
            line-height: 25px;
        }

    </style>

</head>

<body>


    <div class="menu">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">

            <a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">

                <div class="navbar-nav">

                    <!---------------------------------- Edit These Items in your Menu ------------->

                    <a href="./index.php" class="nav-item nav-link active">Home</a>

                    <a href="./aboutme.html" class="nav-item nav-link active">About Me</a>

                    <a href="./lists.html" class="nav-item nav-link active" tabindex="-2">Lists</a>

                    <a href="mailto:229053@shakopeeschools.org" class="nav-item nav-link active" tabindex="-2">Contact</a>

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

    <div class="wideMargin" id="content">

        <h1 class="text-center my-3">Home</h1>

        <p class="text-center">
            Hello and welcome to my Web Dev Website. My user number is #25 but you can just refer to me as Dom.
        </p>

    </div>


    <div class="wideMargin" id="content">
        <p class="text-center">
            If you want to know more about me, click the 'About me' button on the tab above. There are also lists about things that I like in particular, and along with my contact if you'd like to contact me.
        </p>
    </div>

    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>

        <div class="wideMargin" id="footer">

            <p>

                Webpage made by <a href="index.html" target="_blank">Dominik Rettinger</a>
            </p>
        </div>
    </div>
</body>

</html>
