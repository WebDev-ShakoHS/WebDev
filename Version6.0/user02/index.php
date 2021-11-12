<?php
$apiKey = "7334105bc96a1bae5a0a2db5d516f0be"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'imperial'){//Changes the $temp varaible to match 
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

<html lang="en">
<!--Version 6.0 
	Name: User # o2
	Date Completed:
    -->

<head>
    <title>Adrians Comic Shop </title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="SHS WebDev Version 3.0">

<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS/style.css">

<!-- JavaScript -->
<!-- These are needed to get the responsive menu to work -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<!---------------------------------- Begin Company Logo ------------->
<center><img src="images/logo.jpg"></center>

<!---------------------------------- Emd Company Logo------------->
 <!---------------------------------- Begin the nav-bar ------------->
 <div class="menu">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="http://shakonet.isd720.com" class="navbar-brand"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link active"> Home </a>
                <a href="Link1.html" class="nav-item nav-link">Comics</a>
                <a href="Link2.html" class="nav-item nav-link" tabindex="-1">Contact</a>
                <a href="link3.html" class="nav-item nav-link"> Play a game</a>
            </div>
        </div>
    </nav>
</div>
<!---------------------------------- End the nav-bar ------------->
<!---------------------------------- Begin the body ------------->
<center>
<h3> 
<middle> 
    Welcome to the shop, we have the below items for sale. Check out our Comic page to see what else is available. 
    <br>  
    <img height="50%" width="30%" src="images/batman__cover.jpeg"> 
    <br> Use our contact page to learn more.
</middle>
</h3> 

<!-- Start of Back/Forward Buttons Script-->
<!-- Instructions: Just put this script anywhere on your webpage
	and you will give your visitor 2 Back and Forward Navigation
	buttons.  Designed for websites that have multiple webpages.
-->
<SCRIPT LANGUAGE="JavaScript">
<!-- hide this script tag's contents from old browsers
function goHist(a) 
{
   history.go(a);      // Go back one.
}
//<!-- done hiding from old browsers -->
</script>
<FORM METHOD="post">
<INPUT TYPE="button" VALUE="  BACK " onClick="goHist(-1)">
<INPUT TYPE="button" VALUE="FORWARD" onClick="goHist(1)">
</form>

<!-- End of Back/Forward Buttons Script -->
</center>



<!---------------------------------- End the Body ------------->
<br>
<hr>
<br>
<!---------------------------------- Begin the footer ------------->
<footer> 
    <a href="index.php" class="nav-item nav-link active"> Home </a>
    <a href="Link1.html" class="nav-item nav-link">Comics</a>
    <a href="Link2.html" class="nav-item nav-link active" tabindex="-1">Contact</a> 
    <a href="link3.html" class="nav-item nav-link"> Play a game </a>
    <center><img height="65" width="150" src="images/logo.jpg">

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
</footer>

</center> 


<!---------------------------------- End the footer ------------->

    
</body>
</html>
