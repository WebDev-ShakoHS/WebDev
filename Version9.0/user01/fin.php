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
        <div id="navagat">
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
            <a><b>Financial: </b>the budget of this film was $85 million. The world wide gross was $358.37 million.</a>
            <br>
            <a><b>Awards: </b>this film was nominated for fifteen awards but only won two awards; The Kids' Choice award: Favorite Voice in an Animated Movie, and it was awarded to Adam Sandler (Who voiced Dracula) and the BMI Film Music Award for Film Musis, awarded to Mark Mothersbaugh.</a>
        </div>
        <div>
            <h1>Hotel Transylvania 2</h1>
            <a><b>Financial: </b>the budget for this movie was $80 million. The world wide gross was $474.8 million.</a>
            <br>
            <a><b>Awards: </b>this film was nominated for ten awards but only won a single one. Kids' Choice Awards: Favorite Animated Movie, awarded to Hotel Transylvania 2.</a>
        </div>
        <div>
            <h1>Hotel Transylvania 3: Summer Vacation</h1>
            <a><b>Financial: </b>the budget for this film was $80 million. The world wide gross was $528.6 million.</a>
            <br>
            <a><b>Awards: </b>this film was nominated for eight awards but only won two. Kids' Choice Award for Favorite Male Voice Actor from an Animated Movie (Adam Sandle) and Favorite Female Voice Actor from an Animated Movie (Selena Gomez).</a>
        </div>
        <br>
        <h4><b>Financial: </b><a href="https://www.boxofficemojo.com/release/rl5801473/"> 1 </a><a href="https://www.boxofficemojo.com/title/tt2510894/?ref_=bo_se_r_3"> 2 </a><a href="https://www.boxofficemojo.com/title/tt5220122/?ref_=bo_se_r_2"> 3 </a></h4>
        <h4><b>Awards: </b><a href="https://www.imdb.com/title/tt0837562/awards"> 1 </a><a href="https://www.imdb.com/title/tt2510894/awards?ref_=tt_ql_op_1"> 2 </a><a href="https://www.imdb.com/title/tt5220122/awards?ref_=tt_ql_op_1"> 3 </a></h4>
    </div>
</body>

</html>
