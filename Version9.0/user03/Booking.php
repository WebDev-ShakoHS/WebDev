<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $days = $rooms = $arrival = "";
$name_err = $days_err = $rooms_err = $arrival_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
   $input_days = trim($_POST["days"]);
    if(empty($input_days)){
        $days_err = "Please enter the number of days you'd like to make your reservation.";
    } else{
        $days = $input_days;
    }
    
    // Validate address
    $input_rooms = trim($_POST["rooms"]);
    if(empty($input_rooms)){
        $rooms_err = "Please enter how many and what type of rooms you wish to reserve.";     
    } else{
        $rooms = $input_rooms;
    }
    
    // Validate address
    $input_arrival = trim($_POST["arrival"]);
    if(empty($input_arrival)){
        $arrival_err = "Please enter the date you plan on arriving.";     
    } else{
        $arrival = $input_arrival;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($days_err) && empty($rooms_err) && empty($arrival_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO booking (name, days, rooms, arrival) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_days, $param_rooms, $param_arrival);
            
            // Set parameters
            $param_name = $name;
            $param_days = $days;
            $param_rooms = $rooms;
            $param_arrival = $arrival;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: Landing.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">
    <title>Book a Room</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/favicon.ico">


</head>

<body>

    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="Home%20Index.html" class="nav-item nav-link">Home</a>
                    <a href="Menu.html" class="nav-item nav-link">Menu</a>
                    <a href="Lodging.html" class="nav-item nav-link" tabindex="-1">Lodging</a>
                    <a href="weather/Monster%20Watch.html" class="nav-item nav-link" tabindex="-2">Monster Watch</a>
                    <a href="FAQ.html" class="nav-item nav-link" tabindex="-2">FAQ</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="Landing.php" class="nav-item nav-link active">Book a Room</a>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header">
                        <h2>Make Your Reservation</h2>
                    </div>
                    <p>Please fill this form to make a reservation at The Trickster's Cauldron.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Under what name should we make your reservation?</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($days_err)) ? 'has-error' : ''; ?>">
                            <label>How many days do you plan on staying with us?</label>
                            <input type="number" name="days" class="form-control" value="<?php echo $days; ?>">
                            <span class="help-block"><?php echo $days_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($rooms_err)) ? 'has-error' : ''; ?>">
                            <label>What types of rooms do you wish to reserve? How many rooms?</label>
                            <input type="text" name="rooms" class="form-control" value="<?php echo $rooms; ?>">
                            <span class="help-block"><?php echo $rooms_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($arrival_err)) ? 'has-error' : ''; ?>">
                            <label>What date do you plan on arriving at the Trickster's Cauldron?</label>
                            <input type="datetime" name="arrival" class="form-control" value="<?php echo $arrival; ?>">
                            <span class="help-block"><?php echo $arrival_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
