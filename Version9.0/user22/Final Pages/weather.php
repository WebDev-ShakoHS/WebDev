<?php
$apiKey = "d065e1951fc4d4e3ca77fc8d02e0a708"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'metric'){//Changes the $temp varaible to match 
    $temp = "C";
}
else {
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

<!doctype html>
<html>

<head>
     <script src="CSS/SampleCSS.css"></script>
    <script src="JS/SampleJS2.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Adam's Website</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Forecast Weather using OpenWeatherMap with PHP</title>

    <style>
        .align{
            margin-left: 50%;
        }

        .report-container {
            border: #000000 5px solid;
            padding: 20px 20px 20px 20px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: white;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-left: 15px;
            color: white;
        }

        .time {
            line-height: 25px;
            color:white;
        }
        .white{
            color: white;
        }
        
        .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}

    </style>

</head>

<body>
<script src="jquery-3.4.1.slim.js">
    </script>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://127.0.0.1:8080/webdev/" class="navbar-brand">WebDev Index</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    
                    <a href="http://127.0.0.1:8080/webdev/Version9.0/user22/Final%20Pages/Home.html" tabindex="-2" class="nav-item nav-link active">Home</a>
                    <a href="http://127.0.0.1:8080/webdev/Version9.0/user22/Final%20Pages/Aboutme.html" tabindex="-2" class="nav-item nav-link active">About Me</a>
                    <a href="http://127.0.0.1:8080/webdev/Version9.0/user22/Final%20Pages/Music.html" tabindex="-2" class="nav-item nav-link active">Music</a>
                    <a href="http://127.0.0.1:8080/webdev/Version9.0/user22/Final%20Pages/List.html" tabindex="-2" class="nav-item nav-link active">Lists</a>
                    <a href="http://127.0.0.1:8080/webdev/Version9.0/user22/Final%20Pages/Games.html" tabindex="-2" class="nav-item nav-link active">Games</a>
                    <a href="http://127.0.0.1:8080/webdev/Version9.0/user22/Final%20Pages/Sports.html" tabindex="-2" class="nav-item nav-link active">Sports</a>
                    <a href="http://127.0.0.1:8080/WebDev/Version9.0/user22/Final%20Pages/weather.php" tabindex="-2" class="nav-item nav-link active">Weather</a>


                </div>
                <div class="navbar-nav ml-auto">
                    <a href="index.html" class="nav-item nav-link active" tabindex="-3">Login</a>
                    <a href="Logout.html" class="nav-item nav-link active" tabindex="-3">Log Out</a>
                </div>
            </div>
        </nav>
    </div>
 <div class="wideMargin" id="content">
            <div class="row">
                <div class="col-md-12 col-xs-4">
                    
                    <h4>If the weather apps background is green it is an nice day out for you to go and practice or work on your favorite sport or activity.</h4>
                
    <?php
if ($data->main->temp_max > 45){
$color='green';
}
else{
$color='blue';
}

?>

    <div class="align">
        <div class="report-container" style="background-color:<?php echo $color ?>;">
            <h3 class="white"><?php echo $data->name; ?> Weather Status</h3>
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
        </div>
    </div>
   </div>
            </div>
        </div>
    <div class="footer">
  <p>Weather</p>
</div>

</body>

</html>
