<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <script src="JS/SampleJS.js"></script>
    <link rel="stylesheet" href="CSS/SampleCSS9.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Login">

    <title>Welcome</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        body {
            font: "Verdana", sans-serif;
            text-align: left;
        }

    </style>
    <link rel="shortcut icon" type="image.png" href="images/welcome.jpg">

    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }

    </script>
</head>

<body>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="city1.html">Jodhpur</a>
        <a href="city2.html">Jaipur</a>
        <a href="city3.html">Udaipur</a>
        <a href="city4.html">Jaisalmer</a>
         <a href="FAQ.html">FAQ</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="reset_password.php" class="nav-item nav-link"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
    </div>

    <h1>Beautiful Cities in Rajasthan, India!</h1>
    
    <img src="images/home.png" alt="Rajasthan" width='700' align='left'>
  
    <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
        <img src="images/blue.jpg" draggable="true" ondragstart="drag(event)" id="drag1" width="50">
    </div>
    <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="images/pink.jpg" draggable="true" ondragstart="drag(event)" id="drag1" width="50">
    </div>
    <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="images/lakes.jpg" draggable="true" ondragstart="drag(event)" id="drag1" width="50">
    </div>
    <div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="images/golden.jpg"x draggable="true" ondragstart="drag(event)" id="drag1" width="50">
    </div>
    <div class="d">
    <button class='b'onClick="window.location.reload();">Reset</button>
    </div>
</body>
 <footer class='footer'> Created by: Sahithi Ravva</footer>
</html>
