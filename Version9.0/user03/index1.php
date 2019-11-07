
    <?php
$apiKey = "4c0b3b0463633d433a79dd5835ff3bcf";
$cityId = "5046997";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=imperial&APPID=" . $apiKey;

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
<title>Forecast Weather using OpenWeatherMap with PHP</title>
    <ul>
<li><a href="webDevUser03.html">Home</a></li>

                                <li><a href="webDevUser03_AboutMe.html">About</a></li>

                            <li><a href="webDevUser03_Games.html">Games</a></li>
                            
                            <li><a href="webDevUser03_FAQ.html">FAQ</a></li>
                            
                            <li><a href="vacationTracker.html">Vacation Tracker</a></li>
                            
                            <li><a href="index3.html">Movie Database</a></li>
                            
                            
                            
                            <li><a href="index2.html">Weather Tracker 2.0</a></li>
        
        <li><a href="WebDevUser03_Articles.html">Articles</a></li>
    </ul>
<style>
body {
    font-family: Arial;
    font-size: 0.95em;
    color: #929292;
}
ul {
    background-color: afa5a5;
    text-align: center;
    color: ffffff;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid #ffffff;
    width: 17%; 
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
    


</head>
<body>
<body style="background-color:#929292">
    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;F<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;F</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>


</body>
</html>
<?php
$apiKey = "4c0b3b0463633d433a79dd5835ff3bcf";
$cityId2 = "1850144";
$googleApiUrl2 = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId2 . "&lang=en&units=imperial&APPID=" . $apiKey;

$ch2 = curl_init();

curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch2, CURLOPT_VERBOSE, 0);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
$response2 = curl_exec($ch2);

curl_close($ch2);
$data2 = json_decode($response2);
$currentTime2 = time();
?>

<!doctype html>
<html>
<head>
<title>Forecast Weather using OpenWeatherMap with PHP</title>

<style>
body {
    font-family: Arial;
    font-size: 0.95em;
    color: #929292;
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

    <div class="report-container">
        <h2><?php echo $data2->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime2); ?></div>
            <div><?php echo date("jS F, Y",$currentTime2); ?></div>
            <div><?php echo ucwords($data2->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data2->main->temp_max; ?>&deg;F<span
                class="min-temperature"><?php echo $data2->main->temp_min; ?>&deg;F</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data2->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data2->wind->speed; ?> km/h</div>
        </div>
    </div>

</body>
</html>