<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html language="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Bootstrap sample">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.ico"/>
    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <title>Hotel Transylvania</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/jquery-3.4.1.js"></script>
    <script src="JS/SampleJS.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.ico" />

    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            bottom: 0;
            width: 100%;
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

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: skyblue;
        }

    </style>
</head>

<body>
    <div id="contents" style="padding:20px;margin-top:30px;height:1500px;">
        <div id="navigat">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="characters.php">Notable Characters</a></li>
                <li><a href="plot.php">Plots</a></li>
                <li><a href="trivia.php">Trivia</a></li>
                <li><a href="fin.php">Awards/Financial Successes</a></li>
                <li><a href="act.php">Notable Voice Actors</a></li>
                <li><a href="buy.php">Buy</a></li>
                <li><a href="account.php">Account Settings</a></li>
            </ul>
        </div>
        <div>
            <h1>Hotel Transylvania 1</h1>
            <dl>
                <dd><h3>Dracula (Adam Sandler)</h3></dd>
                <dt><img src="images/c1.jpeg" width="" height=""></dt>

                <dd><h3>Johnathan (Andy Samburg)</h3></dd>
                <dt><img src="images/c2.png" width="" height="292"></dt>

                <dd><h3>Mavis (Selena Gomez)</h3></dd>
                <dt><img src="images/c3.jpg" width="" height="292"></dt>

                <dd><h3>Frankenstein (Kevin James)</h3></dd>
                <dt><img src="images/c4.jpg" width="" height="292"></dt>

                <dd><h3>Eunice (Fran Drescher)</h3></dd>
                <dt><img src="images/c5.jpg" width="" height="292"></dt>

                <dd><h3>Wayne (Steve Buscemi)</h3></dd>
                <dt><img src="images/c6.jpg" width="" height="292"></dt>

                <dd><h3>Wanda (Molly Shannon)</h3></dd>
                <dt><img src="images/c7.png" width="" height="292"></dt>

                <dd><h3>Griffin (David Spade)</h3></dd>
                <dt><img src="images/c8.jpg" width="" height="292"></dt>

                <dd><h3>Murray (CeeLo Green)</h3></dd>
                <dt><img src="images/c9.png" width="" height="292"></dt>

                <dd><h3>Quasimodo (Jon Lovitz)</h3></dd>
                <dt><img src="images/c10.png" width="" height="292"></dt>

                <dd><h3>Martha (Jackie Sandler)</h3></dd>
                <dt><img src="images/c11.jpg" width="" height="292"></dt>

                <dd><h3>Winnie (Sadie Sandler)</h3></dd>
                <dt><img src="images/c12.jpg" width="" height="292"></dt>
            </dl>
        </div>
        <div>
            <h1>Hotel Transylvania 2 (Listing only New Characters)</h1>
            <dl>
                <dd><h3>Dennis (Asher Blinkoff)</h3></dd>
                <dt><img src="images/c13.jpg" width="" height="292"></dt>

                <dd><h3>Grandma Linda (Megan Mullally)</h3></dd>
                <dt><img src="images/c14.png" width="" height="292"></dt>

                <dd><h3>Grandpa Mike (Nick Offerman)</h3></dd>
                <dt><img src="images/c15.jpeg" width="" height="292"></dt>

                <dd><h3>Dana (Dana Carvey)</h3></dd>
                <dt><img src="images/c16.png" width="" height="292"></dt>

                <dd><h3>Blobby (Jonny Soloman)</h3></dd>
                <dt><img src="images/c17.png" width="" height="292"></dt>
                
                <dd><h3>Vlad (Mel Brooks)</h3></dd>
                <dt><img src="images/c69.png" height="292"></dt>
            </dl>
        </div>
        <div>
            <h1>Hotel Transylvania 3 (Listing only New Characters)</h1>
            <dl>
                <dd><h3>Van Helsing (Jim Gaffigan)</h3></dd>
                <dt><img src="images/c18.jpg" width="" height="292"></dt>

                <dd><h3>Ericka (Kathern Hahn)</h3></dd>
                <dt><img src="images/c19.png" width="" height="292"></dt>

                <dd><h3>Stan (Chris Parnell)</h3></dd>
                <dt><img src="images/c20.jpg" width="" height="292"></dt>

                <dd><h3>The Kraken (Joe Jonas)</h3></dd>
                <dt><img src="images/c21.jpg" width="" height="292"></dt>
            </dl>
        </div>
        <h4><b>Characters: </b><a href="">1</a><a href="">2</a><a href="">3</a></h4>
    </div>
    <script>
        (function() {

            $('dd').filter(':nth-child(n+4)').addClass('hide');

            $('dl').on('mouseenter', 'dt', function() {
                $(this)
                    .next()
                    .slideDown(200)
                    .siblings('dd')
                    .slideUp(200);
            });
        })();

    </script>
</body>

</html>
