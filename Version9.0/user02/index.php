<?php
$apiKey = "dfe3032a3bd8a367a7948bf40cbb0f05"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//imperial-Farhenheit
if ($units == 'metric'){//Changes the $temp varaible to match 
    $temp = "C";
}
else {
    $temp = "F";
}

if ($temp < 50){
    echo "<body style='background-color:#5F9EA0'>";
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

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">My Website</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Music.html">Music</a></li>
            <li><a href="List.html">List</a></li>
            <li><a href="FAQ.html">FAQ</a></li>
            <li><a href="Games.html">Games</a></li>
            <li><a href="http://127.0.0.1:8080/WebDev/Version9.0/user02/index.php">Weather</a></li>
            <li><a href="indexcomm.php">CRUD</a></li>
        </ul>
    </div>
</nav>  
     <link rel='icon' href='images/favicon.ico' type='image/x-icon'/ >
      <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">
            <meta charset="utf-8">
<title>Forecast Weather using OpenWeatherMap with PHP</title>

<style>
body

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
    color: black;
}

.time {
    line-height: 25px;
}
</style>
<link rel='icon' href='images/favicon.ico' type='image/x-icon' />
</head>
<body>
   

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
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>

        <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}
</style>
    
<div class="footer">
  <p>Contact information:
    226402@shakopeeschools.org</p>
</div>
     <link rel='icon' href='images/favicon.ico' type='image/x-icon'/ >
      <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">
            <meta charset="utf-8">

</body>
</html>