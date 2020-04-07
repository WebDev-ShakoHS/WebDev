<html lang="en">
<!--Version 7.0 
	Name:
	Date Completed:
    -->

<head>

    <title>The Bronx</title>

    <link href="CSS/SampleCSSV7.css" rel="stylesheet" type="text/css">

    <link rel='icon' href='Stoplight.png' type='image/x-icon' />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/SampleJS.js"></script>
    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Put your .js files here ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./CSS/SampleCSSV7.css">
    <?php $cityId = "5819656";?>
    <?php include 'weather.php';?>

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

    </style>
</head>

<body onload="startTime()">
    <!---------------------------------- Begin the nav-bar ------------->
    <div id="txt"></div>

    <div class="menu">
        <div class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                     <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="newyork.php" class="nav-item nav-link">New York City</a>
                    <a href="Bronx.php" class="nav-item nav-link active">The Bronx</a>
                    <a href="Brooklyn.html" class="nav-item nav-link" tabindex="-1">Brooklyn</a>
                    <a href="Manhattan.html" class="nav-item nav-link " tabindex="-1">Manhattan</a>
                    <a href="Queens.html" class="nav-item nav-link " tabindex="-1">Queens</a>
                    <a href="Staten%20Island.html" class="nav-item nav-link" tabindex="-1">Staten Island</a>
<a href="FAQs.php" class="nav-item nav-link" tabindex="-1">FAQs</a>
                    <a href="ebayAPI.php" class="nav-item nav-link" tabindex="-1">New York Souvenirs</a>
                </div>
            </div>
        </div>
    </div>


    <h3>The Bronx</h3>

    <p> The Bronx is one of the five boroughs of New York City. It is home to over 1.4 million people.</p>

    <h4>Attractions</h4>

    <p> Landmarks inside the Bronx include Yankee stadium, the New York Botanical Garden,the Bronx Zoo and the Hudson River</p>

    <h5> Sources</h5>

    <p>
        <li><a href=https://en.wikipedia.org/wiki/The_Bronx target="blank"> Click here to learn more about the Bronx</a></li>
    </p>

   
   
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
   ]<footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 item">
                            <h3>Email</h3>
                            <ul>
                                <li><a href="#">School email</a></li>
                                <li><a href="#">Personal email</a></li>
                            
                            </ul>
                        </div>
                        
                    
                        <div class="col-md-6 item text">
                            <h3>About the Web Designer</h3>
                            <p>Ajay Inampudi is currently a freshman attending shakopee high school.</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                   
                </div>
            </footer>

</html>
