<!DOCTYPE html>
<html>
<title>Home</title>
<?php
$apiKey = "367e06598b498d2ea13ddf6af2f3efeb"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "metric";//metric-Celcius  imperial-Farhenheit
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

<head>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon/">
    <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: blue;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

    </style>
</head>

<body style="background-color: white">
    <ul>
        <li><a class="active" href="index.php" rel="external">Home</a></li>
        <li><a href="Nintendo.html" rel="external">Nintendo</a></li>
        <li><a href="Consoles.html" rel="external">Consoles</a></li>
        <li><a href="Games.html" rel="external">Games</a></li>
        <li><a href="Favorites.html" rel="external">Favorites</a></li>
        <li><a href="Franchise.html" rel="external">Franchise</a></li>
        <li><a href="Innovation.html" rel="external">Innovation</a></li>
        <li><a href="Future.html" rel="external">Future</a></li>
    </ul>
    <style>
        body {
            background-image: url('images/nintendo-2-logo-png-transparent.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

    </style>
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
    </div>

</body>
   <footer>
    <center>
    <p>website by Elijah Hamilton</p>
    </center>
</footer>
</html>
