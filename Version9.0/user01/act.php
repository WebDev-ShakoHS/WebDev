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
    <div style="padding:20px;margin-top:30px;height:1500px;">
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
        <div>
            <h1>Hotel Transylvania 1</h1>
            <dl>
                <dd><h3>Adam Sandler</h3></dd>
                <dt><img src="images/v1.jpeg" width="" height="292"></dt>

                <dd><h3>Andy Samburg</h3></dd>
                <dt><img src="images/v2.jpeg" width="" height="292"></dt>

                <dd><h3>Selena Gomez</h3></dd>
                <dt><img src="images/v3.jpeg" width="" height="292"></dt>

                <dd><h3>Kevin James</h3></dd>
                <dt><img src="images/v4.jpeg" width="" height="292"></dt>

                <dd><h3>Fran Drescher</h3></dd>
                <dt><img src="images/v5.jpeg" width="" height="292"></dt>

                <dd><h3>Steve Buscemi</h3></dd>
                <dt><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTSMcYE03I1EXUegHDH8M2N-6rVSAVKZB02x4lfIO_tzP2wr7U%3Ahttps%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fd%2Fd7%2FSteve_Buscemi_2018.jpg&usqp=CAU" width="" height="292"></dt>

                <dd><h3>Molly Shannon</h3></dd>
                <dt><img src="images/v7.jpeg" width="" height="292"></dt>

                <dd><h3>David Spade</h3></dd>
                <dt><img src="images/v8.jpg" width="" height="292"></dt>

                <dd><h3>CeeLo Green)</h3></dd>
                <dt><img src="images/v9.jpeg" width="" height="292"></dt>

                <dd><h3>Jon Lovitz</h3></dd>
                <dt><img src="images/v10.jpeg" width="" height="292"></dt>

                <dd><h3>Jackie Sandler</h3></dd>
                <dt><img src="images/v11.jpg" width="" height="292"></dt>

                <dd><h3>Sadie Sandler</h3></dd>
                <dt><img src="images/v12.jpeg" width="" height="292"></dt>
            </dl>
        </div>
        <div>
            <h1>Hotel Transylvania 2 (Listing only New Characters)</h1>
            <dl>
                <dd><h3>Asher Blinkoff</h3></dd>
                <dt><img src="images/v13.jpg" width="" height="292"></dt>

                <dd><h3>Megan Mullally</h3></dd>
                <dt><img src="images/v14.jpg" width="" height="292"></dt>

                <dd><h3>Nick Offerman</h3></dd>
                <dt><img src="images/v15.jpeg" width="" height="292"></dt>

                <dd><h3>Dana Carvey</h3></dd>
                <dt><img src="images/v16.jpeg" width="" height="292"></dt>
                
                <dd><h3>Mel Brooks</h3></dd>
                <dt><img src="images/v17.jpeg" height="292"></dt>
            </dl>
        </div>
        <div>
            <h1>Hotel Transylvania 3 (Listing only New Characters)</h1>
            <dl>
                <dd><h3>Jim Gaffigan</h3></dd>
                <dt><img src="images/v18.jpeg" width="" height="292"></dt>

                <dd><h3>Kathyrn Hahn</h3></dd>
                <dt><img src="images/v19.jpg" width="" height="292"></dt>

                <dd><h3>Chris Parnell</h3></dd>
                <dt><img src="images/v20.jpeg" width="" height="292"></dt>

                <dd><h3>Joe Jonas</h3></dd>
                <dt><img src="images/v21.jpeg" width="" height="292"></dt>
            </dl>
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
    </div>
</body>

</html>
