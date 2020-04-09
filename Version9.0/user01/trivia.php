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
            <li><a href="characters.php"> Notable Characters</a></li>
            <li><a href="plot.php">Plots</a></li>
            <li><a href="trivia.php">Trivia</a></li>
            <li><a href="fin.php">Awards/Financial Successes</a></li>
            <li><a href="act.php">Notable Voice Actors</a></li>
            <li><a href="buy.php">Buy</a></li>
            <li><a href="account.php">Account Settings</a></li>
        </ul>
        <div>
            <h1>Hotel Transylvania 1</h1>
            <br>
            <h3 id="q1">What is Quasimodo's pet rat's name?</h3>
            <table>
                <tr><th><button id="s1">Show Answer</button></th><th><button id="h1">Hide Answer</button></th></tr>
            </table>
            <br>
            <h3 id="q2">Which character only wears dark clothes on the plane?</h3>
            <table>
                <tr><th><button id="s2">Show Answer</button></th><th><button id="h2">Hide Answer</button></th></tr>
            </table>
            <br>
            <h3 id="q3">What inspired Eunice's hair?</h3>
            <table>
                <tr><th><button id="s3">Show Answer</button></th><th><button id="h3">Hide Answer</button></th></tr>
            </table>
            <br>
            <h3 id="q4">On what day was the film, Hotel Transylvania, released?</h3>
            <table>
                <tr><th><button id="s4">Show Answer</button></th><th><button id="h4">Hide Answer</button></th></tr>
            </table>
        </div>
        <div>
            <h1>Hotel Transylvania 2</h1>
            <br>
            <h3 id="q5">How many years have gone by since the first movie?</h3>
            <table>
                <tr><th><button id="s5">Show Answer</button></th><th><button id="h5">Hide Answer</button></th></tr>
            </table>
            <br>
            <h3 id="q6">What is Vlad's address?</h3>
            <table>
                <tr><th><button id="s6">Show Answer</button></th><th><button id="h6">Hide Answer</button></th></tr>
            </table>
            <br>
            <h3 id="q7">When was Dennis born?</h3>
            <table>
                <tr><th><button id="s7">Show Answer</button></th><th><button id="h7">Hide Answer</button></th></tr>
            </table>
            <br>
            <h3 id="q8">What movie is Adam Sandler's first animated sequal?</h3>
            <table>
                <tr><th><button id="s8">Show Answer</button></th><th><button id="h8">Hide Answer</button></th></tr>
            </table>
        </div>
        <div>
            <h1>Hotel Transylvania 3: Summer Vacation</h1>
            <br>
            <h3 id="q9">What is a Chupacabra?</h3>
            <table>
                <tr><th><button id="s9">Show Answer</button></th><th><button id="h9">Hide Answer</button></th></tr>
            </table>
            <br>
            <h3 id="q10">How Many Children does Wanda Have?</h3>
            <table>
                <tr><th><button id="s10">Show Answer</button></th><th><button id="h10">Hide Answer</button></th></tr>
            </table>
            <br>
            <h3 id="q11">What was the hardest thing to Animate in the thrid movie?</h3>
            <table>
                <tr><th><button id="s11">Show Answer</button></th><th><button id="h11">Hide Answer</button></th></tr>
            </table>
            <br>
            <h3 id="q12">What is the largest monster in the franchise?</h3>
            <table>
                <tr><th><button id="s12">Show Answer</button></th><th><button id="h12">Hide Answer</button></th></tr>
            </table>
            <br>
            <h3 id="q13">Who are the Gremlins from the Monster airlines voiced by?</h3>
            <table>
                <tr><th><button id="s13">Show Answer</button></th><th><button id="h13">Hide Answer</button></th></tr>
            </table>
        </div>
    </div>
</body>

</html>
