<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page

 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
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
    <link rel="icon" type="image/x-icon" href="../user24/images/favicon.ico" />
    <title>Shift Reviews</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Version 3.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>

    <style>
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: rgb(62, 107, 137);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }


        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }

        body div  {
            color: white;

        }

        .title {
            color: rgb(62, 107, 137);

        }

        form center h2 {

            color: white;
            margin-bottom: 185px;
        }
        .wrapper {
            width: 350px;
            padding: 20px;
        }

        .res {
            color: rgb(62, 107, 137);
        }

    </style>
</head>

<menu>
<nav class="navbar navbar-expand-md navbar-dark navbar2">
        <a href="index.php" class="navbar-brand"><img src="images/WebLogo_100x100.png"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="reviews.php" class="nav-item nav-link">Reviews</a>
                <a href="news.php" class="nav-item nav-link">News</a>
                <a href="registration.php" class="nav-item nav-link">Register</a>

            </div>
            <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
        </div>
    </nav>
    <!---------------------------------- End the nav-bar ------------------------------------->
</menu>

<body>
<div class="wrapper">
        <h1>Login</h1>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="registration.php">Sign up now</a>.</p>
        </form>
    </div>


</body>

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 mx-auto">

                <!-- Content -->
                <img src="images/WebLogo_100x100.png">

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4"></h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Contact Us</a>
                    </li>
                    <li>
                        <a href="#!">Store</a>
                    </li>
                    <li>
                        <a href="#!">About US</a>
                    </li>
                    <li>
                        <a href="#!">FAQ</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">



            <hr class="clearfix w-100 d-md-none">


            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
            <a href="registration.php">
                <h5 class="mb-1" style="color: rgb(37, 78, 105);"><u>Register for free</u></h5>
            </a>
        </li>

    </ul>
    <!-- Call to action -->

    <hr>

    <!-- Social buttons -->


    <table>
        <tr>
            <td>
                <a href="https://www.facebook.com/" target="_blank">
                    <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                </a>
            </td>
            <td>
                <a href="https://twitter.com/?lang=en" target="_blank">
                    <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                </a>
            </td>
            <td>
                <a href="https://www.instagram.com/" target="_blank">
                    <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
    </table>


    <!-- Social buttons -->

</html>