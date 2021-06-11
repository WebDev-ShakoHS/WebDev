<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if($_SESSION["loggedin"] === false){
    header("location: login.php");
    exit;
}


// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$agent = $reason = $income = "";
$agent_err = $reason_err = $income_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["agent"]))){
        $agent_err = "Please enter which lawyer you would like.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM requests WHERE agent = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_agent);
            
            // Set parameters
            $param_agent = trim($_POST["agent"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                $agent = trim($_POST["agent"]);
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    //Enter reason for service
    if(empty(trim($_POST["reason"]))){
        $password_err = "Please enter a reason.";     
    } elseif(strlen(trim($_POST["reason"])) < 6){
        $password_err = "Statement must be over 6 characters.";
    } else{
        $password = trim($_POST["reason"]);
    }
    
    // Enter Annual Income
    if(empty(trim($_POST["income"]))){
        $income_err = "Please enter your income.";     
    } elseif(strlen(trim($_POST["income"])) < 2){
        $income_err = "You are too poor";
    } else{
        $income = trim($_POST["income"]);
    }
    
    // Check input errors before inserting in database
    if(empty($agent_err) && empty($reason_err) && empty($income_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO requests (agent, reason, income) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_agent, $param_reason, $param_income);
            
            // Set parameters
            $param_agent = $username;
            $param_reason = $reason;
            $param_income = $income;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: clients.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>My Account </title>
    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
            margin-top: 75px;
        }

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
        

        #slogan {
            font-family: verdana;
            font-size: 40px;
            margin-bottom: 60px;
            margin-top: 60px;

        }

        .lies {

            margin-top: 50px;
            margin-bottom: 50px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
        }


        #content {
            margin-left: 100px;
            margin-right: 100px;
        }

        .color{
            background-color: #FFFAF5;
        }
    </style>
</head>

<body>
<header>
    <!--Start Navbar-->
    <ul class="menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="team.php">Our Team</a></li>
        <li><a href="clients.php">Clients</a></li>
        <li><a href="reviews.php">Reviews</a></li>
        <li><a href="CRUD/index.php">Requests</a></li>
        <li style="float:right"><a href="account.php" class="active">My ULS</a></li>

    </ul>
</header>

    <div class="wrapper">
        <h1>My Account</h1>
        <h3 id="Slogan">
                   We Value You
        </h3>
        <h4>We're here to help</strong></h4>
        <p class="lies">
                    Thank you for being a valued customer! We appreciate you in every way we can and will give and continue 
                    to give you the world class service your expect

        </p>

        <p class="lies">
                    If you would like to speak with a lawyer, consider upgrading your subscription to Membership Plus!
        </p>
        <p class="lies">
                    If you would like to logout, click the button below.
        </p>
    </div>
    <div class="form-group">
                
        <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo'<a class="btn btn-primary" href="logout.php" role="button">LOGOUT</a>';
                    } 
                ?>
    </div>
        
        </form>
    
</body>

</html>
