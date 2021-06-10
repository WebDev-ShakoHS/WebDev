<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html lang="en">
<!--Version 7.0 
	Name: Landon
	Date Completed:
    -->

<head>

    <title>McMonalds</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WebDev Version 7.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>

    <style>

    
        body {
            background-image: url(images/mcdonalds-drive-through-restaurant.jpeg);
            background-size: cover;
        }

        .marginwide {
            margin-left: 200px;
            margin-right: 200px;
            margin-bottom: 200px;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>

<body>

    <!---------------------------------- Begin the nav-bar ------------->
    <menu>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">McMonalds</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">

                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="Menu.php" class="nav-item nav-link">Menu</a>
                    <a href="Message.php" class="nav-item nav-link">Order</a>
                    </div>
                                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                    </div>

                </div>
                <div class="navbar-nav ml-auto">
                    <a href="Sign.php" class="nav-item nav-link">Review</a>
                </div>
            </div>
        </nav>
    </menu>  
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">New Proposed food</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add new item to  the menu!</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM foods";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Name</th>";
                                        echo "<th>Ingredients</th>";
                                        echo "<th>Cost (in cents)</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><p> update <p></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><p> delete <p></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>   
    <footer>
        <div class="col-sm-6 bigM" style="background-color:yellow"><span> <center>McMonalds incorperated</center></span></div>
        <table id="footerTable">
            <tr>
                <td>
                    <i class="fa fa-facebook fa-5x" aria-hidden="true"></i>
                </td>
                <td>
                    <i class="fa fa-twitter fa-5x" aria-hidden="true"></i>
                </td>
                <td>
                    <i class="fa fa-instagram fa-5x" aria-hidden="true"></i>
                </td>
                <td>
                    <H4> McMonalds 1883-2021, All rights reserved</H4>
                </td>
            </tr>
        </table>
    </footer>
</body>