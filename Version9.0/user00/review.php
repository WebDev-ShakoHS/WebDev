<?php
// Initialize the session
/*session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) === false){
    header("location: login.php");
    exit;
    
}*/
?>
<html lang="en">
<!--Version 9.0
        Name:Mr. M
        Date Completed:
    -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="about Mr. M">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">

    <title>Wide World of Web Development</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="JS/standard.js"></script>

    <!-- Latest compiled and minified CSS -->
     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
   <link rel="stylesheet" href="https://time4areview.com/clashofclanshack/src/bootstrap.superhero.css">
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

        .red {
            background-color: red;
            font-family: cursive;
        }

    </style>
</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com/WebDev" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Me</a>
                    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Music</a>
                    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Lists</a>
                    <a href="gallery.php" class="nav-item nav-link" tabindex="-1">Photo Gallery</a>
                    <a href="review.php" class="nav-item nav-link active" tabindex="-1">Review</a>
                    <a href="reviews.php" class="nav-item nav-link" tabindex="-1">Reviews</a>
                    <a href="mailto:rmainhar@shakopeeschools.org?Subject=Hello" class="nav-item nav-link disabled" tabindex="-1">Contact</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                        } 
                        else{ 
                            echo "<a href='login.php' class='nav-item nav-link'> Login </a>";
                        } ?>
                </div>
            </div>
        </nav>
    </div>

    <div class="wideMargin" id="content">

        <h2 class="text-left my-3">Reviews</h2>

        <div class="panel panel-default" style="">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-fire" style="margin-right: 10px;"></i> Latest Comments</h3>
            </div>
            <div id="X00Comment" class="panel-body">
                <div style="text-align: left; display: block;"><img src="images/a15.jpg" alt="" class="media-object"><span class="label label-default" style="font-weight: bold; margin-top: -20px;">SoteraГ±a</span> <span class="label label-success" style="font-weight: bold;">Can recommend this thanks for free Gems </span> <span id="X00CommentSeconds" class="label label-info" style="font-weight: bold;">13s ago</span></div>
            </div>
            <div class="panel-footer small">
                <span class="label label-default"><strong>Info</strong></span><span class="label label-default"> You can leave a comment after you have used our generator.</span> <span class="label label-default">Comments are delayed due to high traffic.</span><br><br>
                <span class="label label-danger"><strong><a href="#" style="color: #fff; cursor: pointer;"> Post Comment</a></strong></span>

            </div>
        </div>

    </div>
    <div class="wideMargin" id="footer">
        <p>

            Webpage made by <a href="index.php" target="_blank">[Mainhardt 2020]</a>
        </p>
    </div>
</body>

</html>
